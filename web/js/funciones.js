function municipios(estado) {
	bootbox.dialog({
		size:'small',
		message: "<p><img src='/img/loading2.gif' width='50' height='50'>Espere un momento...</p>",
	});
	if(estado !='') {
		$.post('/estados', {_csrfToken, datos:{estado:estado} })
		.done(function(data) {
			$("select#municipio").html(data);
		})
		.fail(function(f){
			console.log(f.response.text);
		});

	}
	else {
		bootbox.alert({
			size: 'small',
			message: "se necesita seleccionar un estado",
		});
	}

}