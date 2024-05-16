<?php
$server_name = "localhost";
$server_username = "bots_handler";
$server_password = "39DyjMGW9Cm@@.a4";

$identity_id = 1;

$identity_pdo = new PDO("mysql:host=$server_name", $server_username, $server_password);
$identity_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$timezone_fulls = [
    "ACDT" => "Australian Central Daylight Saving Time",
"ACST" => "Australian Central Standard Time",
"ACT" => "Acre Time",
"ACT" => "ASEAN Common Time",
"ACWST" => "Australian Central Western Standard Time",
"ADT" => "Atlantic Daylight Time",
"AEDT" => "Australian Eastern Daylight Saving Time",
"AEST" => "Australian Eastern Standard Time",
"AET" => "Australian Eastern Time",
"AFT" => "Afghanistan Time",
"AKDT" => "Alaska Daylight Time",
"AKST" => "Alaska Standard Time",
"ALMT" => "Alma-Ata Time",
"AMST" => "Amazon Summer Time",
"AMT" => "Amazon Time",
"AMT" => "Armenia Time",
"ANAT" => "Anadyr Time",
"AQTT" => "Aqtobe Time",
"ART" => "Argentina Time",
"AST" => "Arabia Standard Time",
"AST" => "Atlantic Standard Time",
"AWST" => "Australian Western Standard Time",
"AZOST" => "Azores Summer Time",
"AZOT" => "Azores Standard Time",
"AZT" => "Azerbaijan Time",
"BNT" => "Brunei Time",
"BIOT" => "British Indian Ocean Time",
"BIT" => "Baker Island Time",
"BOT" => "Bolivia Time",
"BRST" => "Brasília Summer Time",
"BRT" => "Brasília Time",
"BST" => "Bangladesh Standard Time",
"BST" => "Bougainville Standard Time",
"BST" => "British Summer Time ",
"BTT" => "Bhutan Time",
"CAT" => "Central Africa Time",
"CCT" => "Cocos Islands Time",
"CDT" => "Central Daylight Time ",
"CBDT" => "Cuba Daylight Time",
"CEST" => "Central European Summer Time",
"CET" => "Central European Time",
"CHADT" => "Chatham Daylight Time",
"CHAST" => "Chatham Standard Time",
"CHOT" => "Choibalsan Standard Time",
"CHOST" => "Choibalsan Summer Time",
"CHST" => "Chamorro Standard Time",
"CHUT" => "Chuuk Time",
"CIST" => "Clipperton Island Standard Time",
"CKT" => "Cook Island Time",
"CLST" => "Chile Summer Time",
"CLT" => "Chile Standard Time",
"COST" => "Colombia Summer Time",
"COT" => "Colombia Time",
"CST" => "Central Standard Time ",
"CST" => "China Standard Time",
"CST" => "Cuba Standard Time",
"CT" => "Central Time",
"CVT" => "Cape Verde Time",
"CWST" => "Central Western Standard Time",
"CXT" => "Christmas Island Time",
"DAVT" => "Davis Time",
"DDUT" => "Dumont d'Urville Time",
"DFT" => "AIX-specific equivalent of Central European Time",
"EASST" => "Easter Island Summer Time",
"EAST" => "Easter Island Standard Time",
"EAT" => "East Africa Time",
"ECT" => "Eastern Caribbean Time",
"ECT" => "Ecuador Time",
"EDT" => "Eastern Daylight Time",
"EEST" => "Eastern European Summer Time",
"EET" => "Eastern European Time",
"EGST" => "Eastern Greenland Summer Time",
"EGT" => "Eastern Greenland Time",
"EST" => "Eastern Standard Time",
"ET" => "Eastern Time",
"FET" => "Further-eastern European Time",
"FJT" => "Fiji Time",
"FKST" => "Falkland Islands Summer Time",
"FKT" => "Falkland Islands Time",
"FNT" => "Fernando de Noronha Time",
"GALT" => "Galápagos Time",
"GAMT" => "Gambier Islands Time",
"GET" => "Georgia Standard Time",
"GFT" => "French Guiana Time",
"GILT" => "Gilbert Island Time",
"GIT" => "Gambier Island Time",
"GMT" => "Greenwich Mean Time",
"GST" => "South Georgia and the South Sandwich Islands Time",
"GST" => "Gulf Standard Time",
"GYT" => "Guyana Time",
"HDT" => "Hawaii–Aleutian Daylight Time",
"HAEC" => "Heure Avancée d'Europe Centrale French-language name for CEST",
"HST" => "Hawaii–Aleutian Standard Time",
"HKT" => "Hong Kong Time",
"HMT" => "Heard and McDonald Islands Time",
"HOVST" => "Hovd Summer Time ",
"HOVT" => "Hovd Time",
"ICT" => "Indochina Time",
"IDLW" => "International Day Line West time zone",
"IDT" => "Israel Daylight Time",
"IOT" => "Indian Ocean Time",
"IRDT" => "Iran Daylight Time",
"IRKT" => "Irkutsk Time",
"IRST" => "Iran Standard Time",
"IST" => "Indian Standard Time",
"IST" => "Irish Standard Time",
"IST" => "Israel Standard Time",
"JST" => "Japan Standard Time",
"KALT" => "Kaliningrad Time",
"KGT" => "Kyrgyzstan Time",
"KOST" => "Kosrae Time",
"KRAT" => "Krasnoyarsk Time",
"KST" => "Korea Standard Time",
"LHST" => "Lord Howe Standard Time",
"LHST" => "Lord Howe Summer Time",
"LINT" => "Line Islands Time",
"MAGT" => "Magadan Time",
"MART" => "Marquesas Islands Time",
"MAWT" => "Mawson Station Time",
"MDT" => "Mountain Daylight Time ",
"MET" => "Middle European Time ",
"MEST" => "Middle European Summer Time ",
"MHT" => "Marshall Islands Time",
"MIST" => "Macquarie Island Station Time",
"MIT" => "Marquesas Islands Time",
"MMT" => "Myanmar Standard Time",
"MSK" => "Moscow Time",
"MST" => "Malaysia Standard Time",
"MST" => "Mountain Standard Time",
"MUT" => "Mauritius Time",
"MVT" => "Maldives Time",
"MYT" => "Malaysia Time",
"NCT" => "New Caledonia Time",
"NDT" => "Newfoundland Daylight Time",
"NFT" => "Norfolk Island Time",
"NOVT" => "Novosibirsk Time",
"NPT" => "Nepal Time",
"NST" => "Newfoundland Standard Time",
"NT" => "Newfoundland Time",
"NUT" => "Niue Time",
"NZDT" => "New Zealand Daylight Time",
"NZST" => "New Zealand Standard Time",
"OMST" => "Omsk Time",
"ORAT" => "Oral Time",
"PDT" => "Pacific Daylight Time ",
"PET" => "Peru Time",
"PETT" => "Kamchatka Time",
"PGT" => "Papua New Guinea Time",
"PHOT" => "Phoenix Island Time",
"PHT" => "Philippine Time",
"PHST" => "Philippine Standard Time",
"PKT" => "Pakistan Standard Time",
"PMDT" => "Saint Pierre and Miquelon Daylight Time",
"PMST" => "Saint Pierre and Miquelon Standard Time",
"PONT" => "Pohnpei Standard Time",
"PST" => "Pacific Standard Time ",
"PWT" => "Palau Time",
"PYST" => "Paraguay Summer Time",
"PYT" => "Paraguay Time",
"RET" => "Réunion Time",
"ROTT" => "Rothera Research Station Time",
"SAKT" => "Sakhalin Island Time",
"SAMT" => "Samara Time",
"SAST" => "South African Standard Time",
"SBT" => "Solomon Islands Time",
"SCT" => "Seychelles Time",
"SDT" => "Samoa Daylight Time",
"SGT" => "Singapore Time",
"SLST" => "Sri Lanka Standard Time",
"SRET" => "Srednekolymsk Time",
"SRT" => "Suriname Time",
"SST" => "Samoa Standard Time",
"SST" => "Singapore Standard Time",
"SYOT" => "Showa Station Time",
"TAHT" => "Tahiti Time",
"THA" => "Thailand Standard Time",
"TFT" => "French Southern and Antarctic Time",
"TJT" => "Tajikistan Time",
"TKT" => "Tokelau Time",
"TLT" => "Timor Leste Time",
"TMT" => "Turkmenistan Time",
"TRT" => "Turkey Time",
"TOT" => "Tonga Time",
"TVT" => "Tuvalu Time",
"ULAST" => "Ulaanbaatar Summer Time",
"ULAT" => "Ulaanbaatar Standard Time",
"UYST" => "Uruguay Summer Time",
"UYT" => "Uruguay Standard Time",
"UZT" => "Uzbekistan Time",
"UTC" => "Coordinated Universal Time",
"VET" => "Venezuelan Standard Time",
"VLAT" => "Vladivostok Time",
"VOLT" => "Volgograd Time",
"VOST" => "Vostok Station Time",
"VUT" => "Vanuatu Time",
"WAKT" => "Wake Island Time",
"WAST" => "West Africa Summer Time",
"WAT" => "West Africa Time",
"WEST" => "Western European Summer Time",
"WET" => "Western European Time",
"WIB" => "Western Indonesian Time",
"WIT" => "Eastern Indonesian Time",
"WITA" => "Central Indonesia Time",
"WGST" => "West Greenland Summer Time",
"WGT" => "West Greenland Time",
"WST" => "Western Standard Time",
"YAKT" => "Yakutsk Time",
"YEKT" => "Yekaterinburg Time"
];
require('./globals.php');
$url = "http://ip-api.com/json/".$_SERVER["REMOTE_ADDR"]."?fields=53137215";
function timezone_ip_timezone_api_url_resolver($timezone_id) {
    $url = "http://worldtimeapi.org/api/timezone/$timezone_id";
    return $url;
}
function update_timezone($identity_id, $timezone) {
    global $identity_pdo;
    $timezone_id = $timezone["timezone"];
    $timezone_full_name = $timezone["timezone_full_name"];
    $timezone_offset = $timezone["offset"] / 60;

    $query = "UPDATE " . BOTS_DATABASE . "." . BOTS_TABLE . " SET TIMEZONE_ID = :timezone_id, TIMEZONE_FULL_NAME = :timezone_full_name, TIMEZONE_OFFSET = :timezone_offset, FULL_TIMEZONE_INFO = :timezone_full_info WHERE ID='$identity_id'";

    $pdo_sql = $identity_pdo->prepare($query);
    
    $pdo_sql->bindParam(':timezone_id', $timezone_id, PDO::PARAM_STR);
    $pdo_sql->bindParam(':timezone_full_name', $timezone_full_name, PDO::PARAM_STR);
    $pdo_sql->bindParam(':timezone_offset', $timezone_offset, PDO::PARAM_STR);
    $pdo_sql->bindValue(':timezone_full_info', json_encode($timezone), PDO::PARAM_STR);

    $pdo_sql->execute();

}
$fetched_timezone = array("TIMEZONE_ID" => null, "TIMEZONE_FULL_NAME" => null, "TIMEZONE_OFFSET" => null);
$curl_timezone = curl_init($url);
curl_setopt($curl_timezone, CURLOPT_RETURNTRANSFER, true);
$api_response = curl_exec($curl_timezone);
$api_response = json_decode($api_response, true);
curl_close($curl_timezone);
$curl_timezone = curl_init(timezone_ip_timezone_api_url_resolver($api_response["timezone"]));
curl_setopt($curl_timezone, CURLOPT_RETURNTRANSFER, true);
$api_response_2 = curl_exec($curl_timezone);
$api_response_2 = json_decode($api_response_2, true);
curl_close($curl_timezone);
$api_response["timezone_abbr"] = $api_response_2["abbreviation"];
$api_response["timezone_full_name"] = $timezone_fulls[$api_response["timezone_abbr"]];
$api_response["dst"] = $api_response_2["dst"];
$api_response["utc_offset"] = $api_response_2["utc_offset"];
$fetched_timezone["TIMEZONE_ID"] = $api_response["timezone"];
$fetched_timezone["TIMEZONE_FULL_NAME"] = $api_response["timezone_full_name"];
$fetched_timezone["TIMEZONE_OFFSET"] = $api_response["offset"] / 60;
if(isset($_GET["id"])) {
    update_timezone($_GET["id"], $api_response);
}
echo json_encode($fetched_timezone);