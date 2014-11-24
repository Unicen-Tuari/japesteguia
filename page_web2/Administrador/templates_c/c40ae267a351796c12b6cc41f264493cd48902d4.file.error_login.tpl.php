<?php /* Smarty version Smarty-3.1.14, created on 2014-11-24 18:35:04
         compiled from ".\templates\error_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4049546f60552c9e86-67156383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c40ae267a351796c12b6cc41f264493cd48902d4' => 
    array (
      0 => '.\\templates\\error_login.tpl',
      1 => 1416850312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4049546f60552c9e86-67156383',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546f605540a3d7_64098086',
  'variables' => 
  array (
    'error_login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546f605540a3d7_64098086')) {function content_546f605540a3d7_64098086($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>




 <header>
        <div class="container">
        	
             <h3><?php echo $_smarty_tpl->tpl_vars['error_login']->value;?>
</h3>
     	   <div class="intro-text"> 
                <a href="index.php?action=index#contact" class="page-scroll btn btn-xl">Volver</a>
        </div>
             
        </div>
</header>



<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>