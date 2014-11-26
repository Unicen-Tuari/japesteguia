<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 05:55:08
         compiled from ".\templates\form_jugador_semi_vacio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1684754754172bae057-99268271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3453e80c4465f9082e09692c673c8dbe6256ede6' => 
    array (
      0 => '.\\templates\\form_jugador_semi_vacio.tpl',
      1 => 1416977629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1684754754172bae057-99268271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54754172ec7094_42150994',
  'variables' => 
  array (
    'nac' => 0,
    'ipj' => 0,
    'id_mat' => 0,
    'img' => 0,
    'img_g' => 0,
    'videos' => 0,
    'indice' => 0,
    'video' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54754172ec7094_42150994')) {function content_54754172ec7094_42150994($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

        


        
    <!-- ////////////// -->
    <div class="container">        

        <div class="row">
            <div class="box">
                <!-- <div class="col-lg-3 "></div>
                .col-md-3 .col-md-offset-3 -->
                <div class="col-lg-6 col-lg-offset-3 ">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Modificar Jugador <?php echo $_smarty_tpl->tpl_vars['nac']->value;?>
</strong></h2>
                    <hr>
                    
                    <h2 class="intro-text text-center"><strong><?php echo utf8_encode($_smarty_tpl->tpl_vars['ipj']->value[0]['nombre']);?>
</strong></h2>  

                 <!--    <h2 ><?php echo $_smarty_tpl->tpl_vars['id_mat']->value;?>
</h2> -->

                    <form role="form" action="index.php?action=actualizarJugador" method="POST">
                        <div class="row">
                            
                            <div class="form-group col-lg-12">
                                <label>Id jugador:</label>
                                <input name="id" type="number" class="form-control" value = "<?php echo utf8_encode($_smarty_tpl->tpl_vars['ipj']->value[0]['id_jugador']);?>
" readonly>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Nombre: </label>
                                <input name="nombre" type="text" class="form-control" value = "<?php echo utf8_encode($_smarty_tpl->tpl_vars['ipj']->value[0]['nombre']);?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Nacionalidad: </label>
                                <input name="nacionalidad" type="text" class="form-control" value = "<?php echo utf8_encode($_smarty_tpl->tpl_vars['ipj']->value[0]['nacionalidad']);?>
" >
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Fecha de nacimiento: </label>
                                <input name="fecha_nacimiento" type="date" class="form-control" value = "<?php echo ($_smarty_tpl->tpl_vars['ipj']->value[0]['fecha_nacimiento']);?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Altura: </label>
                                <input name="altura" type="number" class="form-control" value = "<?php echo ($_smarty_tpl->tpl_vars['ipj']->value[0]['altura']);?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Peso: </label>
                                <input name="peso" type="number" class="form-control" value = "<?php echo $_smarty_tpl->tpl_vars['ipj']->value[0]['peso'];?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Agarre: </label>
                                <input name="agarre" type="text" class="form-control" value = "<?php echo utf8_encode($_smarty_tpl->tpl_vars['ipj']->value[0]['agarre']);?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Equipamiento: </label>
                                <input name="equipamiento" type="text" class="form-control" value = "<?php echo utf8_encode($_smarty_tpl->tpl_vars['ipj']->value[0]['equipamiento']);?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ranking: </label>
                                <input name="ranking" type="number" class="form-control" value = "<?php echo utf8_encode($_smarty_tpl->tpl_vars['ipj']->value[0]['ranking']);?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Inicios: </label>
                                <input name="inicios" type="number" class="form-control" value = "<?php echo utf8_encode($_smarty_tpl->tpl_vars['ipj']->value[0]['inicios']);?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ruta_img_chica: </label>
                                <input name="ruta_chica" type="text" class="form-control" value = "<?php echo $_smarty_tpl->tpl_vars['img']->value[0]['ruta'];?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ruta_img_grande: </label>
                                <input name="ruta_grande" type="text" class="form-control" value = "<?php echo $_smarty_tpl->tpl_vars['img_g']->value[0]['ruta_grande'];?>
">
                            </div>
                    <!-- <?php if ($_smarty_tpl->tpl_vars['nac']->value=="Mundial"){?> -->
                        <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value){
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['indice']->value = $_smarty_tpl->tpl_vars['video']->key;
?>
                            <div class="form-group col-lg-12">
                                <label>Ruta video <?php echo $_smarty_tpl->tpl_vars['indice']->value;?>
: </label>
                                <input name="ruta_video_<?php echo $_smarty_tpl->tpl_vars['indice']->value;?>
" type="text" class="form-control" value = "<?php echo utf8_encode($_smarty_tpl->tpl_vars['video']->value['ruta']);?>
" >
                                <input name = "id_video_<?php echo $_smarty_tpl->tpl_vars['indice']->value;?>
" type = "hidden" value = "<?php echo utf8_encode($_smarty_tpl->tpl_vars['video']->value['id_video']);?>
">
                            </div>
                        <?php } ?>
                    <!-- <?php }?> -->
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
            
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  

<?php }} ?>