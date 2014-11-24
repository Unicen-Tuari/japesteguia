
{include file="header.tpl" title=foo}

    <section id="material">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                                
                    <h2>Maderas</h2>

                    <p class="item-intro text-muted">Nombres y caracter&iacute;sticas </p> 
                    <!-- <div class="btn-group btn-group-lg"> -->
                    <form name = "modificar" action="index.php?action=agregarMaterial" method="POST">
                        <input name = "id_mat" type = "hidden" value = "{$id_mat}&amp;{$arr_caract.id_madera}">
                        
                        <button type = "submit" class="btn btn-default">Agregar</button>
                    </form> 
                    
                    <!-- </div> -->

                    <div class="table-responsive">
                                 <table class="table table-bordered table-hover">
                                    {foreach key=distribuidor item=arr_indices from=$materiales}
                                                <thead>
                                                    <tr class="warning">
                                                        <th>{$distribuidor}</th>
                                                        <th>Mango</th>
                                                        <th>Peso(gr)</th>
                                                        <th>Tipo de juego</th>
                                                        <th>Editar</th>
                                                        <th>Eliminar</th>
                                                    </tr>
                                                </thead>
                                        {foreach key=indice item=arr_caract from=$arr_indices}
                                                <tbody>
                                                    <tr>
                                                        <td>{$arr_caract.nombre}</td>
                                                            <td>{$arr_caract.mango}</td>
                                                            <td>{$arr_caract.peso}</td>
                                                            <td>{$arr_caract.tipo_juego}
                                                        </td>
                                                       <!--  asociar el button con el id del material para dsp usarlo para la ABM en la base -->
                                                    
                                                    <td> <form name = "modificar" action="index.php?action=editarMaterial" method="POST">
                                                        <input name = "id_mat" type = "hidden" value = "{$id_mat}&amp;{$arr_caract.id_madera}">
                                                        <button type = "submit">Editar</button>
                                                        </form> 
                                                    </td>
                                                    <td> <form name = "modificar" action="index.php?action=eliminarMaterial" method="POST">
                                                    <input name = "id_mat" type = "hidden" value = "{$id_mat}&amp;{$arr_caract.id_madera}">
                                                    <button type = "submit">Eliminar</button>
                                                    </form> 
                                                    </td>
                                                    </tr>
                                                </tbody>

                                            {/foreach}   
                                    {/foreach}
                                    </table>

                                         <p>Fecha: Noviembre 2014</p>                 
                               
                    
                    </div>
               </div>
            
                
          </div>
    </section>

{include file="footer.tpl"}



    