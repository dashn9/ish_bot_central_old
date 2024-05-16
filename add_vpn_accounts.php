<?php
$server_name = "localhost";
$server_username = "root";
$server_password = "suck my 1000 N&ughts";

$vpn_pdo = new PDO("mysql:host=$server_name", $server_username, $server_password);
$vpn_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$nordvpn_accounts ="";

$ipvanish="";

function extract_email_pass_from_pool($details, $start_delimiter=":", $end_delimiter="") {
    $accounts = array();
    $match_string = "/.+(?=$end_delimiter)/i";
    preg_match_all($match_string, $details, $matches);
    $matches = $matches[0];
    
    foreach($matches as $match) {
        $match = explode($start_delimiter, $match);
        array_push($accounts, $match);
    }
    return $accounts;
}
function print_email_pass_pools($accounts) {
    for($i=0; $i<count($accounts); $i++){
        echo $i+1 . " --> ". $accounts[$i][0] . " : " . $accounts[$i][1] . "<br>";
    }
}
function insert_vpn_accounts_into_db($accounts, $vpn_client) {
    global $vpn_pdo;
    $table_name = "other_accounts";
    if($vpn_client == "nordvpn") {
        $table_name = "nordvpn_accounts";
    }
    else if($vpn_client == "ipvanish") {
        $table_name = "ipvanish_accounts";
    }
    foreach($accounts as $account) {
        $query = "INSERT INTO `vpn`.`$table_name`(USERNAME, PASSWORD) VALUES('$account[0]', '$account[1]')"; 
        $pdo_sql = $vpn_pdo->prepare($query);
        $pdo_sql->execute();
    }
}
insert_vpn_accounts_into_db(extract_email_pass_from_pool($nordvpn_accounts, ":", ""), "nordvpn");
?>