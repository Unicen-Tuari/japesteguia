<?php /* Smarty version Smarty-3.1.14, created on 2014-10-20 00:17:03
         compiled from ".\templates\modal_gomas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28725544422fa7e4885-02498251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aa38adfbfe60fbdb4e83e6e495b6462ee7e2fe0' => 
    array (
      0 => '.\\templates\\modal_gomas.tpl',
      1 => 1413756937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28725544422fa7e4885-02498251',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_544422fa924dd4_20444377',
  'variables' => 
  array (
    'materiales' => 0,
    'distribuidor' => 0,
    'arr_indices' => 0,
    'arr_caract' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544422fa924dd4_20444377')) {function content_544422fa924dd4_20444377($_smarty_tpl) {?>

        <h2>Gomas</h2>
        <p class="item-intro text-muted">Nombres y caracter&iacute;sticas </p>

            
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
            <?php } ?>
            </table>
            <div class="table-responsive">
            
                            
        <p>Fecha: Octubre 2014</p>                 
       
        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar Material</button>
                        
  

    <?php }} ?>