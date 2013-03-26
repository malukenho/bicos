<?php

namespace HTML;
/**
* form
*
* @uses     
*
* @category Category
* @package  Package
* @author   Jefersson Nathan <admin@phpse.net>
* @license  GNU
* @link     
*/
class Form
{
     private $fields = [];
     private $html   = [];

    /**
     * __construct
     * 
     * @param mixed $method Description.
     * @param mixed $url    Description.
     * @param mixed $name   Description.
     * @param mixed $formID Description.
     *
     * @access public
     *
     * @return mixed Value.
     */
	public function __construct($method, $url, $name, $formID){

	}

    /**
     * create
     * 
     *
     * @access public
     *
     * @return \array fields in html format.
     */
	public function create()
	{
		if(count($this->fields) > 0){

               foreach ($this->fields as $key => $value) {
                    $html = '<';
                    foreach ($value as $k => $v) {

                         if ($k == 'model') {
                              $html .= $v. ' ';
                              continue;
                         }

                         $html .= $k. '="'.$v.'" ';
                    }
                    $html .= '/>';
                    $this->html[] = $html;
               }

               return $this->html;
          }
	}


    /**
     * countFields
     * 
     * @access public
     *
     * @return int return the quantity of fileds on form.
     */
     public function countFields()
     {
          return count($this->fields);
     }

    /**
     * addField
     * 
     * @param mixed \array whit data to generate HTML of form.
     *
     * @access public
     *
     * @return mixed Value.
     */
     public function addField(array $inputData)
     {
          $this->fields[] = $inputData;
     }
}