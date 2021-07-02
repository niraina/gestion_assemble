	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Utilisateur</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online<br><?php echo date('d-m-Y '); ?></div>
				
				
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li class="active"><a href="index.php"><em class="fa fa-home">&nbsp;</em> Accueil</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Avancement <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="titularisation.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Titularisation
					</a></li>
					<li><a class="" href="class2.php">
						<span class="fa fa-arrow-right">&nbsp;</span> 2 éme classe
					</a></li>
					<li><a class="" href="class1.php">
						<span class="fa fa-arrow-right">&nbsp;</span> 1 ére classe
					</a></li>
					<li><a class="" href="classP.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Classe principale
					</a></li>
					<li><a class="" href="classE.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Classe exceptionnelle
					</a></li>
					<li><a class="" href="listeT.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Liste
					</a></li>
				</ul>
			</li>
		
			
			<li><a href="deconnexion.php"><em class="fa fa-power-off">&nbsp;</em> Deconnexion</a></li>
		</ul>
	</div>