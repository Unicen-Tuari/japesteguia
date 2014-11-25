
{include file="header.tpl" title=foo}

    <section id="material">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                                
                    <h2>Jugadores {$nac}</h2>
                    <!-- <h2>id jugador: {$jugadores[$jugador['id_jugador']]}</h2> -->

                    <p class="item-intro text-muted">Informacion general </p> 
                    <!-- <div class="btn-group btn-group-lg"> -->
                    <form name = "modificar" action="index.php?action=agregarJugador" method="POST">
                        <input name = "nac" type = "hidden" value = "{$nac}">
                        <button type = "submit" class="btn btn-default">Agregar</button>
                    </form> 

                    <div class="table-responsive">
                                 <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr class="warning">
                                                        <th>Id jugador</th>
                                                        <th>Nombre</th>
                                                        <th>Tipo jugador</th>
                                                        <th>Nacionalidad</th>
                                                        <th>Fecha nacimiento</th>
                                                        <th>Altura</th>
                                                        <th>Peso</th>
                                                        <th>Agarre</th>
                                                        <th>Equipamiento</th>
                                                        <th>Ranking</th>
                                                        <th>Inicios</th>
                                                        <th>Editar</th>
                                                        <th>Eliminar</th>
                                                    </tr>
                                                </thead>
                                        {foreach key=id_jugador item=jugador from=$jugadores}
                                                <tbody>
                                                    <tr>
                                                        <td>{$jugador['id_jugador']}</td>
                                                        <td>{utf8_encode($jugador['nombre'])}</td>
                                                        <td>{$jugador['tipo_jugador']}</td>
                                                        <td>{$jugador['nacionalidad']}</td>
                                                        <td>{$jugador['fecha_nacimiento']}</td>
                                                        <td>{$jugador['altura']}</td>
                                                        <td>{$jugador['peso']}</td>
                                                        <td>{utf8_encode($jugador['agarre'])}</td>
                                                        <td>{$jugador['equipamiento']}</td>
                                                        <td>{$jugador['ranking']}</td>
                                                        <td>{$jugador['inicios']}</td>
                                                
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
                       <!-- <p class="item-intro text-muted">Videos </p> -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                                <thead>
                                                        <tr class="warning">
                                                            <th>Id jugador</th>
                                                            <th>Ruta imagen chica</th>
                                                            <th>Ruta imagen grande</th>
                                                        </tr>
                                                    </thead>
                                            {foreach key=id_jugador item=jugador from=$jugadores}
                                                    <tbody>
                                                        <tr>
                                                            <td>{$jugador['id_jugador']}</td>
                                                            <td>{utf8_encode($jugador['ruta'])}</td>
                                                            <td>{utf8_encode($jugador['ruta_grande'])}</td>
                                                        </tr>
                                                    </tbody>           
                                            {/foreach} 
                                        </table>
                                    </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                    <thead>
                                                            <tr class="warning">
                                                                <th>Id jugador</th>
                                                                <th>Id video</th>
                                                                <th>Rutas videos</th>
                                                            </tr>
                                                        </thead>
                                                {foreach key=indice item=arr_videos from=$videos}
                                                    {foreach key=indice2 item=video from=$arr_videos}
                                                        <tbody>
                                                            <tr>
                                                                <td>{$video['id_jugador']}</td>
                                                                <td>{$video['id_video']}
                                                                </td>
                                                                <td>{utf8_encode($video['ruta'])}</td>
                                                            </tr>
                                                        </tbody>  
                                                      {/foreach}          
                                                {/foreach} 
                                            </table>
                                        </div>
                            <p>Fecha: Noviembre 2014</p>
               </div>  
          </div>
    </section>

{include file="footer.tpl"}



    