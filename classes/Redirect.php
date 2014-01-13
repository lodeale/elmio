<?php  
class Redirect
{
    public static function ir($url){
        header("Location: {$url}");
    }

    public static function sec($sec){
        header("Location: ".URL_BASE.$sec);
    }
}
