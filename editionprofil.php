<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=avo', 'root', '');

if(isset($_SESSION['id']))
{
	$requser = $bdd->prepare("SELECT *FROM membres WHERE id = ?");
	$requser->execute(array($_SESSION['id']));
	$user = $requser->fetch();
//avatar
	if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))
	{
		$tailleMax = 13406625;
		$extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
		if($_FILES['avatar']['size'] <= $tailleMax)
		{
			$extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
			if(in_array($extensionUpload, $extensionsValides))
			{
				$chemin = "membres/avatars/".$_SESSION['id'].".".$extensionUpload;
				$resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
				if($resultat)
				{
					$updateavatar = $bdd->prepare('UPDATE membres SET avatar = :avatar WHERE id = :id');
					$updateavatar->execute(array(
						'avatar'=> $_SESSION['id'].".".$extensionUpload,
						'id'	=> $_SESSION['id']
						

					));
					header('Location: index.php?id='.$_SESSION['id']);
				}
				else
				{
					$msg = "Il y a une erreur pendant la mise à jours du photo";
				}
			}
			else
			{
				$msg = "Votre photo doit être au format jpg, jpeg, gif ou png";
			}
		}
		else
		{
			$msg = "Votre photo de profil ne doit pas dépasser 12Mo ";
		}
	}







	if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo'])
	{
		$newpseudo = htmlspecialchars($_POST['newpseudo']);
		$insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
		$insertpseudo->execute(array($newpseudo, $_SESSION['id']));

		header('Location: indexA.php?id='.$_SESSION['id']);
	}

	if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail'])
	{
		$newmail = htmlspecialchars($_POST['newmail']);
		$insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
		$insertmail->execute(array($newmail, $_SESSION['id']));

		header('Location: indexA.php?id='.$_SESSION['id']);
	}
	if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2']))
	{
		$mdp1 = sha1($_POST['newmdp1']);
		$mdp2 = sha1($_POST['newmdp2']);

		if($mdp1 == $mdp2)
		{
			$insertmdp = $bdd->prepare("UPDATE membres SET motdepasse = ? WHERE id = ?");
			$insertmdp->execute(array($mdp1, $_SESSION['id']));
			header('Location: index.php?id='.$_SESSION['id']);	
		}
		else
		{
			$msg = "Vos deux mots de passe ne correspondent pas!";
		}

	}
?>

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
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">ADMINISTRATEUR</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online<br><?php echo date('d-m-Y '); ?></div>
                
                
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="index.php"><em class="fa fa-home">&nbsp;</em> Accueil</a></li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Utilisateur <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li><a class="" href="inscription.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Pour l'avancement
                    </a></li>
                    <li><a class="" href="inscriptionR.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Pour la retraite
                    </a></li>
                </ul>
            </li>
            <li><a href="deconnexion.php"><em class="fa fa-power-off">&nbsp;</em> Deconnexion</a></li>
        </ul>
    </div>     <!-- /#left -->
<div class="row">
<div class="col-lg-12" >

<h2>Edition de profil</h2>
	
		<form class="form-horizontal wizardForm" method="POST" action="" enctype="multipart/form-data"><br><br>
			
			
 <fieldset class="step" id="first">
                        
                        <div class="clearfix"></div>
                        <div class="form-group">
                          
                            <label for="nomP" class="control-label col-lg-4">Pseudo</label>

                            <div class="col-lg-8">
                                <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prenomE" class="control-label col-lg-4">Mail</label>

                            <div class="col-lg-8">
                                <input type="text" type="email" name="newmail" placeholder="Mail" value="<?php echo $user['mail']; ?>" class="form-control" >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="dateE" class="control-label col-lg-4">Mots de passe</label>

                            <div class="col-lg-8">
                                <input type="password" name="newmdp1" placeholder="Mots de passe" class="form-control"  autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dateE" class="control-label col-lg-4">Confirmation du mots de passe</label>

                            <div class="col-lg-8">
                                <input type="password" name="newmdp2" placeholder="Confirmation du mots de passe" class="form-control"  autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dateE" class="control-label col-lg-4">Avatar</label>

                            <div class="col-lg-8">
                               <input type="file" name="avatar" class="form-control"  autofocus><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dateE" class="control-label col-lg-4"></label>

                            <div class="col-lg-8">
                             <button type="submit" class="btn btn-primary" name="formconnexion">Mettre à jour</button>
                            </div>
                        </div>
                        
                    

                        
                    
                        
                    </fieldset>

			
			
		</form>
		<?php
		
			if(isset($msg))
			{
				echo '<font color = "red";>'.$msg.'</font>';
			}

		?>
		
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
<?php
}
else
{
	header("Location: connexion.php");
}
?>