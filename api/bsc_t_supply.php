<?php
header('Content-Type: application/json');
function http_request($url){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch); 
    curl_close($ch);      
    return $output;
}  
$ur1 = http_request("https://api.bscscan.com/api?module=stats&action=tokensupply&contractaddress=0x66bc84b4270cA0F056E27e5cD77B2401522191c6&apikey=5KIQ6RPWCPJRMMSGFNPMU5PFIYBRCR5PTJ");
$j1 = json_decode($ur1, true);

$re1 = $j1["result"];
$s1 = $re1 / 1e9;

print number_format($s1, 9, '.', '');
//print $s1;
?>