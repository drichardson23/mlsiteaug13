<?php 

  class Policy extends DataObject { 

    static $singular_name = 'Policy';
    static $plural_name = 'Policies';

    public static $db = array(
      'Name'=>'Varchar',  
      'UrlFragment'=>'Varchar',
      'Summary'=>'Text',
      'Details'=>'HTMLText',

    );
   
    public static $summary_fields = array( 
       'Name' => 'Name'
    );

    public static $belongs_many_many=array(
        'PolicyPages'=>'PolicyPage'
    );

    //Fields for the DOM Popup
    public function getCMSFields() {
      $fields = parent::getCMSFields();

      $fields->addFieldToTab("Root.Main", new TextField('Name') );
      $fields->addFieldToTab("Root.Main", $frag = new TextField('UrlFragment', 'URL Fragment' ) );
        $frag->setRightTitle( 'The url fragment is used to set the Policy section ID on the pocicies page so "/stoke" can redirect  to "#stoke" ');

      $fields->addFieldToTab("Root.Main", $sum = new TextareaField('Summary') );
        $sum->setRightTitle('A short description of the policy for the homepage');
      $fields->addFieldToTab("Root.Main", new HTMLEditorField('Details') );

      return $fields;
    }

    public function cssID(){
      return preg_replace('/\W+/', '-', $this->UrlFragment );
    }


 }

?>