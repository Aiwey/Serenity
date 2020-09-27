{extends file ="main.tpl"}
{block name=header} serenity. | admin panel - albums{/block}
{block name = content} 
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
            {foreach $album as $row}
                <tr>
                <td>{$row["idAlbum"]}</td> 
                <td>{$row["AlbumName"]}</td>
                <td>{$row["AlbumGenre"]}</td>
                <td>{$row["AlbumDescription"]}</td>
                <td>{$row["AlbumReleaseDate"]}</td>
                <td>{$row["Label_idLabel"]}</td>
                <td>{$row["Genre_idGenre"]}</td>
                <td>{$row["AlbumCoverPath"]}</td>
                <td> 
                    <button class="btn btn-sm btn-outline-secondary" type="button">edit</button>
                    <button class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;"type="button">delete</button>
                </td>
   
                </tr>            
            {/foreach}            
            </tbody>
</table>
{/block}