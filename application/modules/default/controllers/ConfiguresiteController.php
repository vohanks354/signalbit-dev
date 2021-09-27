<?php
/********************************************************************************* 
 *  This file is part of Camhrms.
 *  Copyright (C) 2015 Camtech Indonesia
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
 *  along with Camhrms.  If not, see <http://www.gnu.org/licenses/>.
 *
 *  Camhrms Support <support@camtech-indonesia.co.id>
 ********************************************************************************/
class Default_ConfiguresiteController extends Zend_Controller_Action
{

	private $options;
	
	/**
	 * Init
	 * 
	 * @see Zend_Controller_Action::init()
	 */
    public function init()
    {
        $this->_options= $this->getInvokeArg('bootstrap')->getOptions();
    }

	public function indexAction()
	{		
		$this->view->msg='this is index';
	}
	
	public function managemenuAction(){
		$this->view->msg='this is manage menu';
	}
	public function sitepreferencesAction()
	{
	}
}