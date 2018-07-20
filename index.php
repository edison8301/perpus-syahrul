<!DOCTYPE html>
<head>
<title>LOGIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="assets/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="assets/css/font.css" type="text/css"/>
<link href="assets/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="assets/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="assets/css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="assets/js/jquery2.0.3.min.js"></script>
<script src="assets/js/raphael-min.js"></script>
<script src="assets/js/morris.js"></script>
<link rel="shortcut icon" href="assets/images/iconlogo.png">

<!-- Datatables -->
<link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css">
<script type="text/javascript" src="assets/datatables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/datatables_sr/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="assets/datatables_sr/buttons.dataTables.min.css">

<!-- <script src="../js/jquery-latest.js"></script> -->
<script src="assets/js/jquery.easyPaginate.js"></script>
</head>
<body>


<!-- |=======================================================| -->
<!-- |====================| login start |====================| -->
<!-- |=======================================================| -->
<div class="log-w3">
	<div class="w3layouts-main">
		<div align="center">
			<!-- <img class="img00" src="assets/images/iconlogo.png"> -->
		</div>
		<h2>Sign In</h2>
			<form action="aksi_login.php" method="POST">
				<input type="text" class="ggg" name="username" placeholder="USERNAME :" required="">
				<input type="password" class="ggg" name="password" placeholder="PASSWORD :" required="">
				<?php //<h6><a href="forgot.php">Forgot Password?</a></h6> ?>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
			</form>
			<p>Don't Have an Account ?<a href="register.php">Create an account</a></p>
	</div>
</div>
<!-- |=====================================================| -->
<!-- |====================| login end |====================| -->
<!-- |=====================================================| -->



<!-- |========================================================| -->
<!-- |====================| script start |====================| -->
<!-- |========================================================| -->
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>

	<!-- Datatables -->
	<script type="text/javascript" src="assets/datatables_sr/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="assets/datatables_sr/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="assets/datatables_sr/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="assets/datatables_sr/buttons.colVis.min.js"></script>

	<script type="text/javascript">
		$('#easyPaginate').easyPaginate({
	    paginateElement: 'div',
	    elementsPerPage: 9,
	    effect: 'climb'
	});
	</script>
<!-- |======================================================| -->
<!-- |====================| script end |====================| -->
<!-- |======================================================| -->



</body>
</html>