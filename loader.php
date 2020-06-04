<?php
//51346 -- when postID fetch failed.
//45642 -- when wrong post id provide.
if(!isset($_GET["title"])){
	echo 'ERROR 51346 : Request Failed';
}else{
	$postTITLE = $_GET["title"];
	require'connect.php';
	$query = mysql_query("SELECT * FROM post WHERE postTITLE='$postTITLE'");
	if($query==false){
		echo"ERROR 45612 : Invalid Post Request";
	}else{
		while($collect = mysql_fetch_array($query)){
			$postTITLE = $collect["postTITLE"];
			$postCONTENT = $collect["postCONTENT"];
			$imageTYPE = $collect["postIMAGETYPE"];
			$imageCODE = $collect["postIMAGE"];
			$postDATE = $collect["postPD"];
	}
	echo '<!DOCTYPE html>
<html lang="en">
<head>
  <title>'.ucwords($postTITLE).' - KuchBHI Sid</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/files/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img id="logo" src="/graphics/Logo-Transpaent-Normal-small.png" height="50" width="81"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/?page=home&home=true">Home</a></li>
        <li><a href="/?page=technology&home=false">Technology</a></li>
        <li><a href="/?page=entertainment&home=false">Entertainment</a></li>
		<li><a href="/?page=Social&home=false">Social</a></li>
		<li><a href="/?page=auto&home=false">Auto</a></li>
		<li><a href="/?page=travel&home=false">Travel</a></li>
		<li><a href="/?page=others&home=false">Others</a></li>
		<li><a href="/about.php">About</a></li>
		<li><a href="/contact.php">Contact Us</a></li>
		<li><a href="/privacy.php">Privacy Policy</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- ------------------------------------------------------------------->
 <br><br><br><div class="blog-header">
      <div class="container blogCont">
        <h1 class="blog-title">'.ucwords($postTITLE).'</h1>
		<img src="/postGRAPHICS/'.$imageCODE.".".$imageTYPE.'" class="img-responsive" height="400px" width="700px" /><br><BR>
      </div>
    </div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 blog-main">
          <div class="blog-post">
            <p class="blog-post-meta">'.$postDATE.'<a href="/about.php?user=auth"> Siddharth Somvanshi</a></p>
      <p>'.chop(substr($postCONTENT,58),"</body></html>").'</p>
          </div>';
	}
}
?>