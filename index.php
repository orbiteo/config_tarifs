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
		<div class="d-flex justify-content-center">
			<button id="first" type="button" class="btn btn-info">1er choix</button>
			<button id="second" type="button" class="btn btn-info">2ème choix</button>
			<button id="third" type="button" class="btn btn-info">3ème choix</button>
			<button id="fourth" type="button" class="btn btn-info">4ème choix</button>	
		</div>
		
		<div class="slideOptions">
			<div class="row">
				<div class="col-lg-2">Stratégie</div>
				<div class="col-lg-1 text-center minus"><a href="#"> - </a></div>
				<div class="col-lg-5"><input id="variable1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="700" data-slider-step="10" data-slider-value="196"/></div>
				<div class="col-lg-1 text-center plus"><a href="#"> + </a></div>
				<div class="col-lg-3 valeur"><span class="var1donnee">196</span>,00 €</div>
			</div>
		</div>
		<div class="slideOptions">
			<div class="row">
				<div class="col-lg-2">Volume horaire</div>
				<div class="col-lg-1 text-center minus"><a href="#"> - </a></div>
				<div class="col-lg-5"><input id="variable2" data-slider-id='ex2Slider' type="text" data-slider-min="7" data-slider-max="100" data-slider-step="1" data-slider-value="28"/></div>
				<div class="col-lg-1 text-center plus"><a href="#"> + </a></div>
				<div class="col-lg-3 valeur"><span class="var2donnee">128</span>h/mois</div>
			</div>
		</div>
		<div class="slideOptions">
			<div class="row">
				<div class="col-lg-2">Pub</div>
				<div class="col-lg-1 text-center minus"><a href="#"> - </a></div>
				<div class="col-lg-5"><input id="variable3" data-slider-id='ex3Slider' type="text" data-slider-min="500" data-slider-max="10000" data-slider-step="100" data-slider-value="2000"/></div>
				<div class="col-lg-1 text-center plus"><a href="#"> + </a></div>
				<div class="col-lg-3 valeur"><span class="var3donnee">2000</span>,00 €</div>
			</div>
		</div>
		<div class="slideOptions">
			<div class="row">
				<div class="col-lg-2">Achat</div>
				<div class="col-lg-1 text-center minus"><a href="#"> - </a></div>
				<div class="col-lg-5"><input id="variable4" data-slider-id='ex4Slider' type="text" data-slider-min="100" data-slider-max="2000" data-slider-step="1" data-slider-value="400"/></div>
				<div class="col-lg-1 text-center plus"><a href="#"> + </a></div>
				<div class="col-lg-3 valeur"><span class="var4donnee">400</span>,00 €</div>
			</div>
		</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/bootstrap-slider.min.js"></script>
<script type="text/javascript">
	var slider1 = $("#variable1");
	slider1.slider();
	slider1.on('change', function() {
		var valeur1 = slider1.slider('getValue');
		$('.var1donnee').html(valeur1);
	});
	var slider2 = $("#variable2");
	slider2.slider();
	slider2.on('change', function() {
		var valeur2 = slider2.slider('getValue');
		$('.var2donnee').html(valeur2);
	});
	var slider3 = $("#variable3");
	slider3.slider();
	slider3.on('change', function() {
		var valeur3 = slider3.slider('getValue');
		$('.var3donnee').html(valeur3);
	});
	var slider4 = $("#variable4");
	slider4.slider();
	slider4.on('change', function() {
		var valeur4 = slider4.slider('getValue');
		$('.var4donnee').html(valeur4);
	});

	$('.minus').on('click', function() {
		addOrRemove('remove', $(this));
	});
	$('.plus').on('click', function() {
		addOrRemove('add', $(this));
	});

	$('#first').on('click', function() {
		changeButtons($(this));
		setValues(49, 7, 500, 100);
	});
	$('#second').on('click', function() {
		changeButtons($(this));
		setValues(98, 14, 1000, 200);
	});
	$('#third').on('click', function() {
		changeButtons($(this));
		setValues(196, 28, 2000, 400);
	});
	$('#fourth').on('click', function() {
		changeButtons($(this));
		setValues(392, 56, 3000, 600);
	});

	function changeButtons(selector) {
		selector.css('background-color', '#138496');
		selector.css('color', '#fff');
		selector.siblings().css('background-color', '#fff');
		selector.siblings().css('color', '#138496');
	}

	function setValues(valeur1, valeur2, valeur3, valeur4) {
		slider1.slider('setValue', valeur1);
		slider2.slider('setValue', valeur2);
		slider3.slider('setValue', valeur3);
		slider4.slider('setValue', valeur4);
		$('.var1donnee').html(valeur1);
		$('.var2donnee').html(valeur2);
		$('.var3donnee').html(valeur3);
		$('.var4donnee').html(valeur4);
	}

	function addOrRemove(symbole, selector) {
		var nouvelleValeur;
		var input = selector.parents('.slideOptions').children().children('.col-lg-5').children('input');
		var valeur1 = input.slider('getValue');
		if(symbole == 'add') {
			nouvelleValeur = valeur1+1;
		} else if(symbole == 'remove') {
			nouvelleValeur = valeur1-1;
		}
		else {
			nouvelleValeur = valeur1;
		}
		input.slider('setValue', nouvelleValeur);
		var valeur = selector.parents('.slideOptions').children().children('.col-lg-3');
		valeur.html(nouvelleValeur);
	}
</script>

</body>

</html>