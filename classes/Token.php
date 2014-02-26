<?php 
/**
 * token
 */
class Token
{
    public static function generate(){
        return originalSession\Session::put(originalConfig\Config::get('session/token_name'), md5(uniqid()));
    }

    public static function check($token){
        $tokenName = originalConfig\Config::get('session/token_name');

        if(originalSession\Session::exists($tokenName) and $token === originalSession\Session::get($tokenName)){
            originalSession\Session::delete($tokenName);
            return true;
        }
        return false;
    }
}
