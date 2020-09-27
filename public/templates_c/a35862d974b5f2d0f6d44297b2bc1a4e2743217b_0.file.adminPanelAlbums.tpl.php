<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-27 18:51:54
  from 'C:\xampp\htdocs\serenity\app\views\adminPanelAlbums.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f70c32ac44945_91785513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a35862d974b5f2d0f6d44297b2bc1a4e2743217b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serenity\\app\\views\\adminPanelAlbums.tpl',
      1 => 1601225293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f70c32ac44945_91785513 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1090304005f70c32abf4524_36190896', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10438290585f70c32abfa238_90414180', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_1090304005f70c32abf4524_36190896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1090304005f70c32abf4524_36190896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. | admin panel - albums<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_10438290585f70c32abfa238_90414180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10438290585f70c32abfa238_90414180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <br/><h1> Manage Albums</h1>
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
      <th scope ="col">Action</th>
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
