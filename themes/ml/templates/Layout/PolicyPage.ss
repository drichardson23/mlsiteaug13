<h1>$title</h1>
$Content
<% loop $Policies %> 
<div class="policypage-policy clearfix $FirstLast" id="$cssID">
  <div class="row">
    <% if $image %>
    <div class="span1">
      $image.SetWidth(70)
    </div>
    <% end_if %>
    <div class="<% if $image %>span11<% else %> span8 offset2<% end_if %>">
     <h2>$Name</h2>
     $Details
    </div>
  </div>
</div>
<% end_loop %>
