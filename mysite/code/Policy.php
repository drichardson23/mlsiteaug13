<?php 
//link existing broken.
  class Policy extends DataObject { 
    //static $default_sort = 'SortBy';

    static $singular_name = 'Policy';
    static $plural_name = 'Policies';

    public static $db = array(
      'Name'=>'Varchar',  
      'Details'=>'HTMLText',

    );
   
    public static $summary_fields = array( 
       'Name' => 'Name'
    );

    public static $belongs_many_many=array(
        'PolicyPages'=>'PolicyPage'
    );

  }

?>