<!DOCTYPE html>
<html>
<head>
<title>Configurateur tarifs</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"></link>
<link rel="stylesheet" href="assets/bootstrap-slider.min.css"></link>
<link rel="stylesheet" href="assets/style.css"></link>
</head>

<body>
	<div class="container">
			<?php 
				if(isset($_GET["msg"]) && $_GET["msg"] == "1") {
			 ?>
				<div class="alert alert-info">
					<strong>Merci!</strong> Vous allez recevoir les détails de votre demande par mail.
				</div>
				<?php 
			} ?>
		<form method="post" action="controleur/details_dde.php">
		<div class="d-flex justify-content-center">
			<button id="first" type="button" class="btn btn-orbiteo">1er choix</button>
			<button id="second" type="button" class="btn btn-orbiteo">2ème choix</button>
			<button id="third" type="button" class="btn btn-orbiteo">3ème choix</button>
			<button id="fourth" type="button" class="btn btn-orbiteo">4ème choix</button>	
		</div>

		<div class="slideOptions">
			<div class="row">
				<div class="col-lg-2">Marketing digital</div>
				<div class="col-lg-1 text-center minus"><a href="#" class="symbol"> - </a></div>
				<div class="col-lg-5"><input name="variable9" id="variable9" data-slider-id='ex9Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="7" data-slider-handle="custom"/></div>
				<div class="col-lg-1 text-center plus"><a href="#" class="symbol"> + </a></div>
				<div class="col-lg-3 valeur"><span class="var9donnee">7</span>h/mois</div>
			</div>
		</div>
		<div class="slideOptions">
			<div class="row">
				<div class="col-lg-2">Développement web</div>
				<div class="col-lg-1 text-center minus"><a href="#" class="symbol"> - </a></div>
				<div class="col-lg-5"><input name="variable8" id="variable8" data-slider-id='ex8Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="4" data-slider-handle="custom"/></div>
				<div class="col-lg-1 text-center plus"><a href="#" class="symbol"> + </a></div>
				<div class="col-lg-3 valeur"><span class="var8donnee">4</span>h/mois</div>
			</div>
		</div>
		<div class="slideOptions">
			<div class="row">
				<div class="col-lg-2">Studio graphique</div>
				<div class="col-lg-1 text-center minus"><a href="#" class="symbol"> - </a></div>
				<div class="col-lg-5"><input name="variable7" id="variable7" data-slider-id='ex7Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="4" data-slider-handle="custom"/></div>
				<div class="col-lg-1 text-center plus"><a href="#" class="symbol"> + </a></div>
				<div class="col-lg-3 valeur"><span class="var7donnee">4</span>h/mois</div>
			</div>
		</div>
		<div class="slideOptions">
			<div class="row">
				<div class="col-lg-2">Accompagnement CRM</div>
				<div class="col-lg-1 text-center minus"><a href="#" class="symbol"> - </a></div>
				<div class="col-lg-5"><input name="variable6" id="variable6" data-slider-id='ex6Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="4" data-slider-handle="custom"/></div>
				<div class="col-lg-1 text-center plus"><a href="#" class="symbol"> + </a></div>
				<div class="col-lg-3 valeur"><span class="var6donnee">4</span>h/mois</div>
			</div>
		</div>
		<div class="slideOptions">
			<div class="row">
				<div class="col-lg-2">Référencement naturel</div>
				<div class="col-lg-1 text-center minus"><a href="#" class="symbol"> - </a></div>
				<div class="col-lg-5"><input name="variable5" id="variable5" data-slider-id='ex5Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="10" data-slider-handle="custom"/></div>
				<div class="col-lg-1 text-center plus"><a href="#" class="symbol"> + </a></div>
				<div class="col-lg-3 valeur"><span class="var5donnee">10</span>h/mois</div>
			</div>
		</div>
		<div class="slideOptions">
			<div class="row">
				<div class="col-lg-2">Stratégie & Gestion de projet</div>
				<div class="col-lg-1 text-center minus"><a href="#" class="symbol"> - </a></div>
				<div class="col-lg-5"><input name="variable1" id="variable1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="0.1" data-slider-value="2.9" data-slider-handle="custom" data-slider-enabled="false"/></div>
				<div class="col-lg-1 text-center plus"><a href="#" class="symbol"> + </a></div>
				<div class="col-lg-3 valeur"><span class="var1donnee">2.9</span>h/mois</div>
			</div>
		</div>
		<div class="slideOptions">
			<div class="row">
				<div class="col-lg-2">Bugdet Pub</div>
				<div class="col-lg-1 text-center minus"><a href="#" class="symbol"> - </a></div>
				<div class="col-lg-5"><input name="variable3" id="variable3" data-slider-id='ex3Slider' type="text" data-slider-min="500" data-slider-max="10000" data-slider-step="100" data-slider-value="2000" data-slider-handle="custom"/></div>
				<div class="col-lg-1 text-center plus"><a href="#" class="symbol"> + </a></div>
				<div class="col-lg-3 valeur"><span class="var3donnee">1000</span>,00 €/mois</div>
			</div>
		</div>
		<div class="slideOptions">
			<div class="row">
				<div class="col-lg-2">Achat (BL, Articles)</div>
				<div class="col-lg-1 text-center minus"><a href="#" class="symbol"> - </a></div>
				<div class="col-lg-5"><input name="variable4" id="variable4" data-slider-id='ex4Slider' type="text" data-slider-min="100" data-slider-max="2000" data-slider-step="1" data-slider-value="100" data-slider-handle="custom"/></div>
				<div class="col-lg-1 text-center plus"><a href="#" class="symbol"> + </a></div>
				<div class="col-lg-3 valeur"><span class="var4donnee">100</span>,00 €/mois</div>
			</div>
		</div>
		<div class="col-lg-3 mx-auto">
			<button class="btn btn-success" type="button" data-toggle="modal" data-target="#infosPerso">obtenir ma synthèse</button>
		</div>
		<!-- Modal informations personnelles -->
		<div class="modal fade" id="infosPerso">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Recevoir votre synthèse</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>

		      <!-- Modal body -->
		      <div class="modal-body">
		        <p>Afin de vous faire parvenir vos informations personnalisées, merci de remplir les champs ci-dessous:</p>
				  <input type="text" class="form-control input-infos" name="nom" placeholder="Votre nom" required>
				  <input type="text" class="form-control input-infos" name="societe" placeholder="Votre entreprise">
				  <input type="mail" class="form-control input-infos" name="email" placeholder="Votre adresse mail" required>
				  <input type="text" class="form-control input-infos" name="telephone" placeholder="Votre n° de téléphone">
		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-success">Envoyer</button>
		      </div>

		    </div>
		  </div>
		</div>
	</form>
		
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="assets/bootstrap-slider.min.js"></script>
<script type="text/javascript" src="assets/functions.js"></script>

</body>

</html>