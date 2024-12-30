<?php
$requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'N/A';
$serverProtocol = $_SERVER['SERVER_PROTOCOL'] ?? 'N/A';
$serverName = $_SERVER['SERVER_NAME'] ?? 'N/A';
$serverPort = $_SERVER['SERVER_PORT'] ?? 'N/A';
$requestUri = $_SERVER['REQUEST_URI'] ?? 'N/A';
$serverSoftware = $_SERVER['SERVER_SOFTWARE'] ?? 'N/A';
$serverAdmin = $_SERVER['SERVER_ADMIN'] ?? 'N/A';
$documentRoot = $_SERVER['DOCUMENT_ROOT'] ?? 'N/A';
$scriptFilename = $_SERVER['SCRIPT_FILENAME'] ?? 'N/A';
$scriptName = $_SERVER['SCRIPT_NAME'] ?? 'N/A';
$phpSelf = $_SERVER['PHP_SELF'] ?? 'N/A';
$protocol = $_SERVER['REQUEST_SCHEME'] ?? 'N/A';
$remoteAddr = $_SERVER['REMOTE_ADDR'] ?? 'N/A';
$remotePort = $_SERVER['REMOTE_PORT'] ?? 'N/A';
$httpAccept = $_SERVER['HTTP_ACCEPT'] ?? 'N/A';
$connection = $_SERVER['HTTP_CONNECTION'] ?? 'N/A';
$host = $_SERVER['HTTP_HOST'] ?? 'N/A';
$httpReferer = $_SERVER['HTTP_REFERER'] ?? 'N/A';
$httpUserAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'N/A';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'N/A';
$queryString = $_SERVER['QUERY_STRING'] ?? 'N/A';
$requestUri = $_SERVER['REQUEST_URI'] ?? 'N/A';
$scriptDir = dirname($scriptName) ?? 'N/A';
$getEnv = $_ENV ?? 'N/A';
$getEnv2 = getenv() ?? 'N/A';
$getEnvHome = getenv('HOME') ?? 'N/A';
// $GLOBALS
// $GET
// $POST
// $ENV
// $REQUEST
// $COOKIE
// $SESSION
// $FILES
// $SERVER
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Super Globals</title>
</head>
<body>
  <p><?php echo "Request Method: $requestMethod"; ?></p>
  <p><?php echo "Server Protocol: $serverProtocol"; ?></p>
  <p><?php echo "Server Name: $serverName"; ?></p>
  <p><?php echo "Server Port: $serverPort"; ?></p>
  <p><?php echo "Request URI: $requestUri"; ?></p>
  <p><?php echo "Server Software: $serverSoftware"; ?></p>
  <p><?php echo "Server Admin: $serverAdmin"; ?></p>
  <p><?php echo "Document Root: $documentRoot"; ?></p>
  <p><?php echo "Script Filename: $scriptFilename"; ?></p>
  <p><?php echo "Script Name: $scriptName"; ?></p>
  <p><?php echo "Script Directory: $scriptDir"; ?></p>
  <p><?php echo "PHP Self: $phpSelf"; ?></p>
  <p><?php echo "Protocol: $protocol"; ?></p>
  <p><?php echo "Remote Address: $remoteAddr"; ?></p>
  <p><?php echo "Remote Port: $remotePort"; ?></p>
  <p><?php echo "HTTP Accept: $httpAccept"; ?></p>
  <p><?php echo "Connection: $connection"; ?></p>
  <p><?php echo "Host: $host"; ?></p>
  <p><?php echo "HTTP Referer: $httpReferer"; ?></p>
  <p><?php echo "HTTP User Agent: $httpUserAgent"; ?></p>
  <p><?php echo "User Agent: $userAgent"; ?></p>
  <p><?php echo "Query String: $queryString"; ?></p>
  <p><?php echo "Request URI: $requestUri"; ?></p>
  <p><?php echo "Get Environment: $getEnv"; ?></p>
  <p><?php echo var_dump($getEnv2); ?></p>
  <p><?php echo var_dump($getEnvHome); ?></p>
</body>
</html>