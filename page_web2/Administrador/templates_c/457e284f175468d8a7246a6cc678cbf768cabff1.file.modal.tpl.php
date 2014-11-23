<?php /* Smarty version Smarty-3.1.14, created on 2014-11-21 23:26:30
         compiled from ".\templates\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6691546fbc166c3118-59720968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '457e284f175468d8a7246a6cc678cbf768cabff1' => 
    array (
      0 => '.\\templates\\modal.tpl',
      1 => 1413951798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6691546fbc166c3118-59720968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ipj' => 0,
    'img' => 0,
    'videos' => 0,
    'video' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546fbc1686da22_37893585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546fbc1686da22_37893585')) {function content_546fbc1686da22_37893585($_smarty_tpl) {?>
    
   
    <h2><?php echo utf8_encode($_smarty_tpl->tpl_vars['ipj']->value[0]['nombre']);?>
</h2>
    <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['img']->value[0]['ruta_grande'];?>
" alt="">
    <div id=portfolio_j>
        <p><strong>Nacionalidad:  </strong><?php echo utf8_encode($_smarty_tpl->tpl_vars['ipj']->value[0]['nacionalidad']);?>
 </p>
        <p><strong>Fecha de nacimiento:  </strong><?php echo $_smarty_tpl->tpl_vars['ipj']->value[0]['fecha_nacimiento'];?>
 </p>
        <p><strong>Altura(cm):  </strong><?php echo $_smarty_tpl->tpl_vars['ipj']->value[0]['altura'];?>
 </p>
        <p><strong>Peso(kg):  </strong><?php echo $_smarty_tpl->tpl_vars['ipj']->value[0]['peso'];?>
 </p>
        <p><strong>Agarre:  </strong><?php echo utf8_encode($_smarty_tpl->tpl_vars['ipj']->value[0]['agarre']);?>
 </p>
        <p><strong>Equipamiento:  </strong><?php echo utf8_encode($_smarty_tpl->tpl_vars['ipj']->value[0]['equipamiento']);?>
 </p>
        <p><strong>Actual r&aacutenking:  </strong><?php echo $_smarty_tpl->tpl_vars['ipj']->value[0]['ranking'];?>
 </p>
        <p><strong>Profesional desde:  </strong><?php echo $_smarty_tpl->tpl_vars['ipj']->value[0]['inicios'];?>
 </p>
        <p class="item-intro text-muted">Descripcion</p>
     </div>
    <h3>Videos</h3>
    <div id="videos_j">
      <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value){
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['indice']->value = $_smarty_tpl->tpl_vars['video']->key;
?>
            
            <video width="330" height="250" controls>
                <source src="<?php echo $_smarty_tpl->tpl_vars['video']->value['ruta'];?>
"> 
            </video>

      <?php } ?>
    </div>
    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar Jugador</button>

  

    <?php }} ?>