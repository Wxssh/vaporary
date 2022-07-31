
<HTML>
<HEAD>
<title>Error</title>
</HEAD>
<BODY>
<span style=" 
    font-family: monospace;">
<?php
$requri = getenv ("REQUEST_URI");
$combine = " Cannot GET ". $requri ;
$message = "$today \n
<br>
$combine <br> \n
<br> $httpref ";
$message2 = "$today \n
$combine \n
User Agent = $httpagent \n
$note \n
$httpref ";
echo $message;
?></span>
</BODY></HTML>