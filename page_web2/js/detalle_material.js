function get_detalle_material(id_material){
	$.ajax({
		type: "GET",
		url: "index.php?action=listarMateriales&id_mat="+id_material,
		success: function(data)
			{
				$('#material_modal').html(data);
			}
	});
}

