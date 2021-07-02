<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=avo', 'root', '');

if(isset($_POST['formconnexion']))
{
	$mailconnect  = htmlspecialchars($_POST['mailconnect']);
	$mdpconnect   = sha1($_POST['mdpconnect']);

		if(!empty($mailconnect) AND !empty($mdpconnect))
			{
				$requser = $bdd->prepare("SELECT * FROM admin WHERE mail = ? AND motdepasse = ?");
				$requser->execute(array($mailconnect, $mdpconnect));
				$userexist = $requser->rowCount();
				
				if($userexist == 1)
				
					{
						$userinfo = $requser->fetch();
						$_SESSION['id'] = $userinfo['id'];
						$_SESSION['pseudo'] = $userinfo['pseudo'];
						$_SESSION['mail'] = $userinfo['mail'];

						header("Location: admin.php?id=".$_SESSION['id']);

					} 

				else
				{
					$erreur = "Mauvais mail ou mots de passe";
				}
			}
		else
			{
				$erreur = "Touts les champs doivent être complétés";
			}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assemblée nationale</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Assemble Nationale
				</div>

				<div class="panel-body">
					 <?php

            if(isset($erreur))
            {
                echo '<font color = "red";>'.$erreur.'</font>';
            }

            ?>
					<form role="form" method="POST" action="">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="mailconnect" id="mailconnect" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mot de passe" name="mdpconnect" id="mdpconnect" type="password" value="">
							</div>
							
							<button class="btn btn-lg btn-primary btn-block" type="submit" name="formconnexion">Connexion</button><br>
							
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
