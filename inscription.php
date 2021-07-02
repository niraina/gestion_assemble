<?php

$bdd = new PDO('mysql:host=localhost;dbname=avo', 'root', '');

if(isset($_POST['forminscription']))

{
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$mail   = htmlspecialchars($_POST['mail']);
		$mail2  = htmlspecialchars($_POST['mail2']);
		$mdp    = sha1($_POST['mdp']);
		$mdp2   = sha1($_POST['mdp2']);

	if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']) )
	{
			

		$pseudolength = strlen($pseudo);
		if($pseudolength <=255)
		{
			if($mail == $mail2)
			{
				if(filter_var($mail, FILTER_VALIDATE_EMAIL))

				{

					$reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
					$reqmail->execute(array($mail));
					$mailexist = $reqmail->rowCount();

					if($mailexist == 0)
					{

						if($mdp == $mdp2)
						{
							$insertmbr = $bdd->prepare("INSERT INTO membres (pseudo,mail,motdepasse) VALUES (?,?,?)");
							$insertmbr->execute(array($pseudo, $mail, $mdp));
							$ok = "Le responsable a été bien créer! <a href = \"admin.php\">Retour à la liste</a>";
						}
						else
						{
							$erreur = "Votre mots de passe ne se correspond pas";
						}
					}
					else
					{
						$erreur = "adresse mail déjà utiliser!";
					}
				}
				else
				{
					$erreur = "Votre adresse mail n'est pas valide";
				}		
			}
			else
			{
				$erreur = "Votre adresse mail ne se correspond pas";
			}
		}
		else
		{
			$erreur = "Votre pseudo ne doit pas depasser 255 caractères";
		}
	}
	else
	{
		$erreur ="Tout les champs doivent être remplie";
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

			if(isset($ok))
			{
				echo '<font color = "green";>'.$ok.'</font>';
			}

		?>

		<?php

			if(isset($erreur))
			{
				echo '<font color = "red";>'.$erreur.'</font>';
			}

		?>
					<form role="form" method="POST" action="">
						<fieldset>
							<div class="form-group">
								<input class="form-control"name="pseudo" id="pseudo" placeholder="Votre pseudo" value="<?php if(isset($pseudo)) { echo $pseudo ;} ?>" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" name="mail" id="mail" placeholder="Votre email" value="<?php if(isset($mail)) { echo $mail ;} ?>" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" name="mail2" id="mail2" placeholder="Confirmez votre mail" value="<?php if(isset($mail2)) { echo $mail2 ;} ?>" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" name="mdp" id="mdp" placeholder="Votre mots de passe" type="password" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" type="password" name="mdp2" id="mdp2" placeholder="Confirmez votre mots de passe" autofocus="">
							</div>
							
							<button class="btn btn-lg btn-success btn-block" type="submit" name="forminscription">Ajouter</button><br><a href="admin.php"><h4>Retour à la liste</h4></a>
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
