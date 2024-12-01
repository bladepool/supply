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
$ur1 = http_request("https://api.bscscan.com/api?module=stats&action=tokensupply&contractaddress=0x97B846DB4E521A07185d3da4408a12897316b618&apikey=5KIQ6RPWCPJRMMSGFNPMU5PFIYBRCR5PTJ");
$j1 = json_decode($ur1, true);

$re1 = $j1["result"];
$s1 = $re1 / 1e9;

print number_format($s1, 9, '.', '');
//print $s1;
?>