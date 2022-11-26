<?php
##CROPSTART##
$CROPSTART = "CROPSTART";
$CROPEND = "CROPEND";

$file_source = "modify-code-2.php";
$file_clear = "modify-code-2.php";
$str = file_get_contents($file_source);
//$str = preg_replace('/'.preg_quote('<!--START_REMOVE-->').'[\s\S]+?'.preg_quote('<!--END_REMOVE-->').'/', '', $str);
$str = preg_replace('/##'.$CROPSTART.'##[\s\S]+?##'.$CROPEND.'##/', '', $str);

file_put_contents($file_clear, $str);

?>

<?php
##CROPEND##
function checkURL($url, array $options = array()) {
if (empty($url)) {
throw new Exception('URL is empty');
}
// list of HTTP status codes
$httpStatusCodes = array(
        100 => 'Continue',
        101 => 'Switching Protocols',
        102 => 'Processing',
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        207 => 'Multi-Status',
        208 => 'Already Reported',
        226 => 'IM Used',
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        306 => 'Switch Proxy',
        307 => 'Temporary Redirect',
        308 => 'Permanent Redirect',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Payload Too Large',
        414 => 'Request-URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Requested Range Not Satisfiable',
        417 => 'Expectation Failed',
        418 => 'I\'m a teapot',
        422 => 'Unprocessable Entity',
        423 => 'Locked',
        424 => 'Failed Dependency',
        425 => 'Unordered Collection',
        426 => 'Upgrade Required',
        428 => 'Precondition Required',
        429 => 'Too Many Requests',
        431 => 'Request Header Fields Too Large',
        449 => 'Retry With',
        450 => 'Blocked by Windows Parental Controls',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
        506 => 'Variant Also Negotiates',
        507 => 'Insufficient Storage',
        508 => 'Loop Detected',
        509 => 'Bandwidth Limit Exceeded',
        510 => 'Not Extended',
        511 => 'Network Authentication Required',
        599 => 'Network Connect Timeout Error'
);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_NOBODY, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

if (isset($options['timeout'])) {
$timeout = (int) $options['timeout'];
curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
}

curl_exec($ch);
$returnedStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);


if (array_key_exists($returnedStatusCode, $httpStatusCodes)) {
//return "URL: '{$url}' - Error code: {$returnedStatusCode} - Definition: {$httpStatusCodes[$returnedStatusCode]}";
$status_code = $returnedStatusCode;
$status_code_message = $httpStatusCodes[$returnedStatusCode];
echo '<br>'.$status_code_message;    
} else {
//return "'{$url}' does not exist";
$status_code = "pas de reponse"; 
$status_code_message = "pas de message"; 
 echo '<br>'.$status_code_message;   
}
}
//echo $status_code;
echo checkURL("https://eurowebpage.com/");
?>
