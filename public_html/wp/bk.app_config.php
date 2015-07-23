<?php    
    ini_set('session.cookie_lifetime', 900);
    ini_set('session.gc_maxlifetime', 900);
    session_start();
    if(!isset($_SESSION['APP_SITE']))
    {
        $_SESSION['APP_SITE'] = "PC";
    }
    define("APP_URL_LINK", "http://10.10.0.7:8010/");
    define("APP_URL", "http://10.10.0.7:8010/");
    define("APP_PATH", dirname(__FILE__)."/");
    define("APP_PATH_WP", dirname(__FILE__)."/wp/");
    define("APP_PATH_HOME", "http://10.10.0.7:8010/wp/");
    if(isset($_REQUEST['site_mode'])) 
    {
        $_SESSION['APP_SITE'] = $_REQUEST['site_mode'];
    }
    else
     {
         if(!isset($_SESSION['APP_SITE']))
         { 
            $_SESSION['APP_SITE'] = "PC";
         }        
     }
     define("APP_PATH_CSS", APP_URL.(($_SESSION['APP_SITE'] == "PC")?"common":"common/sp"));          
?>