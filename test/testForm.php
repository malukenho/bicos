<?php

class testForm extends PHPUnit_Framework_TestCase
{

	public function testTheMethodAddToAddedTheEntryForTheForm()
	{
		$form = new HTML\Form('post','','','');
		
		$form->addField(array('type' => 'text', 'name' => 'user'));
		$countFields = $form->countFields();
		$this->assertEquals($countFields, '1');

		$countFields = '';
		$form->addField(array('type' => 'text', 'name' => 'user'));
		$countFields = $form->countFields();
		$this->assertEquals($countFields, '2');

	}

}