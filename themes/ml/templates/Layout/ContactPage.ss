<div class="row">
    <% if $Contactimage %>
    <div class="span4">
        $Contactimage.CroppedImage(370,370)
    </div>
    <% end_if %>

    <div class="span8<% if not $Contactimage %> offset2<% end_if %>">
    <h1>$title</h1>
    $Content
    $Form
    </div>
</div>
