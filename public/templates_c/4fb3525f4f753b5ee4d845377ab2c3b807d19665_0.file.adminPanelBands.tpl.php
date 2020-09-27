<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-27 18:56:20
  from 'C:\xampp\htdocs\serenity\app\views\adminPanelBands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f70c434750bf8_22336721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fb3525f4f753b5ee4d845377ab2c3b807d19665' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serenity\\app\\views\\adminPanelBands.tpl',
      1 => 1601225751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f70c434750bf8_22336721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16011553965f70c43472e114_74473107', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8104392085f70c434733ad6_52193260', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_16011553965f70c43472e114_74473107 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_16011553965f70c43472e114_74473107',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | admin panel - bands<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_8104392085f70c434733ad6_52193260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8104392085f70c434733ad6_52193260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <br/><h1> Manage Bands</h1>
    <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 2em; margin-bottom: 2em;">Add New</button>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">BandName</th>
      <th scope="col">DateCreated</th>
      <th scope="col">DateEnded</th>
      <th scope ="col">Action</th>
    </tr>
  </thead>
  <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['band']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["idBand"];?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["BandName"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["DateCreated"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["DateEnded"];?>
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
