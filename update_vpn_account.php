<?php
/*$server_name = "localhost";
$server_username = "root";
$server_password = "suck my 1000 N&ughts";

$vpn_pdo = new PDO("mysql:host=$server_name", $server_username, $server_password);
$vpn_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_GET["vpn_client"]) && isset($_GET["account_id"]) && isset($_GET["account_status"])) {
    $vpn_client = $_GET["vpn_client"];
    $account_id = $_GET["account_id"];
    $account_status = $_GET["account_status"];

    $table_name = "other_accounts";
    if($vpn_client == "nordvpn") {
        $table_name = "nordvpn_accounts";
    }
    else if($vpn_client == "ipvanish") {
        $table_name = "ipvanish_accounts";
    }
    $query = "UPDATE `vpn`.`$table_name` SET STATUS = '$account_status', LAST_USED = NOW() WHERE ID = $account_id";

    $pdo_sql = $vpn_pdo->prepare($query);
    
    if($pdo_sql->execute()) {
        echo "successful";
    }
    else {
        echo "void";
    }
}*/
//echo "successfull";

function select_table() {
    // uk uses utc:00 same as server, so there is conformity
    $uk_starting_to_sleep = 10;
    $uk_sleep_begins = 12;
    $uk_sleep_ends = 6;
    $prob_uk_pick = 40;

    $current_hour = date('H');
    $current_minute = date('i');


}