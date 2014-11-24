
{include file="header.tpl" title=foo}
        
<!-- form dani -->
    <div class="container">        

        <div class="row">
            <div class="box">
                <!-- <div class="col-lg-3 "></div>
                .col-md-3 .col-md-offset-3 -->
                <div class="col-lg-6 col-lg-offset-3 ">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Modificar Madera</strong></h2>
                    <hr>

                    {foreach key=id_madera item=madera from=$desc_madera}  
                    <h2 class="intro-text text-center"><strong>{$madera.nombre}</strong></h2>  


                    <form role="form" action="index.php?action=actualizarMaterial" method="POST">
                        <div class="row">
                            
                            <div class="form-group col-lg-12">
                                <label>Id madera:</label>
                                <input name="id" type="number" class="form-control" value = "{$madera.id_madera}" readonly>
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Id distribuidor: </label>
                                <input name="distribuidor" type="number" class="form-control" value = "{$madera.id_distribuidor}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Nombre: </label>
                                <input name="nombre" type="text" class="form-control" value = "{$madera.nombre}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Mango: </label>
                                <input name="mango" type="text" class="form-control" value = "{$madera.mango}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Peso: </label>
                                <input name="peso" type="number" class="form-control" value = "{$madera.peso}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Tipo de juego: </label>
                                <input name="tipo_juego" type="text" class="form-control" value = "{$madera.tipo_juego}">
                            </div>
                            
                           
                            <div class="form-group col-lg-12">
                                                                
                                 <input name = "id_mat" type = "hidden" value = "{$id_mat}">
                                <button type="submit" class="btn btn-default">Modificar</button>
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
                        
  

{include file="footer.tpl"}