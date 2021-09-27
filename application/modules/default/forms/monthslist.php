<?php
/********************************************************************************* 
 *  This file is part of Camhrms.
 *  Copyright (C) 2014 Camtech Indonesia
 *   
 *  Camhrms is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  Camhrms is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with Camhrms.
 *
 *  Camhrms Support <support@camtech-indonesia.co.id>
 ********************************************************************************/

class Default_Form_monthslist extends Zend_Form
{
	public function init()
	{
		$this->setMethod('post');
		$this->setAttrib('action',BASE_URL.'monthslist/edit');
		$this->setAttrib('id', 'formid');
		$this->setAttrib('name', 'monthslist');


        $id = new Zend_Form_Element_Hidden('id');
		
			
		$monthname = new Zend_Form_Element_Select('month_id');
        $monthname->setAttrib('class', 'selectoption');
        $monthname->setRegisterInArrayValidator(false);
        $monthname->setRequired(true);
		$monthname->addValidator('NotEmpty', false, array('messages' => 'Please select month name.'));	
			
		$monthcode = new Zend_Form_Element_Text('monthcode');
        $monthcode->setAttrib('maxLength', 20);
        $monthcode->addFilter(new Zend_Filter_StringTrim());
		
		$monthcode->addValidator(new Zend_Validate_Db_NoRecordExists(
                                              array('table'=>'main_monthslist',
                                                        'field'=>'monthcode',
                                                      'exclude'=>'id!="'.Zend_Controller_Front::getInstance()->getRequest()->getParam('id').'" and isactive=1',    
                                                 ) )  
                                    );
        $monthcode->getValidator('Db_NoRecordExists')->setMessage('Month code already exists.'); 	
		
		$description = new Zend_Form_Element_Textarea('description');
        $description->setAttrib('rows', 10);
        $description->setAttrib('cols', 50);
		$description ->setAttrib('maxlength', '200');
		
        $submit = new Zend_Form_Element_Submit('submit');
		 $submit->setAttrib('id', 'submitbutton');
		 $submit->setLabel('Save');

		$url = "'monthslist/saveupdate/format/json'";
		$dialogMsg = "''";
		$toggleDivId = "''";
		$jsFunction = "'redirecttocontroller(\'monthslist\');'";;

		 $this->addElements(array($id,$monthname,$monthcode,$description,$submit));
         $this->setElementDecorators(array('ViewHelper')); 
	}
}