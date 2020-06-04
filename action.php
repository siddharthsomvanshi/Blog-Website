<?php
/*
1200 for view
1300 for delete
1400 for rename
ERROR Code: 5ADE54R (not suitable variable value);
*/
$operation = $_GET["operation"];
$postID = $_GET["id"];
if(!isset($operation)){
	echo'ERROR Code: 5ADE54R';
}elseif(!isset($postID)){
	echo'ERROR Code: 5ADE54R';
}else{
	require'connect.php';
	if($operation==1200){
		echo'view';
	}elseif($operation==1300){
		$query = "DELETE FROM post WHERE postID='$postID'";
		$hasHappen = mysql_query($query);
		if($hasHappen==true){
			echo'Deleted';
		}else{
			return 'Deletion Failed';
		}
		
	}elseif($operation==1400){
		echo'rename';
	}else{
		echo'ERROR Code: 5ADE54R';
	}
}
?>
