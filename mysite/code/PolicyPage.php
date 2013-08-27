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
  public static $url_handlers = array(
    '$Policy!' => 'policyRedirector',
  );


  public function policyRedirector($request) {
    $policy = ($request->param('Policy'));
    $this->redirect('policies/'.'#'.$policy);
  }

}
?>
