<?php
namespace wdpf\cookie;
class cookie{
    public function __construct(){}
    static function set($key, $value = false){
        if(gettype($key) == "array"){
            foreach($key as $skey => $vkey){
                setcookie($skey, $vkey, time()+86400, "/");
            }
          }else{
            setcookie($key, $value, time()+86400, "/");
        }
    }
    static function get($key){
        if(isset($_COOKIE[$key])){
            return $_COOKIE[$key];
        }else{
            return false;
        }
    }
	static function remove($key){
        setcookie($key, false, time()-3600, "/");
    }
    static function destroy(){
        foreach ($_COOKIE as $key => $value) {
            setcookie($key, false, time()-3600, "/");
        }
        return true;
    }
}
?>

