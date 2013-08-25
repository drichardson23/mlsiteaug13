<?php 

  class Policy extends DataObject { 
  
  public static $db = array(
    'Name'=>'Varchar',  
  'Details'=>'HTMLText'
  );
 
 
  public static $has_one = array(
    'Page' => 'Page'
  );  
 
   // Summary fields 
   public static $summary_fields = array( 
       'Name' => 'Name'
   );



}


?>