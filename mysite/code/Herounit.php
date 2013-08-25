<?php 

  class Herounit extends DataObject { 
  
  public static $db = array(
    'Name'=>'Varchar',  
    'Blurb'=>'Text',

  );
 
 
  public static $has_one = array(
    'Image' => 'Image',
    'Page' => 'Page'
  );  
 
   // Summary fields 
   public static $summary_fields = array( 
       'Name' => 'Name'
   );


public function getCMSFields_forPopup() {

  $thumbField = new UploadField('Image', 'Image');
  $thumbField->allowedExtensions = array('jpg', 'gif', 'png');

  return new FieldList(
   new TextField('Name', 'Name'),
   new TextareaField('Blurb', 'Blurb'),
   $thumbField
  );
 }


}


?>