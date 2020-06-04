<?php
$page = null;
$home = null;
if(isset($_GET["page"]) && isset($_GET["home"])){
$page = $_GET["page"];
$home = $_GET["home"];
}
if($home=="" || $home=="true" || $page==""){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome To KuchBHI Sid</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/files/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type=text/javascript>
$(document).ready(function(){
   var flag = 0;
  $.ajax({
    type:"GET",
    url:"post_loader.php",
    data:{
      'offset':0,
      'limit':3
    },
    success:function(data){
      $('.row').append(data);
      flag+=3;
    }
  });
  $(window).scroll(function(){
    if($(window).scrollTop() >= $(document).height() - $(window).height()){
      $.ajax({
        type:"GET",
        url:"post_loader.php",
        data:{
          'offset':flag,
          'limit':3
        },
        success:function(data){
          $('.row').append(data);
          flag+=3;
        }
      });
    }
  });
});
</script>
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
 <br>
<div class="jumbotron text-center">
<h1 class="jumbtronTITLE">Hello Welcome To KuchBHI Sid</h1>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active" height="200">
        <img class="corImage" src="/graphics/slide1.png" alt="Intro">
        <div class="carousel-caption">
          <h3>Welcome</h3>
          <p>Come fall in love with learning from tech to travel guides</p>
        </div>
      </div>

      <div class="item">
        <img class="corImage" src="/graphics/slide2.png" alt="Chania">
        <div class="carousel-caption">
          <h3>Tech</h3>
          <p>Learn Something Techy Now</p>
        </div>
      </div>
    
      <div class="item">
        <img class="corImage"  src="/graphics/slide3.jpg" alt="Flower">
        <div class="carousel-caption">
          <h3>Auto</h3>
          <p>Learn Something Great About Your Wheels</p>
        </div>
      </div>

      <div class="item">
        <img class="corImage" src="/graphics/slide4.jpg" alt="Flower">
        <div class="carousel-caption">
          <h3>Glamour</h3>
          <p>Get recent updates from your fav celebrities Start reading now</p>
        </div>
      </div>
	  
	  <div class="item">
        <img class="corImage" src="/graphics/slide5.jpg" alt="Chania">
        <div class="carousel-caption">
          <h3>Travel</h3>
          <p>Learn Facts about your mother earth</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</div>

<div id="container">
  <div class="row">
    
		
  </div>
</div>
</body>
</html>
<?php
}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo 'KuchBHI Sid - '.ucfirst($page)?></title>
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
      <a class="navbar-brand" href="#"><img id="logo" src="/graphics/Logo-Transpaent-Normal-small.png" height="60" width="90"></a>
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
 <br>
<div class="jumbotron text-center">
<h2 class="jumbtronTITLE">
<?php
if($page=="technology"){echo 'Learn Something techy.Learn Something Joyful';}
elseif($page=="entertainment"){echo 'Read Direct From The Glamour World To Your Screen';}
elseif($page=="Social"){echo 'Read The Best Of Social World';}
elseif($page=="auto"){echo '<q>Your Wheels Knows Lot About You.What You Knows?</q>';}
elseif($page=="travel"){echo '<q>Travel doesnt become adventure until you leave yourself behind</q>';}
elseif($page=="others"){echo 'Rest Goes Here From Politics to Your Neighbours Gossips';}
?>
</h2>
</div>
<?php
require'connect.php';
$query = mysql_query("SELECT * FROM post WHERE type='$page'");
while($collect = mysql_fetch_array($query)){
$postID = $collect["postID"];
$postTITLE = $collect["postTITLE"];
$postCONTENT = $collect["postCONTENT"];
$type = $collect["type"];
$imageTYPE = $collect["postIMAGETYPE"];
$imageCODE = $collect["postIMAGE"];
$publishedON = $collect["postPD"];
echo '<div class="col-sm-4 col-md-4">
            <div class="post">
                <div class="post-img-content">
                    <img src="/postGRAPHICS/'.$imageCODE.".".$imageTYPE.'" class="img-responsive" />
                    <span class="post-title"><b>'.$postTITLE.'</b><br/></span>
                </div>
                <div class="content">
                    <div class="author">
                        By <b>Siddharth Somvanshi Under '.$type.'</b> |
                        <time>'.$publishedON.'</time>
                    </div>
                    <div>
                        <a href="/loader.php?title='.$postTITLE.'" class="btn btn-warning btn-sm">Read Now</a>
                    </div>
                </div>
            </div>
        </div>';
}
?>
<?Php
}
?>
