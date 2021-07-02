
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
<form id="wizardForm" method="post" action="insertPerso.php" class="form-horizontal wizardForm">

                    <fieldset class="step" id="first">
                        
                        <div class="clearfix"></div><br>
                        <div class="form-group">
                            <label for="nomP" class="control-label col-lg-4">Nom</label>

                            <div class="col-lg-8">
                                <input type="text" name="nomP" id="nomP" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prenomE" class="control-label col-lg-4">Prenom</label>

                            <div class="col-lg-8">
                                <input type="text" name="prenomE" id="prenomE" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dateN" class="control-label col-lg-4">Date de naissance</label>

                            <div class="col-lg-8">
                                <input type="date" name="dateN" id="dateN" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lieu" class="control-label col-lg-4">Lieu de naissance</label>

                            <div class="col-lg-8">
                                <input type="text" name="lieu" id="lieu" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="situation" class="control-label col-lg-4">Situation</label>

                            <div class="col-lg-8">
                                <select class="form-control form-control-lg" id="situation" name="situation" >
                                    
                                   
                                        
                                        <option>Célibataire</option>
                                        <option>Marié(e)</option>
                                        <option>Divorcé(e)</option>
                                        <option>Veuf(veuve)</option>
                                    
   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nb_ef_vivant" class="control-label col-lg-4">Nombre d'enfants vivants</label>

                            <div class="col-lg-8">
                                <input type="text" name="nb_ef_vivant" id="nb_ef_vivant" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nb_ef_charger" class="control-label col-lg-4">Nombre d'enfant charger</label>

                            <div class="col-lg-8">
                                <input type="text" name="nb_ef_charger" id="nb_ef_charger" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="corps" class="control-label col-lg-4">Corps</label>

                            <div class="col-lg-8">
                                
                                <select name="corps" id="corps" class="form-control">
                                    <option>Assemblée nationale</option>
                                    <option>Fonction public</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dateE" class="control-label col-lg-4">Date de titularisation</label>

                            <div class="col-lg-8">
                                <input type="date" name="dateE" id="lieu" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dateE" class="control-label col-lg-4">Avancement en classe</label>

                            <div class="col-lg-8">
                                <input type="text" name="classe" id="classe" class="form-control" value="2 eme classe">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dateE" class="control-label col-lg-4">Date d'avancement en classe</label>

                            <div class="col-lg-8">
                                <input type="date" name="dateClasse" id="dateClasse" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dateE" class="control-label col-lg-4">Avancement en echelon</label>

                            <div class="col-lg-8">
                                <input type="text" name="echelon" id="echelon" class="form-control" value="1 ere echelon">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dateE" class="control-label col-lg-4">Date d'avancement en echelon</label>

                            <div class="col-lg-8">
                                <input type="date" name="dateEchelon" id="dateEchelon" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            

                            <div class="col-lg-8">
                                 <button type="submit" class="btn btn-primary ">Enregistrer la titularisation</button>
                            </div>
                        </div>
                        
                       

                        
                        
                    </fieldset>

                    

                    
                   
</form>
<br>
        
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
