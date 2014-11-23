{include file="header.tpl" title=foo}



    <!-- ///////// -->

    <section id="material">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    
                     <h2>Gomas</h2>
        <p class="item-intro text-muted">Nombres y caracter&iacute;sticas </p>

            
        <div class="table-responsive">
         <table class="table table-bordered table-hover">
            {foreach key=distribuidor item=arr_indices from=$materiales}
                        <thead>
                            <tr class="danger">
                                <th>{$distribuidor}</th>
                                <th>Esponja</th>
                                <th>Dureza</th>
                                <th>Tipo</th>
                                <th>Velocidad</th>
                                <th>Efecto</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                {foreach key=indice item=arr_caract from=$arr_indices}
                        <tbody>
                            <tr>
                                <!-- <td>{$id_mat}</td> -->
                                <td>{$arr_caract.nombre}</td>
                                <td>{$arr_caract.esponja}</td>
                                <td>{$arr_caract.dureza}</td>
                                <td>{$arr_caract.tipo_juego}</td>
                                <td>{$arr_caract.velocidad}</td>
                                <td>{$arr_caract.efecto}</td>
                               <!--  asociar el button con el id del material para dsp usarlo para la ABM en la base -->
                                <td> <form name = "modificar" action="index.php?action=editarMaterial" method="POST">
                                <input name = "id_mat" type = "hidden" value = "{$id_mat}&amp;{$arr_caract.id_goma}">
                                <button type = "submit">Editar</button>
                                </form> </td>
                                <td><button>Eliminar</button></td>

                                
               <!--  <div class="col-lg-6 text-center">
                    <form name = "eliminar">
                        <input type = "hidden" value = "{$maquina['Precio']}">
                        <button type = "submit">Eliminar</button>
                    </form>
                </div> -->

                            </tr>
                        </tbody>

                    {/foreach}   
            {/foreach}
            </table>
            <div class="table-responsive">
            
                    <form role="form" action="index.php?action=insertarMaq" method="POST">
                        <div class="row">
                            
                            <div class="form-group col-lg-12">
                                <label>Nombre de la M&aacute;quina:</label>
                                <input name="nombre" type="text" class="form-control" value = "{$maquina['Nombre']}">
                            </div>        

        <p>Fecha: Octubre 2014</p>                 
       
        
                </div>
            </div>
            
                
        </div>
    </section>
    <!-- ///////// -->
        
            
  

        
                        
  

{include file="footer.tpl"}