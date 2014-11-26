
{include file="header.tpl" title=foo}
        


        
    <!-- ////////////// -->
    <div class="container">        

        <div class="row">
            <div class="box">
                <!-- <div class="col-lg-3 "></div>
                .col-md-3 .col-md-offset-3 -->
                <div class="col-lg-6 col-lg-offset-3 ">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Modificar Jugador {$nac}</strong></h2>
                    <hr>
                    
                    <h2 class="intro-text text-center"><strong>{utf8_encode($ipj[0]['nombre'])}</strong></h2>  

                 <!--    <h2 >{$id_mat}</h2> -->

                    <form role="form" action="index.php?action=actualizarJugador" method="POST">
                        <div class="row">
                            
                            <div class="form-group col-lg-12">
                                <label>Id jugador:</label>
                                <input name="id" type="number" class="form-control" value = "{utf8_encode($ipj[0]['id_jugador'])}" readonly>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Nombre: </label>
                                <input name="nombre" type="text" class="form-control" value = "{utf8_encode($ipj[0]['nombre'])}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Nacionalidad: </label>
                                <input name="nacionalidad" type="text" class="form-control" value = "{utf8_encode($ipj[0]['nacionalidad'])}" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Fecha de nacimiento: </label>
                                <input name="fecha_nacimiento" type="date" class="form-control" value = "{($ipj[0]['fecha_nacimiento'])}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Altura: </label>
                                <input name="altura" type="number" class="form-control" value = "{($ipj[0]['altura'])}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Peso: </label>
                                <input name="peso" type="number" class="form-control" value = "{$ipj[0]['peso']}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Agarre: </label>
                                <input name="agarre" type="text" class="form-control" value = "{utf8_encode($ipj[0]['agarre'])}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Equipamiento: </label>
                                <input name="equipamiento" type="text" class="form-control" value = "{utf8_encode($ipj[0]['equipamiento'])}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ranking: </label>
                                <input name="ranking" type="number" class="form-control" value = "{utf8_encode($ipj[0]['ranking'])}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Inicios: </label>
                                <input name="inicios" type="number" class="form-control" value = "{utf8_encode($ipj[0]['inicios'])}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ruta_img_chica: </label>
                                <input name="ruta_chica" type="text" class="form-control" value = "{$img[0]['ruta']}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ruta_img_grande: </label>
                                <input name="ruta_grande" type="text" class="form-control" value = "{$img_g[0]['ruta_grande']}">
                            </div>
                    <!-- {if $nac eq "Mundial"} -->
                        {foreach key=indice item=video from=$videos}
                            <div class="form-group col-lg-12">
                                <label>Ruta video {$indice}: </label>
                                <input name="ruta_video_{$indice}" type="text" class="form-control" value = "{utf8_encode($video['ruta'])}" >
                                <input name = "id_video_{$indice}" type = "hidden" value = "{utf8_encode($video['id_video'])}">
                            </div>
                        {/foreach}
                    <!-- {/if} -->
                            <div class="form-group col-lg-12">                       
                                 <input name = "nac" type = "hidden" value = "{$nac}">
                                <button type="submit" class="btn btn-default">Agregar</button>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>

    </div>
            
{include file="footer.tpl"}
  

