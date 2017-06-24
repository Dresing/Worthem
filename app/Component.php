<?php 

namespace Worthem;
use Exception;
use Worthem\App;

class Component
{
    public static function make($name = '')
    {
        return require(App::get('componentsDir') . $name . App::get('viewExtention'));
    }

}
?>