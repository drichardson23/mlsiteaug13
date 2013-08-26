<h1>$title</h1>

<% loop $Policies %> 
<div class="policypage-policy clearfix" id="$cssID">
  <div class="row">
    <div class="span8 offset2">
     <h2>$Name</h2>
     $Details
    </div>
  </div>
</div>
<% end_loop %>
