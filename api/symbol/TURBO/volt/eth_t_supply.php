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
$ur1 = http_request("https://api.etherscan.io/api?module=stats&action=tokensupply&contractaddress=0x66b5228CfD34d9f4d9f03188d67816286C7c0b74&apikey=8YMZYZ2QH2EKU3S9NV1XAF9P3URTXBXFVN");
$j1 = json_decode($ur1, true);

$re1 = $j1["result"];
$s1 = $re1 / 1e18;

print number_format($s1, 18, '.', '');
//print $s1;
?>