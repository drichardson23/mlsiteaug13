<?php

class AboutPage extends Page {
  static $db = array();
  static $has_one = array();
  public static $has_many = array();

public function getCMSFields() {
  $fields = parent::getCMSFields();
  return $fields;
 }

}



class AboutPage_Controller extends Page_Controller {
}

?>
