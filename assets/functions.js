	var slider = {};
	for(var a=1; a<=9 ; a++) {
		slider[a] = $("#variable"+a);
		slider[a].slider();
	}

	slider[1].on('change', function() {
		var valeur = $(this).slider('getValue');
		$('.var1donnee').html(valeur);
		var arrondie = Math.round((valeur/0.1)/70);
		$('.var2donnee').html(arrondie);
		slider[2].slider('setValue', arrondie);
	});
	
	slider[3].on('change', function() {
		var valeur = $(this).slider('getValue');
		$('.var3donnee').html(valeur);
		var arrondie = Math.round(valeur*0.2);
		$('.var4donnee').html(arrondie);
		slider[4].slider('setValue', arrondie);
	});
	
	slider[4].on('change', function() {
		var valeur = $(this).slider('getValue');
		$('.var4donnee').html(valeur);
		var arrondie = Math.round(valeur/0.2);
		$('.var3donnee').html(arrondie);
		slider[3].slider('setValue', arrondie);
	});

	slider[5].on('change', function() {
		var valeur = $(this).slider('getValue');
		$(".var5donnee").html(valeur);
		totalTechCrea();
	});
	slider[6].on('change', function() {
		var valeur = $(this).slider('getValue');
		$(".var6donnee").html(valeur);
		totalTechCrea();
	});
	slider[7].on('change', function() {
		var valeur = $(this).slider('getValue');
		$(".var7donnee").html(valeur);
		totalTechCrea();
	});
	slider[8].on('change', function() {
		var valeur = $(this).slider('getValue');
		$(".var8donnee").html(valeur);
		totalTechCrea();
	});
	slider[9].on('change', function() {
		var valeur = $(this).slider('getValue');
		$(".var9donnee").html(valeur);
		totalTechCrea();
	});
	
	

	$('.minus').on('click', function() {
		addOrRemove('remove', $(this));
		totalTechCrea();
	});
	$('.plus').on('click', function() {
		addOrRemove('add', $(this));
		totalTechCrea();
	});

	$('#first').on('click', function() {
		changeButtons($(this));
		setValues(0.6, 0, 0, 2, 0, 1, 1, 2);
	});
	$('#second').on('click', function() {
		changeButtons($(this));
		setValues(1.2, 1000, 100, 4, 0, 2, 2, 4);
	});
	$('#third').on('click', function() {
		changeButtons($(this));
		setValues(2.9, 1000, 100, 10, 4, 4, 4, 7);
	});
	$('#fourth').on('click', function() {
		changeButtons($(this));
		setValues(3.6, 2000, 200, 14, 4, 4, 4, 10);
	});

	function totalTechCrea() { //Calcul du temps "stratégie & gestion"
		var total = 0;
		for(var a=5 ; a<10 ; a++) {
			total += slider[a].slider('getValue');
		}
		var nouvelleVar1 = total*0.1;
		slider[1].slider('setValue', nouvelleVar1);
		var arrondie = nouvelleVar1.toFixed(1);
		$('.var1donnee').html(arrondie);
	}

	function changeButtons(selector) { // Apparence boutons haut de page
		selector.css('background-color', '#0065CB');
		selector.css('color', '#fff');
		selector.siblings().css('background-color', '#fff');
		selector.siblings().css('color', '#0065CB');
	}

	function setValues(valeur1, valeur3, valeur4, valeur5, valeur6, valeur7, valeur8, valeur9 ) { // Valeurs auto suivant formule choisie
		slider[1].slider('setValue', valeur1);
		slider[3].slider('setValue', valeur3);
		slider[4].slider('setValue', valeur4);
		slider[5].slider('setValue', valeur5);
		slider[6].slider('setValue', valeur6);
		slider[7].slider('setValue', valeur7);
		slider[8].slider('setValue', valeur8);
		slider[9].slider('setValue', valeur9);
		$('.var1donnee').html(valeur1);
		$('.var3donnee').html(valeur3);
		$('.var4donnee').html(valeur4);
		$('.var5donnee').html(valeur5);
		$('.var6donnee').html(valeur6);
		$('.var7donnee').html(valeur7);
		$('.var8donnee').html(valeur8);
		$('.var9donnee').html(valeur9);
	}

	function addOrRemove(symbole, selector) { // Modifs valeurs si + ou - cliqué
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
		var valeur = selector.parents('.slideOptions').children().children('.col-lg-3').children('span');
		valeur.html(nouvelleValeur);

		//Changement auto des autres valeurs
		if(input.prop('id') == 'variable1') {
			var arrondie = Math.round((nouvelleValeur/0.1)/70);
			$('.var2donnee').html(arrondie);
			slider[2].slider('setValue', arrondie);
		} else if(input.prop('id') == 'variable3') {
			var arrondie = Math.round(nouvelleValeur*0.2);
			$('.var4donnee').html(arrondie);
			slider[4].slider('setValue', arrondie);
		} else if(input.prop('id') == 'variable4') {
			var arrondie = Math.round(nouvelleValeur/0.2);
			$('.var3donnee').html(arrondie);
			slider[3].slider('setValue', arrondie);
		} 
	}