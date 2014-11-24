<?php /* Smarty version Smarty-3.1.14, created on 2014-11-25 00:00:25
         compiled from ".\templates\modal_maderas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26776546f4abbb2ce29-09941666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a416bcedc1a8e4ddf01cd8694e566bf59ccae0f1' => 
    array (
      0 => '.\\templates\\modal_maderas.tpl',
      1 => 1416870022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26776546f4abbb2ce29-09941666',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546f4abbcbb588_70177057',
  'variables' => 
  array (
    'id_mat' => 0,
    'arr_caract' => 0,
    'materiales' => 0,
    'distribuidor' => 0,
    'arr_indices' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546f4abbcbb588_70177057')) {function content_546f4abbcbb588_70177057($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


    <section id="material">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                                
                    <h2>Maderas</h2>

                    <p class="item-intro text-muted">Nombres y caracter&iacute;sticas </p> 
                    <!-- <div class="btn-group btn-group-lg"> -->
                    <form name = "modificar" action="index.php?action=agregarMaterial" method="POST">
                        <input name = "id_mat" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['id_mat']->value;?>
&amp;<?php echo $_smarty_tpl->tpl_vars['arr_caract']->value['id_madera'];?>
">
                        
                        <button type = "submit" class="btn btn-default">Agregar</button>
                    </form> 
                    
                    <!-- </div> -->

                    <div class="table-responsive">
                                 <table class="table table-bordered table-hover">
                                    <?php  $_smarty_tpl->tpl_vars['arr_indices'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr_indices']->_loop = false;
 $_smarty_tpl->tpl_vars['distribuidor'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['materiales']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr_indices']->key => $_smarty_tpl->tpl_vars['arr_indices']->value){
$_smarty_tpl->tpl_vars['arr_indices']->_loop = true;
 $_smarty_tpl->tpl_vars['distribuidor']->value = $_smarty_tpl->tpl_vars['arr_indices']->key;
?>
                                                <thead>
                                                    <tr class="warning">
                                                        <th><?php echo $_smarty_tpl->tpl_vars['distribuidor']->value;?>
</th>
                                                        <th>Mango</th>
                                                        <th>Peso(gr)</th>
                                                        <th>Tipo de juego</th>
                                                        <th>Editar</th>
                                                        <th>Eliminar</th>
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
                                                            <td><?php echo $_smarty_tpl->tpl_vars['arr_caract']->value['mango'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['arr_caract']->value['peso'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['arr_caract']->value['tipo_juego'];?>

                                                        </td>
                                                       <!--  asociar el button con el id del material para dsp usarlo para la ABM en la base -->
                                                    
                                                    <td> <form name = "modificar" action="index.php?action=editarMaterial" method="POST">
                                                        <input name = "id_mat" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['id_mat']->value;?>
&amp;<?php echo $_smarty_tpl->tpl_vars['arr_caract']->value['id_madera'];?>
">
                                                        <button type = "submit">Editar</button>
                                                        </form> 
                                                    </td>
                                                    <td> <form name = "modificar" action="index.php?action=eliminarMaterial" method="POST">
                                                    <input name = "id_mat" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['id_mat']->value;?>
&amp;<?php echo $_smarty_tpl->tpl_vars['arr_caract']->value['id_madera'];?>
">
                                                    <button type = "submit">Eliminar</button>
                                                    </form> 
                                                    </td>
                                                    </tr>
                                                </tbody>

                                            <?php } ?>   
                                    <?php } ?>
                                    </table>

                                         <p>Fecha: Noviembre 2014</p>                 
                               
                    
                    </div>
               </div>
            
                
          </div>
    </section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




    <?php }} ?>