<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-27 18:53:45
  from 'C:\xampp\htdocs\serenity\app\views\adminPanelLabels.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f70c39956f0b4_11444937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f5cd9a67378218e55f3ba40637712a81d5e721f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serenity\\app\\views\\adminPanelLabels.tpl',
      1 => 1601225268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f70c39956f0b4_11444937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12419471475f70c399529d90_45195779', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5535990855f70c39952f7a0_31067503', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_12419471475f70c399529d90_45195779 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_12419471475f70c399529d90_45195779',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | admin panel - labels<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_5535990855f70c39952f7a0_31067503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5535990855f70c39952f7a0_31067503',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <br/><h1> Manage labels</h1>
    <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 2em; margin-bottom: 2em;">Add New</button>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Label Name</th>
      <th scope="col">Country</th>
      <th scope="col">City</th>
      <th scope="col">Street</th>
      <th scope="col">Property Number</th>
      <th scope ="col">Action</th>
    </tr>
  </thead>
  <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['label']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["idLabel"];?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["LabelName"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["LabelCountry"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["LabelCity"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["LabelStreet"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["LabelPropertyNumber"];?>
</td>
                <td> 
                    <button class="btn btn-sm btn-outline-secondary" type="button">edit</button>
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
