<?php

if(isset($_GET['msg']) && $_GET['msg'] != '') {
	$propaganda = htmlentities(stripslashes($_GET['msg']), ENT_QUOTES);
	//$propaganda = htmlentities(str_replace('\\', '', $propaganda), ENT_QUOTES);
} else {
	$propaganda = 'We can do it!';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta name="title" content="" />
	<meta name="author" content="" />
	<meta name="created" content="" />
	<meta name="edited" content="" />
	<meta name="keywords" content="" />
	
	<title>Propaganda: <? echo $propaganda; ?></title>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
	
	
	<style type="text/css">
*, body {
	border:0;
	padding:0;
	margin:0 auto;
	font-family:sans-serif;
}	

body {
	text-align:center;
	background:#fbf00a url('bg.png') repeat-x;
	margin-top:15px;
}

div#quotebox {
	background:#011E52;
	color:#fff;
	font-size:5em;
	font-weight:bold;
	padding:10px;
	min-width:500px;
	max-width:80%;
}

div#footer {
	background:#011E52;
	color:#fff;
	border-top:solid 5px #fff;
	border-bottom:solid 5px #fff;
	padding:6px;
}

img { margin-bottom:-5px; }

input[type="text"], input[type="submit"] {
	padding:2px 5px;
	margin:2px 5px;
	border:solid 3px #000;
	font-size:1.2em;
}

input[type="text"] { 
	width:300px;
	border-bottom-color:#eee;
	border-right-color:#eee;
}

input[type="submit"] {
	font-weight:bold;
	background:#00318A;
	color:#fff;
	border-top-color:#fff;
	border-left-color:#fff;
}
input[type="submit"]:active {
	border-bottom-color:#fff;
	border-right-color:#fff;
	border-top-color:#000;
	border-left-color:#000;
}

/* --- Karate Corners --- */
div {
	position:relative; /* required for corners to "stick" inside div */
}
.corner {
	position: absolute;
	width: 10px;
	height: 10px;
	background: url('corner.png') no-repeat;
}

.TL {
	top: 0;
	left: 0;
	background-position: 0 0;
}
.TR {
	top: 0;
	right: 0;
	background-position: 100% 0;
}
.BL {
	bottom: 0;
	left: 0;
	background-position: 0 100%;
}
.BR {
	bottom: 0;
	right: 0;
	background-position: 100% 100%;
}


	</style>

</head>
<body>

<div id="quotebox">
<div class="corner TL"></div>
<div class="corner TR"></div>
<div class="corner BL"></div>
<div class="corner BR"></div>
"<? echo $propaganda; ?>"

</div>

<img src="propaganda.png" />

<div id="footer">
<form id="propaganda" name="propaganda" method="GET" action="index.php">
<input id="msg" name="msg" type="text" /><input type="submit" value="Victory!" />
</form>
</div>

</body>
</html>