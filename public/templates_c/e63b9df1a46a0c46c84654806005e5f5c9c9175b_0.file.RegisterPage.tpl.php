<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-28 18:14:51
  from 'C:\xampp\htdocs\serenity\app\views\RegisterPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f720bfbe1ce68_62625017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e63b9df1a46a0c46c84654806005e5f5c9c9175b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serenity\\app\\views\\RegisterPage.tpl',
      1 => 1601309689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f720bfbe1ce68_62625017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17867183015f720bfbe0dc64_35503910', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13797766655f720bfbe11ba8_91508057', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_17867183015f720bfbe0dc64_35503910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_17867183015f720bfbe0dc64_35503910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | register <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_13797766655f720bfbe11ba8_91508057 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13797766655f720bfbe11ba8_91508057',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <br/></br>
    <h1> Create an serenity account </h1>
    <form action="register" method="post">
  <div class="form-group">
    <label for="id_login">Your Login</label>
    <input type="login" class="form-control" id="id_login" name="login" value ="<?php echo $_smarty_tpl->tpl_vars['reg']->value->login;?>
" aria-describedby="loginHelp" placeholder="Enter Login">
    <small id="loginhelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="id_password" value="<?php echo $_smarty_tpl->tpl_vars['reg']->value->password;?>
" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
}
}
/* {/block 'content'} */
}
