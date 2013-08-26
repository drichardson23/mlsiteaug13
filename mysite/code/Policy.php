<?php 

  class Policy extends DataObject { 
    static $default_sort = 'SortOrder';

    static $singular_name = 'Policy';
    static $plural_name = 'Policies';

    public static $db = array(
      'Name'=>'Varchar',  
      'Details'=>'HTMLText',
    );
   
    public static $summary_fields = array( 
       'Name' => 'Name'
    );

  }

?>