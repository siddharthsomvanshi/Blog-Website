<?php
if(isset($_GET['offset']) && isset($_GET['limit'])){
  $limit = $_GET['limit'];
  $offset = $_GET['offset'];
  require'connect.php';
  $query = mysql_query("SELECT * FROM post ORDER BY postID DESC LIMIT {$limit} OFFSET {$offset}");
  $count = mysql_num_rows($query);
  if($count>0){
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
	}
}
?>
