<?php
$server_name = "localhost";
$server_username = "root";
$server_password = "suck my 1000 N&ughts";

$vpn_pdo = new PDO("mysql:host=$server_name", $server_username, $server_password);
$vpn_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_GET["vpn_client"])) {
    $vpn_client = $_GET["vpn_client"];
    $table_name = "other_accounts";
    if($vpn_client == "nordvpn") {
        $table_name = "nordvpn_accounts";
    }
    else if($vpn_client == "ipvanish") {
        $table_name = "ipvanish_accounts";
    }
    $query = "SELECT * FROM `vpn`.`$table_name` WHERE STATUS='AUTH_VALID' ORDER BY RAND() LIMIT 1";

    $pdo_sql = $vpn_pdo->prepare($query);
    
    if($pdo_sql->execute()) {
        $account = $pdo_sql->fetch(PDO::FETCH_ASSOC);
        echo json_encode($account);
    }
    else {
        echo "void";
    }
}