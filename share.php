<?php

$shaderData = $_POST["parameters"];

$data = json_decode($shaderData, true);

$new = intval(file_get_contents("./data/last"));

// error handling
if ((json_last_error() == JSON_ERROR_NONE)) {
	$id = $new + 1;
	file_put_contents("./data/last",$id);
	file_put_contents("./data/$id",$shaderData);
	$url = $_SERVER['HTTP_HOST'] . "/id/?$id";
} else {
	Header("Location: /index.php?error");
}
?>
<html>
<head>
<style>

body,select { font-size: 20px; font-family: monospace; color: #FFF; }
input     { font-size: 20px; }
a         { color:#5AF; }
a:visited { color:#A5A; }
canvas    { background-color: #FFF; }
div.satellite
{
    display:none;
    z-index:100;
    position:relative;
    -webkit-text-fill-color: white; 
    -webkit-text-stroke-width: 1px; 
    -webkit-text-stroke-color: black; 
}
button, #button_share    
{ 
    margin: 10px; 
    font-size: 30px; 
    vertical-align: middle; 
    text-align: center; 
    border-radius: 10px;
    background-color: #EEE; 
    height:45px;
}
button.satellite
{
    background-color: #FFF; 
    -webkit-text-fill-color: black; 
    -webkit-text-stroke-width: 1px; 
    color: #000;
    font-size: 30px;
    margin-top: 0px;
    margin-right: 0px;
    margin-left: 0px;
    padding: 2px;
    width:45px;
    height:45px;
    border-radius: 10px;
}
</style>
<title>ZzArt - Abstract Art Evolution</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png"/>
<meta charset="utf-8">
</head>
<body bgcolor="#222">
<center>
<div><font size=10><b>𝓩𝔃𝓐𝓻𝓽</b> - your link is <a href="//<?php echo $url;?>"><?php echo $url;?></a></font><br></div>
</center>
</body>
</html>
