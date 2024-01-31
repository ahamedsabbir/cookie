<?php
require "cookie.php";
//$session = new wdpf\session\session();
/* session::init(); */
//echo session::$id;


//cookie::set('name', 'israt ahamed sabbir');
echo wdpf\cookie::get('name');
/* session::set('roll', 12154);

//session::destroy();
session::unset('roll');




if(session::get('roll')){
    echo "true";
}else{
    echo "false";
} */