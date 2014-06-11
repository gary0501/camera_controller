<html>
<head>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<meta content="text/html; charset=UTF8" http-equiv="content-type">
	<title>Camera Controller</title>
	<style type = "text/css">
	body {
		color: blue;
		}
	button {
		background-color: #FFFFEB;

	}
	</style>

</head>
<body>

<!-- video -->

<table style="text-align: left; width: 350px; height: 499px;" border="1"
cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td style="vertical-align: top;"><br>
	<center> Camera 1 </center>
			
			<embed type="application/x-vlc-plugin" pluginspage="http://www.videolan.org" version="VideoLAN.VLCPlugin.2" 
	 		width="165px"  height="165px" id="vlc2" loop="yes" autoplay="yes" 
	 		target="rtsp://140.113.208.143:554/medias1"
	 		
	 		>
	 		</embed>
	
			<!-- target="http://140.113.208.143:80/mjpeg.cgi"  -->
</td>
<td style="vertical-align: top;"><br>
	<center> Camera 2 </center>
			<embed type="application/x-vlc-plugin" pluginspage="http://www.videolan.org" version="VideoLAN.VLCPlugin.2" 
	 		width="165px"  height="165px" id="vlc2" loop="yes" autoplay="yes" 
	 		target="rtsp://140.113.121.88:554/medias1">
</td>
</tr>
<tr>
<td style="vertical-align: top;"><br>
	<center> Camera 3 </center>
			<embed type="application/x-vlc-plugin" pluginspage="http://www.videolan.org" version="VideoLAN.VLCPlugin.2" 
	 		width="165px"  height="165px" id="vlc3" loop="yes" autoplay="yes" 
	 		target="rtsp://140.113.121.88:554/medias1">
	 		</embed>
</td>
<td style="vertical-align: top;"><br>
	<center> Camera 4 </center>
			<embed type="application/x-vlc-plugin" pluginspage="http://www.videolan.org" version="VideoLAN.VLCPlugin.2" 
	 		width="165px"  height="165px" id="vlc4" loop="yes" autoplay="yes" 
	 		target="rtsp://140.113.121.88:554/medias1">
	 		</embed>
</td>
</tr>
<tr>
<td style="vertical-align: top;"><br>
	<center> Camera 5 </center>
			<embed type="application/x-vlc-plugin" pluginspage="http://www.videolan.org" version="VideoLAN.VLCPlugin.2" 
	 		width="165px"  height="165px" id="vlc5" loop="yes" autoplay="yes" 
	 		target="rtsp://140.113.121.88:554/medias1">
	 		</embed>
</td>
<td style="vertical-align: top;"><br>
	<center> Camera 6 </center>
			<embed type="application/x-vlc-plugin" pluginspage="http://www.videolan.org" version="VideoLAN.VLCPlugin.2" 
	 		width="165px"  height="165px" id="vlc6" loop="yes" autoplay="yes" 
	 		target="rtsp://140.113.121.88:554/medias1">
	 		</embed>
</td>
</tr>
</tbody>
</table>
<br>

<!-- map -->
<img id="lab_map" src="ec610.png" 
style=" position:absolute; left:400px; top:50px; transform:rotate( deg);"
width="600px">

<img id="camera" src="camera.png"
style="position:absolute; left:760px; top:180px;"
width="40px"
>
<!-- camera center is at (779, 224)  -->


<!-- nine blocks -->

<table style="text-align: left; width: 256px; height: 154px; position:relative; left:650px; bottom:200px;" 
border="1" cellpadding="2" cellspacing="2"  >
<tbody>
<tr>
<td style="vertical-align: top;">
	<button type="button" onclick = "leftup()" 
		style ="width:80px; height:30px; ">
	leftup
</button>
</td>
<td style="vertical-align: top;">
	<button type="button" onclick = "up()" 
		style ="width:80px; height:30px;  ">
	up
</button>
</td>
<td style="vertical-align: top;">
	<button type="button" onclick = "rightup()" 
		style ="width:80px; height:30px;  ">
	rightup
</button>
</td>
</tr>
<tr>
<td style="vertical-align: top;">
	<button type="button" onclick = "left()" 
		style ="width:80px; height:30px; ">
	left
</button>
</td>
<td style="vertical-align: top;">
	<button type="button" onclick = "home()" 
		style ="width:80px; height:30px;  ">
	<b>home</b>
</button>
</td>
<td style="vertical-align: top;">
	<button type="button" onclick = "right()" 
		style ="width:80px; height:30px;  ">
	right
</button>
</td>
</tr>
<tr>
<td style="vertical-align: top;">
	<button type="button" onclick = "leftdown()" 
		style ="width:80px; height:30px; ">
	leftdown
</button>
</td>
<td style="vertical-align: top;">
	<button type="button" onclick = "down()" 
		style ="width:80px; height:30px;">
	down
</button>
</td>
<td style="vertical-align: top;">
	<button type="button" onclick = "rightdown()" 
		style ="width:80px; height:30px;">
	rightdown
</button>
</td>
</tr>
</tbody>
</table>

<!--pan abslolut & relative -->

<table style="text-align: left; width: 120px; height: 50px; position:relative; left:400px; bottom:375px;" 
border="1" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td style="vertical-align: top;">
	<button type="button" onclick = "pan170();" 
		style ="width:100px; height:40px;  ">
	<b>Pan to 170</b>
</td>
<td style="vertical-align: top;">
	<button type="button" onclick = "panm170();" 
		style ="width:100px; height:40px;  ">
	<b>Pan to -170</b>
</td>
</tr>
<tr>
<td style="vertical-align: top;">
	<button type="button" onclick = "panp20(); " 
		style ="width:100px; height:40px;  ">
	<b>Pan +20</b>
</td>
<td style="vertical-align: top;">
	<button type="button" onclick = "panpm20();" 
		style ="width:100px; height:40px;  ">
	<b>Pan -20</b>
</td>
</tr>
<tr>
<td style="vertical-align: top;">
	<button type="button" onclick = "tilt90()" 
		style ="width:100px; height:40px;  ">
	<b>Tilt to 90</b>
</td>
<td style="vertical-align: top;">
	<button type="button" onclick = "tiltm10()" 
		style ="width:100px; height:40px;  ">
	<b>Tilt to -10</b>
</td>
</tr>
<tr>
<td style="vertical-align: top;">
	<button type="button" onclick = "tiltp20()" 
		style ="width:100px; height:40px;  ">
	<b>Tilt +20</b>
</td>
<td style="vertical-align: top;">
	<button type="button" onclick = "tiltpm20()" 
		style ="width:100px; height:40px;  ">
	<b>Tilt -20</b>
</td>
</tr>
</tbody>
</table>


<!--zoom in & out -->
<table style="text-align: left; width: 80px; height: 50px; position:relative; left:930px; bottom:520px;" 
border="1" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td style="vertical-align: top;">
	<button type="button" onclick = "zoomin()" 
		style ="width:80px; height:40px;  ">
	<b>Zoom In</b>
</td>
</tr>
<tr>
<td style="vertical-align: top;">
	<button type="button" onclick = "zoomout()" 
		style ="width:80px; height:40px;  ">
	<b>Zoom out</b>
</td>
</tr>

</tbody>
</table>
<!--
<div style = "background-color:yellow; width:400px; height:200px; position:relative; left:450px; bottom:100px; ">


</div>
-->

<!--
	 show angle

<a id="show_angle" style="position:absolute; left:500px; bottom:400px;"> 
	aaaaa </a>
-->



</body>
<script src="rotate_button.js"></script>
</html>


