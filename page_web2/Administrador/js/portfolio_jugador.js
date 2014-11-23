function get_portfolio_jugador(id_jugador){
	$.ajax({
		type: "GET",
		url: "index.php?action=mostrarJugador&id_jugador="+id_jugador,
		success: function(data)
			{
				$('#portfolio_modal').html(data);
			}});

}

