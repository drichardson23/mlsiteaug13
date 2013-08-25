<?php

class CustomSiteConfig extends DataExtension {   
    static $db = array();

    static $has_one = array(
        'CampaignImage' => 'image'
    );
 
    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldToTab("Root.Main", $imageField = new UploadField("CampaignImage", "Main Campaign Image"));
        $imageField->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));
        $imageField->setConfig('allowedMaxFileNumber', 1);
    }
}