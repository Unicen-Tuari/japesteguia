<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 00:14:08
         compiled from ".\templates\form_jugador_vacio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140445474cc405c3272-94991678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45751f9810d49f217e1ad3037c20d356f7f412d7' => 
    array (
      0 => '.\\templates\\form_jugador_vacio.tpl',
      1 => 1416957128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140445474cc405c3272-94991678',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5474cc40824903_76478702',
  'variables' => 
  array (
    'nac' => 0,
    'distribuidor' => 0,
    'arr_indices' => 0,
    'arr_caract' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5474cc40824903_76478702')) {function content_5474cc40824903_76478702($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

        
<!-- form dani -->
    <div class="container">        

        <div class="row">
            <div class="box">
                <!-- <div class="col-lg-3 "></div>
                .col-md-3 .col-md-offset-3 -->
                <div class="col-lg-6 col-lg-offset-3 ">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Agregar Jugador</strong></h2>

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
                                 <input name = "nac" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['nac']->value;?>
">
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
                                <th><?php echo $_smarty_tpl->tpl_vars['distribuidor']->value;?>
</th>
                                <th>Esponja</th>
                                <th>Dureza</th>
                                <th>Tipo</th>
                                <th>Velocidad</th>
                                <th>Efecto</th>
                            </tr>
                        </thead>
                <?php  $_smarty_tpl->tpl_vars['arr_caract'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr_caract']->_loop = false;
 $_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_indices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr_caract']->key => $_smarty_tpl->tpl_vars['arr_caract']->value){
$_smarty_tpl->tpl_vars['arr_caract']->_loop = true;
 $_smarty_tpl->tpl_vars['indice']->value = $_smarty_tpl->tpl_vars['arr_caract']->key;
?>
                        <tbody>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['arr_caract']->value['nombre'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['arr_caract']->value['esponja'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['arr_caract']->value['dureza'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['arr_caract']->value['tipo_juego'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['arr_caract']->value['velocidad'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['arr_caract']->value['efecto'];?>
</td>
                            </tr>
                        </tbody>

                    <?php } ?>   
            
            </table>
            <div class="table-responsive">
            
                            
        <p>Fecha: Octubre 2014</p>                 
       
        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar Material</button> -->
                        
  

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>