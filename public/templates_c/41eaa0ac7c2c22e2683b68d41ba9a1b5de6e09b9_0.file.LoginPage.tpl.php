<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-28 17:49:00
  from 'C:\xampp\htdocs\serenity\app\views\LoginPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7205ec33d203_77374923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41eaa0ac7c2c22e2683b68d41ba9a1b5de6e09b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serenity\\app\\views\\LoginPage.tpl',
      1 => 1601308135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7205ec33d203_77374923 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7953830215f7205ec32da46_51951084', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16064545775f7205ec330dc9_79243999', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_7953830215f7205ec32da46_51951084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_7953830215f7205ec32da46_51951084',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | login <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_16064545775f7205ec330dc9_79243999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16064545775f7205ec330dc9_79243999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <br/></br>
    <form action="login" method="post">
  <div class="form-group">
    <label for="id_login">Your Login</label>
    <input type="login" class="form-control" id="id_login" name="login" value ="<?php echo $_smarty_tpl->tpl_vars['log']->value->login;?>
" aria-describedby="loginHelp" placeholder="Enter Login">
    <small id="loginhelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="id_password" value="<?php echo $_smarty_tpl->tpl_vars['log']->value->password;?>
" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
}
}
/* {/block 'content'} */
}
