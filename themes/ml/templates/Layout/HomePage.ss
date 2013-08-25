      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <% loop $Herounit.Limit(1) %> 
        $Image
        <% end_loop %>
      </div>


      <!-- Example row of columns -->
  
      <div class="row">

        <div class="span12 intro">
          <% loop $Herounit.Limit(1) %> 
        <h2>$Blurb</h2>
        <% end_loop %>

        </div>
        
        <div class="span8">
         $Content  
        </div>

        <div class="span4 policy">
        <ul>
        <% loop $Policy %> 
        <li><h3>$Name</h3> $Details</li>
        <% end_loop %>       
        </ul>
        </div>
	
      </div>
     

