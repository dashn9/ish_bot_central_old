<?php
require("./globals.php");
$server_name = "localhost";
$server_username = "bots_handler";
$server_password = "39DyjMGW9Cm@@.a4";

$identity_pdo = new PDO("mysql:host=$server_name", $server_username, $server_password);
$identity_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST["identity_id"]) && isset($_POST["cookies"])) {
    $identity_id = $_POST["identity_id"];
    $cookies = $_POST["cookies"];

    $query = "UPDATE " . BOTS_DATABASE . "." . BOTS_TABLE . " SET COOKIES = :cookies WHERE ID = $identity_id";

    $pdo_sql = $identity_pdo->prepare($query);
    $pdo_sql->bindParam(':cookies', $cookies, PDO::PARAM_STR);
    
    if($pdo_sql->execute()) {
        echo "successful";
    }
    else {
        echo "void";
    }
}
