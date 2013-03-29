<?php
namespace Lang;

class lang implements languages
{
    protected $lang_name = 'Português - Brasil';

    public static function _t($name, $lang = 'pt')
    {
        $name = trim(strtolower($name));
        $lang = trim(strtolower($lang));

        require_once( $lang . '/translate.php');
        return $array_lang[$lang][$name];
    }
}