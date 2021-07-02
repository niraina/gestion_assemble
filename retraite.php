
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
		<link rel="stylesheet" type="text/css" href="css/table/datatables.css">
  <link rel="stylesheet" type="text/css" href="css/table/datatables.min.css">
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
include('headerRetraite.php');
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
<?php
include("dbConfig.php");
$query = "SELECT * FROM `avancement`";
$result = $conn->query($query);
?>		
		<div class="row">
			<div class="col-lg-12">
<form id="wizardForm" method="post" action="insertRetraite.php" class="form-horizontal wizardForm">

                    <fieldset class="step" id="first">
                        
                        <div class="clearfix"></div><br>
                        <div class="form-group">
                  <label for="inputPassword3" class="control-label col-lg-4">Nom et prénom</label>

                  <div class="col-sm-8">
                    <select class="form-control" id="nom" name="nom" >
                                    <?php
                                                    include("dbConfig.php");
                                                    $query = "SELECT nom, prenom FROM avancement";
                                                    $result = $conn->query($query);

                                                    ?>
                                                    <?php
                                                    while ($row = $result->fetch_assoc()) {
                                                    ?>
                                                    <option><?php echo $row['nom']; ?> <?php echo $row['prenom']; ?></option>
                                                    <?php 
                                                              }
                                                        $conn->Close();
                                                    ?>
   
                                </select>
                  </div>
                </div>
                        <div class="form-group">
                            <label for="situation" class="control-label col-lg-4">Date de naissance</label>

                            <div class="col-sm-8">
                    <select class="form-control" id="dateN" name="dateN" >
                                    <?php
                                                    include("dbConfig.php");
                                                    $query = "SELECT dateN FROM person";
                                                    $result = $conn->query($query);

                                                    ?>
                                                    <?php
                                                    while ($row = $result->fetch_assoc()) {
                                                    ?>
                                                    <option><?php echo $row['dateN']; ?></option>
                                                    <?php 
                                                              }
                                                        $conn->Close();
                                                    ?>
   
                                </select>
                  </div>
                        </div>
                        <div class="form-group">
                            <label for="situation" class="control-label col-lg-4">Age</label>

                            <div class="col-lg-8">
                                <input type="text" name="age" id="age" class="form-control" required="required">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="dateN" class="control-label col-lg-4">Demande de retraite</label>

                            <div class="col-lg-8">
                                <select class="form-control" name="retraite" id="retraite">
                                	<option>Retraite anticiper</option>
                                	<option>Retraite normale</option>
                                	<option>Demande de maintient</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lieu" class="control-label col-lg-4">Date de départ</label>

                            <div class="col-lg-8">
                                <input type="date" name="dateR" id="dateR" class="form-control" required="required">
                            </div>
                        </div>
                        
                              <div class="form-group">
                  <label for="inputPassword3" class="control-label col-lg-4">Avancement en classe</label>

                  <div class="col-sm-8">
                    <select class="form-control" id="avancement" name="avancement" >
                                   <option>2 eme classe</option>
                                   <option>1 ere classe</option>
                                   <option>Classe principale</option>
                                   <option>Classe exceptionnelle</option>
   
                                </select>
                  </div>
                </div>
                           <div class="form-group">
                  <label for="inputPassword3" class="control-label col-lg-4">Avancement en echelon</label>

                  <div class="col-sm-8">
                    <select class="form-control" id="echelon" name="echelon" >
                                    <option>1 ere echelon</option>
                                    <option>2 eme echelon</option>
                                    <option>3 eme echelon</option>
   
                                </select>
                  </div>
                </div>
                        
                        <div class="form-group">
                            

                            <div class="col-lg-8">
                                 <button type="submit" class="btn btn-primary ">Enregistrer</button>
                            </div>
                        </div>
                        
                       

                        
                        
                    </fieldset>

                    

                    
                   
</form>

<?php
include("dbConfig.php");
$query = "SELECT * FROM `retraite`";
$result = $conn->query($query);
?>

<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead class="thead-dark">
    <tr>

      <th class="th-sm">Nom
        
      </th>
      <th class="th-sm">Date de naissance
        
      </th>
      <th class="th-sm">Age
        
      </th>
      <th class="th-sm">Demande de retraite
        
      </th>
      
      <th class="th-sm">Date de retraite
        
      </th>
      
      
      <th class="th-sm">Avancement classe
        
      </th>
      <th class="th-sm">Avancement echelon
        
      </th>
      
      
       <th class="th-sm">Action
        
      </th>
    </tr>
  </thead>
  <tbody>
                        <?php
                            while ($row = $result->fetch_assoc()) {
                        ?>
   <tr>
                            
                            <td><?php echo $row['nom']; ?></td>
                            <td><?php echo $row['dateN']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['retraite']; ?></td>
                            <td><?php echo $row['dateR']; ?></td>
                            <td><?php echo $row['avancement']; ?></td>
                            <td><?php echo $row['echelon']; ?></td>
                            
                            
                            <td>


                                
                                <a href="upFrRe.php?id=<?php echo $row['id']; ?>" class="btn btn-info"  role="button"><i class="glyphicon glyphicon-edit"></i></a>
                                
                                <a href="delRe.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                        <?php 
                                  }
                            $conn->Close();
                        ?>
  </tbody>
  
</table>
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
  <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="js/buttons.bootstrap4.min.js"></script>
  <script type="text/javascript" src="js/jszip.min.js"></script>
  <script type="text/javascript" src="js/pdfmake.min.js"></script>
  <script type="text/javascript" src="js/vfs_fonts.js"></script>
  <script type="text/javascript" src="js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="js/buttons.print.min.js"></script>
  <script type="text/javascript" src="js/buttons.colVis.min.js"></script>

<script src="assets/js/style-switcher.js"></script>
            <script type="text/javascript">
              $(document).ready(function () {
              $('#dtBasicExample').DataTable();
              $('.dataTables_length').addClass('bs-select');
            });
            </script>
		
</body>
</html>
