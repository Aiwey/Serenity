<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-27 18:51:47
  from 'C:\xampp\htdocs\serenity\app\views\adminPanelArtists.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f70c3237ad922_77508698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9532a2184581f2c7f6e789cf53665dc020ccb1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serenity\\app\\views\\adminPanelArtists.tpl',
      1 => 1601225287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f70c3237ad922_77508698 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6695500125f70c323781e49_94136960', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12938036525f70c323787b33_96340668', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_6695500125f70c323781e49_94136960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_6695500125f70c323781e49_94136960',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | admin panel - artists<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_12938036525f70c323787b33_96340668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12938036525f70c323787b33_96340668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <br/><h1> Manage Artists</h1>
    <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 2em; margin-bottom: 2em;">Add New</button>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Nickname</th>
      <th scope="col">Birth</th>
      <th scope="col">Death</th>
      <th scope ="col">Action</th>
    </tr>
  </thead>
  <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artist']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["idArtist"];?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["ArtistFName"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["ArtistSName"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["ArtistNickname"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["ArtistBirth"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["ArtistDeath"];?>
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
