<?php

$url = "https://sookantv.com/playready/AstroRia";

$cookies = [
    'customer' => '13679',
    'hash' => '05acfdc969',
];

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIE, http_build_query($cookies, '', '; '));

$response = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

if ($status_code == 200) {
    echo "Request successful\n";
    // You can access the content of the page using $response
    echo $response;
} else {
    echo "Request failed with status code: $status_code\n";
}
?>
