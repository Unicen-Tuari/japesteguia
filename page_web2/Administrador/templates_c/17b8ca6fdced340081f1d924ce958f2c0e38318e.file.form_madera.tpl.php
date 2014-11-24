<?php /* Smarty version Smarty-3.1.14, created on 2014-11-25 00:10:55
         compiled from ".\templates\form_madera.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9818547385e8bf7318-48626674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17b8ca6fdced340081f1d924ce958f2c0e38318e' => 
    array (
      0 => '.\\templates\\form_madera.tpl',
      1 => 1416870623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9818547385e8bf7318-48626674',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547385e8e1a196_15878620',
  'variables' => 
  array (
    'desc_madera' => 0,
    'madera' => 0,
    'id_mat' => 0,
    'distribuidor' => 0,
    'arr_indices' => 0,
    'arr_caract' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547385e8e1a196_15878620')) {function content_547385e8e1a196_15878620($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

        
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

                    <?php  $_smarty_tpl->tpl_vars['madera'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['madera']->_loop = false;
 $_smarty_tpl->tpl_vars['id_madera'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['desc_madera']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['madera']->key => $_smarty_tpl->tpl_vars['madera']->value){
$_smarty_tpl->tpl_vars['madera']->_loop = true;
 $_smarty_tpl->tpl_vars['id_madera']->value = $_smarty_tpl->tpl_vars['madera']->key;
?>  
                    <h2 class="intro-text text-center"><strong><?php echo $_smarty_tpl->tpl_vars['madera']->value['nombre'];?>
</strong></h2>  


                    <form role="form" action="index.php?action=actualizarMaterial" method="POST">
                        <div class="row">
                            
                            <div class="form-group col-lg-12">
                                <label>Id madera:</label>
                                <input name="id" type="number" class="form-control" value = "<?php echo $_smarty_tpl->tpl_vars['madera']->value['id_madera'];?>
" readonly>
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Id distribuidor: </label>
                                <input name="distribuidor" type="number" class="form-control" value = "<?php echo $_smarty_tpl->tpl_vars['madera']->value['id_distribuidor'];?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Nombre: </label>
                                <input name="nombre" type="text" class="form-control" value = "<?php echo $_smarty_tpl->tpl_vars['madera']->value['nombre'];?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Mango: </label>
                                <input name="mango" type="text" class="form-control" value = "<?php echo $_smarty_tpl->tpl_vars['madera']->value['mango'];?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Peso: </label>
                                <input name="peso" type="number" class="form-control" value = "<?php echo $_smarty_tpl->tpl_vars['madera']->value['peso'];?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Tipo de juego: </label>
                                <input name="tipo_juego" type="text" class="form-control" value = "<?php echo $_smarty_tpl->tpl_vars['madera']->value['tipo_juego'];?>
">
                            </div>
                            
                           
                            <div class="form-group col-lg-12">
                                                                
                                 <input name = "id_mat" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['id_mat']->value;?>
">
                                <button type="submit" class="btn btn-default">Modificar</button>
                            </div>
                        </div>
                    </form>
                    <?php } ?>
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