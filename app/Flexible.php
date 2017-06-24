<?php 

namespace Worthem;


use Exception;
use Worthem\App;

class Flexible
{


    public static function execute($name)
    {
        if( have_rows($name) ):
            while ( have_rows($name) ) : the_row();
                Component::make(get_row_layout());
            endwhile;
        endif;        
        
        echo get_row_layout();
    }
}
?>