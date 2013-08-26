<h1>$title</h1>

 <% loop $Policies %> 
<div class="row" id="$cssID">
    <div class="span8">
     <h2>$Name</h2>
     $Details
    </div>
</div>
<% end_loop %>
