<?php

class HomePage extends Page {
  static $db = array();

  static $has_one = array();

  public static $has_many = array(
    'Herounit' => 'Herounit'
  );

  public static $many_many = array(
    'Policies' => 'Policy',
  );

  public static $many_many_extraFields=array(
    'Policies'=>array(
        'SortOrder'=>'Int'
    )
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
 
  $conf=GridFieldConfig_RelationEditor::create(10);
  $conf->addComponent(new GridFieldSortableRows('SortOrder'));
  $fields->addFieldToTab('Root.Policies', new GridField('Policies', 'Policies', $this->Policies(), $conf));

  $fields->addFieldToTab("Root.HeroUnit", new GridField("Herounit", "Stuff for homepage", $this->Herounit(), $gridFieldConfig));

  return $fields;
 }


}



class HomePage_Controller extends Page_Controller {
}

?>
