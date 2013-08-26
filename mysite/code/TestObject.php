<?php
/*** TestObject.php ***/
class TestObject extends DataObject {
    public static $db=array(
        'Title'=>'Text'
    );

    public static $belongs_many_many = array(
      //'PolicyPage'=>'PolicyPage'
    );
}
?>