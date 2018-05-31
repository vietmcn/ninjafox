<?php 
namespace Temp\Render;

class Ninja_Temp
{
    protected $att = NULL;

    public static function render( $att )
    {
        echo $att;
    }
}