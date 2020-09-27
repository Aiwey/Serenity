<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-27 21:25:19
  from 'C:\xampp\htdocs\serenity\app\views\browseAlbums.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f70e71fc1cdf9_30905116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7396b98d9270c16bd13093f61205ef1999c335e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serenity\\app\\views\\browseAlbums.tpl',
      1 => 1601234357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f70e71fc1cdf9_30905116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12400284255f70e71fbe5d58_68383275', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20198525155f70e71fbe8d24_37565651', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_12400284255f70e71fbe5d58_68383275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_12400284255f70e71fbe5d58_68383275',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | browse albums<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_20198525155f70e71fbe8d24_37565651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20198525155f70e71fbe8d24_37565651',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <br/><h1> Browse Albums</h1>
    <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 2em; margin-bottom: 2em;">Add New</button>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Album Name</th>
      <th scope="col">Album Genre</th>
      <th scope="col">Album Release Date</th>
      <th scope="col">Label</th>
      <th scope="col">Band</th>
      <th scope="col">Cover</th>
      <th scope="col">Comments</th>
    </tr>
  </thead>
  <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["idAlbum"];?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumName"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumGenre"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumDescription"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumReleaseDate"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["Label_idLabel"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["Genre_idGenre"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumCoverPath"];?>
</td>
                <td> Click to see </td>
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
