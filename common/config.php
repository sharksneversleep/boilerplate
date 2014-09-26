<?php session_start();

$host = $_SERVER['HTTP_HOST'];
$production_host = "boilerplate.co.uk";

if($host=='www.' .$production_host  || $host==$production_host){
    $site_mode = 'live';
}else{
    $site_mode = 'dev';
}

if($site_mode=='live'){
    $site_name = "Site Boilerplate";
    $site_version = "v1.0";
    $site_url = "";
    $admin_url = "";
    $blog_url = "blog";
    $site_admin_email = "contact@boilerplate.co.uk";
    $site_owner_email = "contact@boilerplate.co.uk";
    $site_holding = false;
}else{
    $site_name = "Site Boilerplate";
    $site_version = "v1.0";
    $site_url = "/boilerplate";
    $admin_url = "/boilerplate/admin";
    $blog_url = "blog";
    $site_admin_email = "contact@boilerplate.co.uk";
    $site_owner_email = "contact@boilerplate.co.uk";
    $site_holding = false;
}

if($site_holding){
	header("Location: " .$site_url ."/holding.htm");
}

//define absolute path and root
define('ABSPATH', str_replace('\\', '/', dirname(__FILE__)) . '/');

$tempPath1 = explode('/', str_replace('\\', '/', dirname($_SERVER['SCRIPT_FILENAME'])));
$tempPath2 = explode('/', substr(ABSPATH, 0, -1));
$tempPath3 = explode('/', str_replace('\\', '/', dirname($_SERVER['PHP_SELF'])));

for ($i = count($tempPath2); $i < count($tempPath1); $i++)
    array_pop ($tempPath3);

$urladdr = $_SERVER['HTTP_HOST'] . implode('/', $tempPath3);

if ($urladdr{strlen($urladdr) - 1}== '/')
    define('URLADDR', 'http://' . $urladdr);
else
    define('URLADDR', 'http://' . $urladdr . '/');

unset($tempPath1, $tempPath2, $tempPath3, $urladdr);

define('ROOT', str_replace("/common/","",ABSPATH) . "/");
//END define absolute path and root

// get url structure
require_once ROOT .'/common/getDirectoryFilename.php';
require_once ROOT .'/common/page_details.php';
?>