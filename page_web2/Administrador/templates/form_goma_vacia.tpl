
{include file="header.tpl" title=foo}
        
<!-- form dani -->
    <div class="container">        

        <div class="row">
            <div class="box">
                <!-- <div class="col-lg-3 "></div>
                .col-md-3 .col-md-offset-3 -->
                <div class="col-lg-6 col-lg-offset-3 ">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Agregar Goma</strong></h2>
                    <hr>  
                   <!--  <h2 class="intro-text text-center"><strong>{$goma.nombre}</strong></h2>  --> 

                 <!--    <h2 >{$id_mat}</h2> -->

                    <form role="form" action="index.php?action=agregarMaterialForm" method="POST">
                        <div class="row">
                            
                            <div class="form-group col-lg-12">
                                <label> Id distribuidor: </label>
                                <input name="distribuidor" type="number" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Nombre: </label>
                                <input name="nombre" type="text" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Esponja: </label>
                                <input name="esponja" type="number" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Dureza: </label>
                                <input name="dureza" type="number" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Tipo de juego: </label>
                                <input name="tipo_juego" type="text" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Velocidad: </label>
                                <input name="velocidad" type="number" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Efecto: </label>
                                <input name="efecto" type="number" class="form-control" >
                            </div>
                           
                            <div class="form-group col-lg-12">
                                                                
                                 <input name = "id_mat" type = "hidden" value = "{$id_mat}">
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