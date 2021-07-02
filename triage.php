
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
<!--/.sidebar-->
		
<!--/.row-->
<?php
include("dbConfig.php");
$query = "SELECT * FROM `avancement`";
$result = $conn->query($query);
?>		
		<div class="row">
			<div class="col-lg-12">

             

              <?php
include("dbConfig.php");
$debut = $_GET['debut'];
$fin = $_GET['fin'];
$query = "SELECT * FROM `retraite` WHERE '".$debut."' < dateR AND dateR < '".$fin."'";
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


		
</body>
</html>
