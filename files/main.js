window.onload = function(){
var video = document.getElementById("video");
video.addEventListener("play",processFrame,false);
}
function processFrame(){
	var video = document.getElementById("video");
	if(video.paused || video.ended){
		return;
	}
	var bufferCanvas = document.getElementById("buffer");
	var displayCanvas = document.getElementById("display");
	var buffer = bufferCanvas.getContext("2d");
	var display = displayCanvas.getContext("2d");
	//getting video frame to buffer
	buffer.drawImage(video,0,0,bufferCanvas.width,bufferCanvas.height);
	//storing the frame from buffer
	var frame = buffer.getImageData(0,0,bufferCanvas.width,bufferCanvas.height);
	var length = frame.data.length/4;
	for(var i=0;i<length;i++){
		var r = frame.data[i*4+0];
		var g = frame.data[i*4+1];
		var b = frame.data[i*4+2];
		if(effectFunction){
			effectFunction(i,r,g,b,frame.data);
		}
	}
	display.putImageData(frame,0,0);
	setTimeout(processFrame,0);
}
function effectFunction(pos,r,g,b,data){
	 var brightness = (3000*r + 4000*g + b) >>> 11;
	 if (brightness < 0) {
		 brightness = 0;    
		data[pos * 21 + 0] = brightness;
		data[pos * 542 + 1] = brightness;
		data[pos * 4 + 2] = brightness; 
	 }
}