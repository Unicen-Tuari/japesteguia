<?php /* Smarty version Smarty-3.1.14, created on 2014-10-22 04:58:50
         compiled from ".\templates\modal_maderas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3208654471d6a9abf40-29497308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a416bcedc1a8e4ddf01cd8694e566bf59ccae0f1' => 
    array (
      0 => '.\\templates\\modal_maderas.tpl',
      1 => 1413753008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3208654471d6a9abf40-29497308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'materiales' => 0,
    'distribuidor' => 0,
    'arr_indices' => 0,
    'arr_caract' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54471d6ab59b24_67309330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54471d6ab59b24_67309330')) {function content_54471d6ab59b24_67309330($_smarty_tpl) {?>

        <h2>Maderas</h2>
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
                            <tr class="warning">
                                <th><?php echo $_smarty_tpl->tpl_vars['distribuidor']->value;?>
</th>
                                <th>Mango</th>
                                <th>Peso(gr)</th>
                                <th>Tipo de juego</th>
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
                            </tr>
                        </tbody>


                    <?php } ?>   
            <?php } ?>
            </table>
            </div>
            
                            
        <p>Fecha: Octubre 2014</p>                 
       
        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar Material</button>
                        
  

    <?php }} ?>