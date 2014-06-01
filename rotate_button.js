
	$("button").click(function(){
		$("#camera").css("transform", "rotate("+cam1_angle_ab+"deg)");
	});

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
