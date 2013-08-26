<?php

class PolicyPage extends Page {

  public static $many_many = array(
    'Policies' => 'Policy',
  );

  public static $many_many_extraFields=array(
      'Policies'=>array(
          'SortOrder'=>'Int'
      )
  );


  public function getCMSFields() {
      $fields=parent::getCMSFields();

      $conf=GridFieldConfig_RelationEditor::create(10);
      $conf->addComponent(new GridFieldSortableRows('SortOrder'));

      $fields->addFieldToTab('Root.Policies', new GridField('Policies', 'Policies', $this->Policies(), $conf));

      return $fields;
  }
  
  // redefine policies to sort by the sort field
  public function Policies() {
      return $this->getManyManyComponents('Policies')->sort('SortOrder');
  }




}



class PolicyPage_Controller extends Page_Controller {

  public function cssSafe($string){
    return 'po';
    return preg_replace('/\W+/', '', $string);
  }
  function GetPageId(){
      return $this->ID;
  }
}
?>
