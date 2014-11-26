
{include file="header.tpl" title=foo}
        
<!-- form dani -->
    <div class="container">        

        <div class="row">
            <div class="box">
                <!-- <div class="col-lg-3 "></div>
                .col-md-3 .col-md-offset-3 -->
                <div class="col-lg-6 col-lg-offset-3 ">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Agregar Jugador {$nac}</strong></h2>

                    <form role="form" action="index.php?action=agregarJugadorForm" method="POST" accept-charset="UTF-8">
                        <div class="row">
                            
                           <!--  <div class="form-group col-lg-12">
                                <label> Id distribuidor: </label>
                                <input name="distribuidor" type="number" class="form-control" >
                            </div> -->
                            <div class="form-group col-lg-12">
                                <label>Nombre: </label>
                                <input name="nombre" type="text" class="form-control" >
                            </div>
                            <!-- <div class="form-group col-lg-12">
                                <label>Tipo jugador: </label>
                                <input name="tipo_jugador" type="text" class="form-control" >
                            </div> -->
                            <div class="form-group col-lg-12">
                                <label>Nacionalidad: </label>
                                <input name="nacionalidad" type="text" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Fecha de nacimiento: </label>
                                <input name="fecha_nacimiento" type="date" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Altura: </label>
                                <input name="altura" type="number" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Peso: </label>
                                <input name="peso" type="number" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Agarre: </label>
                                <input name="agarre" type="text" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Equipamiento: </label>
                                <input name="equipamiento" type="text" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ranking: </label>
                                <input name="ranking" type="number" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Inicios: </label>
                                <input name="inicios" type="number" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ruta_img_chica: </label>
                                <input name="ruta_chica" type="text" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ruta_img_grande: </label>
                                <input name="ruta_grande" type="text" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ruta video 1: </label>
                                <input name="ruta_video_1" type="text" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ruta video 2: </label>
                                <input name="ruta_video_2" type="text" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ruta video 3: </label>
                                <input name="ruta_video_3" type="text" class="form-control" >
                            </div>
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
            
        <!-- <div class="table-responsive">
         <table class="table table-bordered table-hover">
            
                        <thead>
                            <tr class="danger">
                                <th>{$distribuidor}</th>
                                <th>Esponja</th>
                                <th>Dureza</th>
                                <th>Tipo</th>
                                <th>Velocidad</th>
                                <th>Efecto</th>
                            </tr>
                        </thead>
                {foreach key=indice item=arr_caract from=$arr_indices}
                        <tbody>
                            <tr>
                                <td>{$arr_caract.nombre}</td>
                                <td>{$arr_caract.esponja}</td>
                                <td>{$arr_caract.dureza}</td>
                                <td>{$arr_caract.tipo_juego}</td>
                                <td>{$arr_caract.velocidad}</td>
                                <td>{$arr_caract.efecto}</td>
                            </tr>
                        </tbody>

                    {/foreach}   
            
            </table>
            <div class="table-responsive">
            
                            
        <p>Fecha: Octubre 2014</p>                 
       
        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar Material</button> -->
                        
  

{include file="footer.tpl"}