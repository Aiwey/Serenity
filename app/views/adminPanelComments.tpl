{extends file ="main.tpl"}
{block name=header} serenity. | admin panel - comments{/block}
{block name = content} 
    <br/><h1> Manage Comments</h1>
    <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 2em; margin-bottom: 2em;">Add New</button>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Author</th>
      <th scope="col">Album</th>
      <th scope="col">Content</th>
      <th scope ="col">Action</th>
    </tr>
  </thead>
  <tbody>
            {foreach $comment as $row}
                <tr>
                <td>{$row["idComment"]}</td> 
                <td>{$row["User_idUser"]}</td>
                <td>{$row["Album_idAlbum"]}</td>
                <td>{$row["CommentContent"]}</td>
                <td> 
                    <button class="btn btn-sm btn-outline-secondary" type="button">edit</button>
                    <button class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;"type="button">delete</button>
                </td>
   
                </tr>            
            {/foreach}            
            </tbody>
</table>
{/block}
