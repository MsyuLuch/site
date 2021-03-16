<?php /* error_reporting(E_ALL); ini_set('display_errors',1);*/ $path = "/var/www/site.ru/git/www/"; $result = ""; $output = array(); $response = [ "error" => "no auth data",
    "success" => 0
];
$token = "87E73AEDFHKHGG12KJKLKLBBCFAE";
$headers = apache_request_headers();
if (!empty($headers) && isset($headers['X-Gitlab-Token']) && $headers['X-Gitlab-Token'] == $token) {
    $response = [
        "error" => "",
        "success" => 1
    ];
}