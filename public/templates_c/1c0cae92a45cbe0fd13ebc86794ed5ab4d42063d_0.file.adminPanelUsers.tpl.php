<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-27 12:12:07
  from 'C:\xampp\htdocs\serenity\app\views\adminPanelUsers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f706577453b74_58722216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c0cae92a45cbe0fd13ebc86794ed5ab4d42063d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serenity\\app\\views\\adminPanelUsers.tpl',
      1 => 1601201524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f706577453b74_58722216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3445005555f70657742cd09_69923610', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15245333625f70657742fa77_43665506', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_3445005555f70657742cd09_69923610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_3445005555f70657742cd09_69923610',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | admin panel - users<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_15245333625f70657742fa77_43665506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15245333625f70657742fa77_43665506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <br/><h1> Manage Users </h1> <br/>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Login</th>
      <th scope="col">Password</th>
      <th scope="col">Role</th>
      <th scope="col">Avatar</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["idUser"];?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["UserLogin"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["UserPassword"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["UserRole"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["UserAvatarPath"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["UserDescription"];?>
</td>
                <td> <button class="btn btn-sm btn-outline-secondary" type="button">edit</button>
                <button class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;"type="button">delete</button>
                </td>
   
                </tr>            
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>            
            </tbody>
</table>
<?php
}
}
/* {/block 'content'} */
}
