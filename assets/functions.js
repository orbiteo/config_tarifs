	var slider1 = $("#variable1");
	slider1.slider();
	var slider2 = $("#variable2");
	slider2.slider();
	var slider3 = $("#variable3");
	slider3.slider();
	var slider4 = $("#variable4");
	slider4.slider();

	slider1.on('change', function() {
		var valeur = $(this).slider('getValue');
		$('.var1donnee').html(valeur);
		var arrondie = Math.round((valeur/0.1)/70);
		$('.var2donnee').html(arrondie);
		slider2.slider('setValue', arrondie);
	});
	
	slider2.on('change', function() {
		var valeur = $(this).slider('getValue');
		$('.var2donnee').html(valeur);
		var arrondie = Math.round((valeur*70)*0.1);
		$('.var1donnee').html(arrondie);
		slider1.slider('setValue', arrondie);
	});
	
	slider3.on('change', function() {
		var valeur = $(this).slider('getValue');
		$('.var3donnee').html(valeur);
		var arrondie = Math.round(valeur*0.2);
		$('.var4donnee').html(arrondie);
		slider4.slider('setValue', arrondie);
	});
	
	slider4.on('change', function() {
		var valeur = $(this).slider('getValue');
		$('.var4donnee').html(valeur);
		var arrondie = Math.round(valeur/0.2);
		$('.var3donnee').html(arrondie);
		slider3.slider('setValue', arrondie);
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
		selector.css('background-color', '#0065CB');
		selector.css('color', '#fff');
		selector.siblings().css('background-color', '#fff');
		selector.siblings().css('color', '#0065CB');
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
		var valeur = selector.parents('.slideOptions').children().children('.col-lg-3').children('span');
		valeur.html(nouvelleValeur);

		//Changement auto des autres valeurs
		if(input.prop('id') == 'variable1') {
			var arrondie = Math.round((nouvelleValeur/0.1)/70);
			$('.var2donnee').html(arrondie);
			slider2.slider('setValue', arrondie);
		} else if(input.prop('id') == 'variable2') {
			var arrondie = Math.round((nouvelleValeur*70)*0.1);
			$('.var1donnee').html(arrondie);
			slider1.slider('setValue', arrondie);
		} else if(input.prop('id') == 'variable3') {
			var arrondie = Math.round(nouvelleValeur*0.2);
			$('.var4donnee').html(arrondie);
			slider4.slider('setValue', arrondie);
		} else if(input.prop('id') == 'variable4') {
			var arrondie = Math.round(nouvelleValeur/0.2);
			$('.var3donnee').html(arrondie);
			slider3.slider('setValue', arrondie);
		} 
	}