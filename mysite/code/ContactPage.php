<?php

class ContactPage extends Page {
  static $db = array();
  static $has_one = array(
	'ContactImage' => 'Image'
  	);

  public static $has_many = array();

public function getCMSFields() {
        $fields = parent::getCMSFields();
         
        $fields->addFieldToTab("Root.Images", new UploadField('ContactImage'));
         
        return $fields;
    }

}



class ContactPage_Controller extends Page_Controller {
}

?>
