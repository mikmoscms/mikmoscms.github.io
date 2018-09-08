<?php
  $url = $_SERVER['REQUEST_URI'];
  $pname = explode('/', $url); 
  $tpname= $pname[sizeof($pname)-3];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FILES</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="pragma" content="no-cache" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
		<style>
html{
	font-family: 'Helvetica', arial, sans-serif;
  background-color: #fff;
  color: #FFFFFF;
  font-size: 14px;
  background: url("mikmos/assets/img/logo-dark.png")no-repeat bottom left;
}body{
	font-family: 'Helvetica', arial, sans-serif;
  background-color: #fff;
  color: #FFFFFF;
  font-size: 14px;
}
.btnsubmitb {
  background-color: #F3F3F3;
  color: #000;
  border: none;
  padding: 5px 5px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  cursor: pointer;
  margin: 2px 2px;
}
.btnsubmitb:hover {
  background-color: #008CCA;
  color: #FFFFFF;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
h3 {
  text-shadow: 2px 2px 6px #424242;
}
		</style>
	</head>
	<body>
	<center>
	  <div>
	  <?php
	  $dir_open = opendir('.'); 
	  while(false !== ($filename = readdir($dir_open))){ 
	    if($filename != "." && $filename != ".."){
	      if(substr($url, -1) == "/"){
	        $urlp = substr($url, 0,-1);
	      }else{
	        $urlp = $url;
	      }
	        $linkname = $filename;
	        $link = "<a class='btnsubmitb' title='".strtoupper($filename)."' href='$urlp/$filename'>".strtoupper($linkname)." </a><br />";

	      if($filename == "error" ||
	      substr($filename, -5) == ".html" ||
	      substr($filename, -4) == ".php"
	      ){}else{
	            echo "$link";
	          }
	      }
	   }
	   closedir($dir_open);
	   ?>
	   </div>
	   </center>
	</body>
</html>
	 
