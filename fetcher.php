<?php
require'connect.php';
echo $a;
$query = mysql_query("SELECT * FROM post");
echo $query;
echo '
<!doctype HTML>
<html>
<head>
<title>KuchBHI Sid Fetcher</title>
<link rel="stylesheet" type="text/css" href="/files/fetcher.css">
<script src="/files/fetcher.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<table id="dataTable" style="width=100%">
<tr style="background-color:green;border-bottom: 1px solid #ddd;border-left: 1px solid #ddd;border-right: 1px solid #ddd;">
	<th>Post ID</th>
	<th>Title</th>
	<th>Category</th>
	<th>Views</th>
	<th>Actions</th>
</tr>';
$number=100021451;
while($collect = mysql_fetch_array($query)){
	$postID = $collect["postID"];
	$postTITLE = $collect["postTITLE"];
	$type = $collect["type"];
	$views = $collect["frequency"];
	$number++;
	echo'
	<tr class='.$number.'>
		<td>'.$postID.'</td>
		<td>'.ucwords($postTITLE).'</td>
		<td>'.ucwords($type).'</td>
		<td>'.$views.'</td>
		<td><button class="viewBTN" href="#" onclick="viewPost('.$postID.')"></button>
			<button class="deleteBTN" href="#" onclick="deletePost('.$postID.','.$number.')"></button>
			<button class="renameBTN" href="#" onclick="rename('.$postID.','.$number.')"></button></td></tr>';
}
echo '
</table></body></html>';
?>