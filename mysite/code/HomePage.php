<?php

class HomePage extends Page {
  static $db = array(
  );

  static $has_one = array(
  );

  public static $has_many = array(
    'Policy' => 'Policy',
    'Herounit' => 'Herounit'
  );

public function getCMSFields() {
 
  $fields = parent::getCMSFields();
 
  $gridFieldConfig = GridFieldConfig::create()->addComponents(
   new GridFieldToolbarHeader(),
   new GridFieldAddNewButton('toolbar-header-right'),
   new GridFieldSortableHeader(),
   new GridFieldDataColumns(),
   new GridFieldPaginator(20),
   new GridFieldEditButton(),
   new GridFieldDeleteAction(),
   new GridFieldDetailForm()
  );
  $gridField = new GridField("Policy", "Some policy points", $this->Policy(), $gridFieldConfig);
  $gridField2 = new GridField("Herounit", "Stuff for homepage", $this->Herounit(), $gridFieldConfig);
 
  $fields->addFieldToTab("Root.Policy", $gridField);
  $fields->addFieldToTab("Root.Herounit", $gridField2);

  return $fields;
 }


}



class HomePage_Controller extends Page_Controller {
}

?>
