<h1>$title</h1>
$Content
<% loop $Policies %> 
<div class="policypage-policy clearfix $FirstLast" id="$cssID">
  <div class="row">
    <% if $image %>
    <div class="span3">
      $image.CroppedImage(370,370)
    </div>
    <% end_if %>
    <div class="span9<% if not $image %> offset2<% end_if %>">
     <h2>$Name</h2>
     $Details
    </div>
  </div>
</div>
<% end_loop %>
