function responser(u,ID){
	var url = u;
	var rowID = ID;
	var request = new XMLHttpRequest();
	request.open("GET",url);
	request.onload = function(){
		if(request.status==200 & request.readyState==4){
		}
	}
	request.send(null);
	$("." + rowID).hide();
}
function viewPost(postID,classID){
	var pID = postID;
	var url = 'http://localhost/action.php?id='+pID+'&operation='+1200;
	responser(url);
}
function deletePost(postID,rowID){
	var pID = postID;
	var rID = rowID;
	var url = 'http://localhost/action.php?id='+pID+'&operation='+1300;
	var div = document.createElement("div");
	document.body.appendChild(div);
	var okBTN = document.createElement("button");
	var closeBTN = document.createElement("button");
	var get = confirm("Are You Sure To Delete This Post");
	if(get==true){
	responser(url,rID);
	}else{
		alert("Post Deletion Cancelled");
	}
}
function rename(postID){
	var pID = postID;
	var url = 'http://localhost/action.php?id='+pID+'&operation='+1400;
	responser(url,);
}
	