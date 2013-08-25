
      <!-- Example row of columns -->
  
      <div class="row">
        
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
     

