
    
   
   
{include file="header.tpl" title=foo}

    <section id="material">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                                
                    <h2>Jugadores {$nac}</h2>

                    <p class="item-intro text-muted">Informacion general </p> 
                    <!-- <div class="btn-group btn-group-lg"> -->
                    <form name = "modificar" action="index.php?action=agregarMaterial" method="POST">
                        <input name = "id_mat" type = "hidden" value = "{$id_mat}&amp;{$arr_caract.id_madera}">
                        
                        <button type = "submit" class="btn btn-default">Agregar</button>
                    </form> 
                    <!-- {foreach key=id_madera item=jugador from=$jugadores}  
                    <h2>{$jugador['nacionalidad']}</h2>
                    {/foreach} -->
                    <!-- </div> -->

                    <div class="table-responsive">
                                 <table class="table table-bordered table-hover">
                                    
                                                <thead>
                                                    <tr class="warning">
                                                        <th>Nombre</th>
                                                        <th>Id jugador</th>
                                                        <th>Tipo jugador</th>
                                                        <th>Nacionalidad</th>
                                                        <th>Fecha nacimiento</th>
                                                        <th>Altura</th>
                                                        <th>Peso</th>
                                                        <th>Agarre</th>
                                                        <th>Equipamiento</th>
                                                        <th>Ranking</th>
                                                        <th>Inicios</th>
                                                        <th>Ruta_c</th>
                                                        <th>Ruta_g</th>
                                                        <th>Editar</th>
                                                        <th>Eliminar</th>
                                                    </tr>
                                                </thead>
                                        {foreach key=id_jugador item=jugador from=$jugadores}
                                                <tbody>
                                                    <tr>
                                                        <td>{$jugador['nombre']}</td>
                                                        <td>{$jugador['id_jugador']}</td>
                                                        <td>{$jugador['tipo_jugador']}</td>
                                                        <td>{$jugador['nacionalidad']}</td>
                                                        <td>{$jugador['fecha_nacimiento']}</td>
                                                        <td>{$jugador['altura']}</td>
                                                        <td>{$jugador['peso']}</td>
                                                        <td>{$jugador['agarre']}</td>
                                                        <td>{$jugador['equipamiento']}</td>
                                                        <td>{$jugador['ranking']}</td>
                                                        <td>{$jugador['inicios']}</td>
                                                        <td>{$jugador['ruta']}</td>
                                                        <td>{$jugador['ruta_grande']}</td>
                                                     
                                                    
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


                                                          
                               
                    
                    </div>
                       <p class="item-intro text-muted">videos </p>
                                        <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                    <tr class="warning">
                                                        <th>Id_jugador</th>
                                                        <th>Ruta</th>
                                                    </tr>
                                                </thead>
                                        {foreach key=indice item=video from=$videos}
                                                <tbody>
                                                    <tr>
                                                        <td>{$video['id_jugador']}</td>
                                                        <td>{$video['ruta']}</td>
                                                    </tr>
                                                </tbody>  

                                        {/foreach} 
                                        </table>
                                    </div>
                                    <p>Fecha: Noviembre 2014</p>
               </div>
            
                
          </div>
    </section>

{include file="footer.tpl"}



    