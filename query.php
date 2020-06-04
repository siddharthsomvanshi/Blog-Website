<?php
$data = $_GET["query"];
require'connectlocal.php';
$query = mysql_query($data);
if($query==true){
echo 'good';
}else{
echo'bad';
}
?>