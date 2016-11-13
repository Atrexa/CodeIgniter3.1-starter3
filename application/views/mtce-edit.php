<h2>Menu Maintenance - {action}</h2>
    {error_messages}
<form action="/maintenance/save" method="post" enctype="multipart/form-data">
    {fid}
    {fname}
    {fdescription}
    {fprice}
    {fpicture}
    <div class="form-group">        
        <label for="replacement">Replacement picture</label>        
        <input type="file" id="replacement" name="replacement"/> 
    </div>
    {fcategory}
    {zsubmit} <a class="btn btn-default" role="button" href="/maintenance/cancel">Cancel</a>
    <a class="btn btn-default" role="button" href="/maintenance/delete">Delete</a>
    <a class="btn btn-default" role="button" href="/maintenance/add">Add a new menu item</a>   
</form>