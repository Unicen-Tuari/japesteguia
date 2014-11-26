

        <h2>Gomas</h2>
        <p class="item-intro text-muted">Nombres y caracter&iacute;sticas </p>
<!-- form dani -->
    <div class="container">        

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Modificar Goma</strong></h2>
                    <hr>
                    {foreach key=id_maquina item=maquina from=$desc_goma}    
                    <form role="form" action="index.php?action=modificarMaq" method="POST">
                        <div class="row">
                            
                            <div class="form-group col-lg-12">
                                <label>Nombre de la M&aacute;quina:</label>
                                <input name="nombre" type="text" class="form-control" value = "{$maquina['Nombre']}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Tipo: </label>
                                <input name="tipo" type="text" class="form-control" value = "{$maquina['Tipo']}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Modelo: </label>
                                <input name="modelo" type="number" class="form-control" value = "{$maquina['Modelo']}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Estado Actual: {$maquina['estado']} </label>
                                 <input name="estado" type="text" class="form-control" value = "{utf8_encode($maquina['estado'])}">
                                <!-- <select enabled name="estado"  required >
                                    <option value="NUEVA"> {utf8_encode($maquina['estado'])} </option>
                                    <option value="USADA"> USADA </option>
                                </select><br> -->
                            </div>
                            <div class="form-group col-lg-12">

                                <label>Ruta 1: </label>
                                <input name="ruta" type="text" class="form-control" value = "{$maquina['Ruta']}" rows="6"></input>
                              
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Precio U$S: </label>
                                <input name="precio" type="text" class="form-control" value = "{$maquina['Precio']}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Descripci&oacute;n: </label>
                                <textarea rows="6" cols="60" name="texto" type="text" class="form-control" rows="6">{utf8_encode($maquina['Texto'])}</textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="yaModificado" >                                
                                 <input name = "id_maq" type = "hidden" value = "{$maquina['id_Contenido']}&amp;{$maquina['estado']}">
                                <button type="submit" class="btn btn-default">Enviar</button>
                            </div>
                        </div>
                    </form>
                    {/foreach}
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
                        
  

    