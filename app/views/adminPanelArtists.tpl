{extends file ="main.tpl"}
{block name=header} serenity. | admin panel - artists{/block}
{block name = content} 
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
            {foreach $artist as $row}
                <tr>
                <td>{$row["idArtist"]}</td> 
                <td>{$row["ArtistFName"]}</td>
                <td>{$row["ArtistSName"]}</td>
                <td>{$row["ArtistNickname"]}</td>
                <td>{$row["ArtistBirth"]}</td>
                <td>{$row["ArtistDeath"]}</td>
                <td> 
                    <button class="btn btn-sm btn-outline-secondary" type="button">edit</button>
                    <button class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;"type="button">delete</button>
                </td>
   
                </tr>            
            {/foreach}            
            </tbody>
</table>
{/block}