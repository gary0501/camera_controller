	
	var cam1_angle_ab = 0;
	var click_x = 0;
	var click_y = 0;
	var v_x = 0;
	var v_y = 10;
	var click_angle = 0;

	$("button").click(function(){
		$("#camera").css("transform", "rotate("+cam1_angle_ab+"deg)");
	});

	$("#lab_map").click(function(event){
		click_x = event.pageX;
		click_y = event.pageY;
		cam1_angle_ab = cal_rotate(click_x,click_y);
		$("#camera").css("transform", "rotate("+cam1_angle_ab+"deg)");
		pan_to_angle(cam1_angle_ab);
	});

	function cal_rotate(x_pos,y_pos){
		var diff_x = x_pos - 779;
		var diff_y = 224 - y_pos ;
		var cos_upper = ((v_x*diff_x)+(v_y*diff_y));
		var cos_lower = 10*Math.sqrt(Math.pow(diff_x,2)+Math.pow(diff_y,2));
		var cos = cos_upper/cos_lower;
		click_angle = Math.acos(cos) * (180/Math.PI);
		if(diff_x >= 0){
			click_angle = click_angle;}
		else{
			click_angle = -click_angle;}
		return click_angle;
		//alert("Angle = "+click_angle);
		//alert("diff_x = "+diff_x+" diff_y = "+diff_y+" up = "+cos_upper+" down = "+cos_lower+" devide = "+cos+" angle= "+click_angle);
	}

	function showclick(){
		alert("X = "+click_x+" Y = "+click_y);
	}

	function pan_to_angle(pan_angle){
		/*
		var str = "http://140.113.208.143/cgi-bin/view/cammove.cgi?aPan="+pan_angle;
		alert(" send string = "+str);
		*/
		$.ajax({
		url: "http://140.113.208.143/cgi-bin/view/cammove.cgi?aPan="+pan_angle,
		dataType: 'jsonp'
		});
	
	}

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
