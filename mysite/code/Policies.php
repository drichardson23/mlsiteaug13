<?php 

class Policies extends DataObject
{
 public static $db = array(
  'Title' => 'Varchar(255)',
  'Summary' => 'Text',
 );

 public static $has_one = array(
  'Thumb' => 'Image',
 );

 public static $summary_fields = array(
  'Title' => 'Title',
  'URL' => 'Website URL',
  'Anchor' => 'Anchor Text',
 );

 public function getCMSFields_forPopup() {

  $thumbField = new UploadField('Thumb', 'Screenshot');
  $thumbField->allowedExtensions = array('jpg', 'gif', 'png');

  return new FieldList(
   new TextField('Title', 'Title'),
   new TextareaField('Summary', 'Brief Summary'),
   
   
   $thumbField
  );
 }

}

?>