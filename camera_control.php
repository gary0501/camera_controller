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
<script>
	var cam1_angle_ab = 0;
</script>
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
	 		width="165px"  height="165px" id="vlc" loop="yes" autoplay="yes" 
	 		target="rtsp://140.113.208.143:554/medias1">
	 		</embed>
</td>
<td style="vertical-align: top;"><br>
	<center> Camera 2 </center>
			<embed type="application/x-vlc-plugin" pluginspage="http://www.videolan.org" version="VideoLAN.VLCPlugin.2" 
	 		width="165px"  height="165px" id="vlc" loop="yes" autoplay="yes" 
	 		target="rtsp://140.113.121.88:554/medias1">
</td>
</tr>
<tr>
<td style="vertical-align: top;"><br>
	<center> Camera 3 </center>
			<embed type="application/x-vlc-plugin" pluginspage="http://www.videolan.org" version="VideoLAN.VLCPlugin.2" 
	 		width="165px"  height="165px" id="vlc" loop="yes" autoplay="yes" 
	 		target="rtsp://140.113.121.88:554/medias1">
	 		</embed>
</td>
<td style="vertical-align: top;"><br>
	<center> Camera 4 </center>
			<embed type="application/x-vlc-plugin" pluginspage="http://www.videolan.org" version="VideoLAN.VLCPlugin.2" 
	 		width="165px"  height="165px" id="vlc" loop="yes" autoplay="yes" 
	 		target="rtsp://140.113.121.88:554/medias1">
	 		</embed>
</td>
</tr>
<tr>
<td style="vertical-align: top;"><br>
	<center> Camera 5 </center>
			<embed type="application/x-vlc-plugin" pluginspage="http://www.videolan.org" version="VideoLAN.VLCPlugin.2" 
	 		width="165px"  height="165px" id="vlc" loop="yes" autoplay="yes" 
	 		target="rtsp://140.113.121.88:554/medias1">
	 		</embed>
</td>
<td style="vertical-align: top;"><br>
	<center> Camera 6 </center>
			<embed type="application/x-vlc-plugin" pluginspage="http://www.videolan.org" version="VideoLAN.VLCPlugin.2" 
	 		width="165px"  height="165px" id="vlc" loop="yes" autoplay="yes" 
	 		target="rtsp://140.113.121.88:554/medias1">
	 		</embed>
</td>
</tr>
</tbody>
</table>
<br>

<!-- map -->
<img src="ec610.png" 
style=" position:absolute; left:400px; top:50px; transform:rotate( deg);"
width="600px">

<img id="camera" src="camera.png"
style="position:absolute; left:760px; top:180px;"
width="40px"
>



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
<script>
	
	$("button").click(function(){
		$("#camera").css("transform", "rotate("+cam1_angle_ab+"deg)");
	});
</script>

<script>
	function leftup(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?move=leftup',
		dataType: 'jsonp'
		});
	}
	function up(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?move=up',
		dataType: 'jsonp'
		});
	}
	function rightup(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?move=rightup',
		dataType: 'jsonp'
		});
	}
	function left(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?move=left',
		dataType: 'jsonp'
		});
	}
	function home(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?move=home',
		dataType: 'jsonp'
		});
		cam1_angle_ab = 0;
	}
	function right(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?move=right',
		dataType: 'jsonp'
		});
	}function leftdown(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?move=leftdown',
		dataType: 'jsonp'
		});
	}function down(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?move=down',
		dataType: 'jsonp'
		});
	}function rightdown(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?move=rightdown',
		dataType: 'jsonp'
		});
	}

	function pan170(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?aPan=170',
		dataType: 'jsonp'
		});
		cam1_angle_ab = 170;
	}
	function panm170(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?aPan=-170',
		dataType: 'jsonp'
		});
		cam1_angle_ab = -170;
	}
	function panp20(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?rPan=20',
		dataType: 'jsonp'
		});
		cam1_angle_ab = cam1_angle_ab + 20;
	}
	function panpm20(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?rPan=-20',
		dataType: 'jsonp'
		});
		cam1_angle_ab = cam1_angle_ab - 20;
	}
	function tilt60(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?aTilt=60',
		dataType: 'jsonp'
		});
	}
	function tiltm10(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?aTilt=-10',
		dataType: 'jsonp'
		});
	}
	function tiltp20(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?rTilt=20',
		dataType: 'jsonp'
		});
	}
	function tiltpm20(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?rTilt=-20',
		dataType: 'jsonp'
		});
	}

	function zoomin(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?move=rZoomIn',
		dataType: 'jsonp'
		});
	}
	function zoomout(){
		$.ajax({
		url: 'http://140.113.208.143/cgi-bin/view/cammove.cgi?move=rZoomOut',
		dataType: 'jsonp'
		});
	}
	function set_angle (angle_rotate){
		cam1_angle_ab = angle_rotate;
	}
	function add_angle (angle_rotate){
		cam1_angle_ab = cam1_angle_ab + angle_rotate;
	}
	function sub_angle (angle_rotate){
		cam1_angle_ab = cam1_angle_ab - angle_rotate;
	}
</script>


</body>
</html>


