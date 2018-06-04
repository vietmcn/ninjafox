<?php 
namespace App\Render;

class Render
{
    protected $att = NULL;

    public static function render( $att )
    {
        echo $att;
    }
}