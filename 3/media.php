<?php
session_start();

if($_SESSION['login']==0){
  header('location:../logout.php');
}
else{
if (empty($_SESSION['email']) AND empty($_SESSION['password']) AND $_SESSION['login']==0){
	include "../404.php";
}
else{
?>

<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="../assets/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="../assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="../assets/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="../assets/css/font.css" type="text/css"/>
<link href="../assets/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="../assets/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="../assets/css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="../assets/js/jquery2.0.3.min.js"></script>
<script src="../assets/js/raphael-min.js"></script>
<script src="../assets/js/morris.js"></script>
<link rel="shortcut icon" href="../assets/images/iconlogo.png">

<!-- Datatables -->
<link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.min.css">
<script type="text/javascript" src="../assets/datatables/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/datatables_sr/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="../assets/datatables_sr/buttons.dataTables.min.css">

<!-- <script src="../js/jquery-latest.js"></script> -->
<script src="../assets/js/jquery.easyPaginate.js"></script>
</head>
<body>



<section id="container">
<!-- |========================================================| -->
<!-- |====================| header start |====================| -->
<!-- |========================================================| -->
<header class="header fixed-top clearfix">



<!-- |======================================================| -->
<!-- |====================| Logo start |====================| -->
<!-- |======================================================| -->
<div class="brand">
	<a href="index.php"><img class="img01" src="../assets/images/iconlogo.png"></a>
    <a href="index.php" class="logo">ADMIN.</a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!-- |====================================================| -->
<!-- |====================| logo end |====================| -->
<!-- |====================================================| -->



<!-- |=========================================================| -->
<!-- |====================| profile start |====================| -->
<!-- |=========================================================| -->
<div class="top-nav clearfix">
    <ul class="nav pull-right top-menu">
        <li>
            <form method="GET">
            	<input type="text" class="form-control search" placeholder="Search" name="cari">
            </form>
        </li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img class="img02" alt="" src="../foto/<?php echo $_SESSION['image']; ?>">
                <span class="username"><?php echo $_SESSION['username']; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="media.php?page=edit_profile&id=<?php echo $_SESSION['idusers'] ?>"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Profile</a></li>
                <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Log Out</a></li>
            </ul>
        </li> 
    </ul>
</div>
<!-- |=======================================================| -->
<!-- |====================| profile end |====================| -->
<!-- |=======================================================| -->



</header>
<!-- |======================================================| -->
<!-- |====================| header end |====================| -->
<!-- |======================================================| -->



<!-- |=========================================================| -->
<!-- |====================| sidebar start |====================| -->
<!-- |=========================================================| -->
<aside>
    <div id="sidebar" class="nav-collapse">
        <div class="leftside-navigation">

            <?php include "navigasi.php"; ?>

        </div>
    </div>
</aside>
<!-- |=======================================================| -->
<!-- |====================| sidebar end |====================| -->
<!-- |=======================================================| -->



<!-- |=========================================================| -->
<!-- |====================| content start |====================| -->
<!-- |=========================================================| -->
<section id="main-content">
	<section class="wrapper">
		<div class="market-updates">

            <?php include "konten.php"; ?>

		</div>	
    </section>
</section>

</section>
<!-- |=======================================================| -->
<!-- |====================| content end |====================| -->
<!-- |=======================================================| -->



<!-- |========================================================| -->
<!-- |====================| footer start |====================| -->
<!-- |========================================================| -->
<div class="footer">
    <div class="wthree-copyright">
        <p align="center">Copyright &copy; <a href="http://polindra.ac.id">Politeknik Negeri Indramayu</a> by: Syahrul Romadoni 2018-2019</p>
    </div>
</div>
<!-- |======================================================| -->
<!-- |====================| footer end |====================| -->
<!-- |======================================================| -->



<!-- |========================================================| -->
<!-- |====================| script start |====================| -->
<!-- |========================================================| -->
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../assets/js/scripts.js"></script>
<script src="../assets/js/jquery.slimscroll.js"></script>
<script src="../assets/js/jquery.nicescroll.js"></script>
<script src="../assets/js/jquery.scrollTo.js"></script>
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
	<script type="text/javascript" src="../assets/datatables_sr/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="../assets/datatables_sr/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="../assets/datatables_sr/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="../assets/datatables_sr/buttons.colVis.min.js"></script>

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

<?php
	}
}
?>