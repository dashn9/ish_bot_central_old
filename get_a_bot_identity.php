<?php
require('./globals.php');
$server_name = "localhost";
$server_username = "bots_handler";
$server_password = "39DyjMGW9Cm@@.a4";

$identity_id = 1;

$identity_pdo = new PDO("mysql:host=$server_name", $server_username, $server_password);
$identity_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*
Screen Resoulution Distribution Among PC Identitities
[1920, 1080, 1920, 1080, 1, 25.26]
[1366, 768, 1366, 768, 1, 20.39]
[1536, 864, 1536, 864, 1, 12.35]
[1280, 720, 1280, 720, 1, 8.65]
[1440, 900, 1440, 900, 1, 6.95]
[1600, 900, 1600, 900, 1, 4.17]
[1280, 1024, 1280, 1024, 1, 3.37]
[2560, 1440, 2560, 1440, 1, 3.32]
[768, 1024, 768, 1024, 1, 2.21]
[1024, 768, 1024, 768, 1, 3.01]
[1280, 800, 1280, 800, 1, 1.87]"
[1680, 1050, 1680, 1050, 1, 1.68]
[810, 1080, 810, 1080, 1, 1.31]
[1360, 768, 1360, 768, 1, 1.07]
[800, 600, 800, 600, 1, 1.06]
[360, 800, 360, 800, 1, 0.88]
[1920, 1200, 1920, 1200, 1, 0.77]
[1024, 1366, 1024, 1366, 1, 0.62"]
[834, 1112, 834, 1112, 1, 0.54]
[2048, 1152, 2048, 1152, 1, 0.52]
*/
$fi_table = "";
$fi_value = "";

function fetch_identity($pdo, $table, $value) {
    global $fi_table, $fi_value;
    $fi_table = $table;
    $fi_value = $value;
    $switch_device_req_to_smartphone = function() {
        global $fi_table, $fi_value;
        $fi_table = "DEVICE_TYPE";
        $fi_value = "is_smartphone";
    };
    if($fi_table == "SCREEN_RESOLUTION") {
        $prob_of_switching = rand(0, 100) / 10;
        switch($fi_value) {    
            case "[1920, 1080, 1920, 1080, 1]":
                if($prob_of_switching < 5.8) {//restore back to 5.8
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[1366, 768, 1366, 768, 1]":
                if($prob_of_switching < 6) {//restore back to 6
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[1536, 864, 1536, 864, 1]":
                if($prob_of_switching < 7) {// restore back to 7
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[1280, 720, 1280, 720, 1]":
                if($prob_of_switching < 7.2) {// restore back to 7.2
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[1440, 900, 1440, 900, 1]":
                if($prob_of_switching < 7.4) {// restore to 7.4
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[1600, 900, 1600, 900, 1]":
                if($prob_of_switching < 7.5) {// restore to 7.5
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[1280, 1024, 1280, 1024, 1]":
                if($prob_of_switching < 7.8) {// restore to 7.8
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[2560, 1440, 2560, 1440, 1]":
                if($prob_of_switching < 4) {
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[768, 1024, 768, 1024, 1]":
                if($prob_of_switching < 8) {// resotre to 8
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[1024, 768, 1024, 768, 1]":
                if($prob_of_switching < 8) {// resotre to 8
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[1280, 800, 1280, 800, 1]":
                if($prob_of_switching < 8) {// restore to 8
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[1680, 1050, 1680, 1050, 1]":
                if($prob_of_switching < 7) {// restore to 5
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[810, 1080, 810, 1080, 1]":
                if($prob_of_switching < 8) {
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[1360, 768, 1360, 768, 1]":
                if($prob_of_switching < 8.3) {// restore to 8.3
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[800, 600, 800, 600, 1]":
                if($prob_of_switching < 8.3) {
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[360, 800, 360, 800, 1]":
                if($prob_of_switching < 8.3) {
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[1920, 1200, 1920, 1200, 1]":
                if($prob_of_switching < 8.3) {
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[1024, 1366, 1024, 1366, 1]":
                if($prob_of_switching < 8.3) {
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[834, 1112, 834, 1112, 1]":
                if($prob_of_switching < 8.3) {
                    $switch_device_req_to_smartphone();
                }
                break;
            case "[2048, 1152, 2048, 1152, 1]":
                if($prob_of_switching < 8.3) {
                    $switch_device_req_to_smartphone();
                }
                break;

            default:
                $switch_device_req_to_smartphone();
        }
    }
    $query = "SELECT * FROM " . BOTS_DATABASE . "." . BOTS_TABLE . " WHERE $fi_table = \"$fi_value\" ORDER BY RAND() LIMIT 1";
    $pdo_sql = $pdo->prepare($query);
    if($pdo_sql->execute()) {
        $info = $pdo_sql->fetch(PDO::FETCH_ASSOC);
        if(is_array($info)) {
            $query = "UPDATE " . BOTS_DATABASE . "." . BOTS_TABLE . " SET HAS_VISITED_TODAY = HAS_VISITED_TODAY + 1 WHERE ID = ".$info["ID"]; 
            $pdo_sql = $pdo->prepare($query);
            $pdo_sql->execute();
            return $info;
        }
        else {
            fetch_identity($pdo, $fi_table, $fi_value);
        }
    }
    else {
        echo "void";
    }
}
$table = "SCREEN_RESOLUTION";
$table_value = [1920, 1080];
if (isset($_GET["method"]) && isset($_GET["value"])) {
    $method = $_GET["method"];
    $value = $_GET["value"];
    if ($method == "scr") {
        $table = "SCREEN_RESOLUTION";
        $table_value = json_decode($value);
        array_push($table_value, $table_value[0], $table_value[1], 1);
        $table_value = json_encode($table_value);
        $table_value = str_replace(",", ", ", $table_value);
    }
    else if ($method == "device_type") {
        $table = "DEVICE_TYPE";
        $table_value = $value;        
    }
    else if ($method == "id") {
        $table = "ID";
        $table_value = $value;
    }
    else if ($method == "proxy_geo") {
        $table = "PROXY_GEO";
        $table_value = $value;
    }
    else {
        echo "void";
    }
    $identity = fetch_identity($identity_pdo, $table, $table_value);
    unset($identity["FULL_TIMEZONE_INFO"]);
    $identity["PAGE_DEPTH"] = round(rand(14, 17) / 100, 2);
    
    $identity["IN_PAGE_AD_CLICK_PROBABILITY"] = 0;
    $identity["VIGNETTE_AD_CLICK_PROBABILITY"] = 0;

    $prob_of_ad_click = round(rand(32, 40) / 100, 2);
    // if($identity["DEVICE_TYPE"] == "is_smartphoner") {
    //     $identity["IN_PAGE_AD_CLICK_PROBABILITY"] = round(rand(40, 60) / 100, 2);
    // }
    // else if (substr($identity["PROXY_GEO"], 8, 2) == "GBSY") {
    //     $identity["IN_PAGE_AD_CLICK_PROBABILITY"] = round(rand(99, 100) / 100, 2);
    // }
    // else if ($identity["DEVICE_TYPE"] == "is_smartphone" and $identity["PLATFORM"] != 'iPhone' and substr($identity["PROXY_GEO"], 8, 2) != "US") {
    //     $identity["IN_PAGE_AD_CLICK_PROBABILITY"] = round(rand(16, 22) / 100, 2);
    // }
    if(rand(0, 100) <= 100) {
        $identity["VIGNETTE_AD_CLICK_PROBABILITY"] = $prob_of_ad_click;
    }
    else {
        $identity["IN_PAGE_AD_CLICK_PROBABILITY"] = $prob_of_ad_click;
    }
    $identity["AD_KEYWORDS"] = null;
    if($identity["DEVICE_TYPE"] == "is_smartphone") {
        $identity["AD_KEYWORDS"] = ["win", "gamble", "casino", "money", "bet", "$", "cash", "virus", "hack", "stock", "forex", "crypto"];
    }
    $identity["AD_KEYWORDS_CLICK_PROBABILITY"] = round(rand(74, 87) / 100, 2);

    // $prob_of_google_bing_traffic = rand(0, 100);
    // if ($prob_of_google_bing_traffic < 60) {
    //     $identity["REFERRALS"] = '[\'https://www.google.com/\']';
    // } else if ($prob_of_google_bing_traffic < 80) {
    //     $identity["REFERRALS"] = '[\'https://www.bing.com/\']';
    // }
    echo json_encode($identity);
    
}
else {
    echo "{}";
}


?>
