{extends file ="main.tpl"}
{block name=header} serenity. | admin panel - labels{/block}
{block name = content} 
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
            {foreach $label as $row}
                <tr>
                <td>{$row["idLabel"]}</td> 
                <td>{$row["LabelName"]}</td>
                <td>{$row["LabelCountry"]}</td>
                <td>{$row["LabelCity"]}</td>
                <td>{$row["LabelStreet"]}</td>
                <td>{$row["LabelPropertyNumber"]}</td>
                <td> 
                    <button class="btn btn-sm btn-outline-secondary" type="button">edit</button>
                    <button class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;"type="button">delete</button>
                </td>
   
                </tr>            
            {/foreach}            
            </tbody>
</table>
{/block}
