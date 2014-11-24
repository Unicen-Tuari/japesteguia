
{include file="header.tpl" title=foo}
        
<!-- form dani -->
    <div class="container">        

        <div class="row">
            <div class="box">
                <!-- <div class="col-lg-3 "></div>
                .col-md-3 .col-md-offset-3 -->
                <div class="col-lg-6 col-lg-offset-3 ">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Agregar Madera</strong></h2>
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
                                <label>Mango: </label>
                                <input name="mango" type="number" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Peso: </label>
                                <input name="peso" type="number" class="form-control" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Tipo de juego: </label>
                                <input name="tipo_juego" type="text" class="form-control" >
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
            
                        
  

{include file="footer.tpl"}