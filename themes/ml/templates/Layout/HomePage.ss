
      <!-- Example row of columns -->
  
      <div class="row">
        
        <div class="span6">
         $Content  
        </div>

        <div class="span6 ">
          <ul class="homepage-policies">
            <% loop $Policy %> 
            <li class="homepage-policy">
            <h3 class="homepage-policy-title">$Name</h3>
            <div class="homepage-policy-details">
             $Details
            </div>
            </li>
            <% end_loop %>       
          </ul>
        </div>
	
      </div>
     

