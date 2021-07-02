<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assemblee nationale</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Assemblée</span> Nationale</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
<?php
include('header.php');
?><!--/.sidebar-->
        <?php
include("dbConfig.php");
$id_av = $_GET['id_av'];
$query = "SELECT * FROM `avancement` WHERE id_av = '$id_av'";
$result = $conn->query($query);
?>		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Assemblée nationale</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				
				<h4 class="page-header" style=" text-align: center;">REPOBLIKAN'I MADAGASIKARA</h4>

			</div>
            <h4 class="page-header" style=" text-align: center;">Fitiavana-Tanindrazana-Fandrosoana</h4>
		</div><!--/.row-->
<h4 style=" text-align: center;">ASSEMBLEE NATIONALE</h4><br><p style=" text-align: right; ">Année : <?php echo date('d-m-Y'); ?></P>
<h4 class="page-header" style=" text-align: center;">BULLETIN INDIVIDUEL DE NOTES</h4>

 <?php
                            while ($row = $result->fetch_assoc()) {
                        ?>
<div class="container">
<h4><b>Nom :</b></h4>
<?php echo $row['nom']; ?>
<br>
<h4><b>Prenom :</b></h4>
<?php echo $row['prenom']; ?>
<br>
<h4><b>Avancement :</b><br></h4><br>
<h4><?php echo $row['classeD']; ?> - <?php echo $row['dateDc']; ?> : </h4>	
<?php echo $row['DcEchelonU']; ?> - <?php echo $row['dateDcEchelonU']; ?><br>
<?php echo $row['DcEchelonD']; ?> - <?php echo $row['dateDcEchelonD']; ?><br>
<?php echo $row['DcEchelonT']; ?> - <?php echo $row['dateDcEchelonT']; ?><br>
<br>
<h4><?php echo $row['classeU']; ?> - <?php echo $row['datePc']; ?><br> :</h4>
<?php echo $row['PcEchelonU']; ?> - <?php echo $row['datePcEchelonU']; ?><br>
<?php echo $row['PcEchelonD']; ?> - <?php echo $row['datePcEchelonD']; ?><br>
<?php echo $row['PcEchelonT']; ?> - <?php echo $row['datePcEchelonT']; ?><br>
<br>
<h4><?php echo $row['classeP']; ?> - <?php echo $row['dateCp']; ?><br> :</h4>
<?php echo $row['CpEchelonU']; ?> - <?php echo $row['dateCpEchelonU']; ?><br>
<?php echo $row['CpEchelonD']; ?> - <?php echo $row['dateCpEchelonD']; ?><br>
<?php echo $row['CpEchelonT']; ?> - <?php echo $row['dateCpEchelonT']; ?><br>
<br>
<h4><?php echo $row['classeE']; ?> - <?php echo $row['dateCe']; ?><br> :</h4>
<?php echo $row['CeEchelonU']; ?> - <?php echo $row['dateCeEchelonU']; ?><br>
<?php echo $row['CeEchelonD']; ?> - <?php echo $row['dateCeEchelonD']; ?><br>




<?php       
}
                            $conn->Close();
                        ?><br>  <br>                         
<a href="" onclick='window.print();' style="text-align: center;">Imprimer </a><br><br><br><br>
</div>
</div>
		</div><!--/.row-->
		
	</div>
</body>
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>