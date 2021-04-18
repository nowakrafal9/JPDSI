<?php
    require_once 'core/Config.class.php';
    $conf = new core\Config();
    require_once 'config.php';
    function &getConf() { global $conf; return $conf; }

    require_once 'core/Messages.class.php';
    $messages = new core\Messages();
    function &getMessages() { global $messages; return $messages; }

    require_once 'core/ClassLoader.class.php';
    $cloader = new core\ClassLoader();
    function &getLoader() { global $cloader; return $cloader; }

    require_once 'core/Router.class.php';
    $router = new core\Router();
    function &getRouter() { global $router; return $router; }

    $smarty = null;
    function &getSmarty(){
        global $smarty;
        if (!isset($smarty)){
            include_once getConf()->root_path.'/lib/smarty/Smarty.class.php';
            $smarty = new Smarty();	

            $smarty->assign('conf',getConf());
            $smarty->assign('messages',getMessages());

            $smarty->setTemplateDir(array(
                    'one' => getConf()->root_path.'/app/view',
                    'two' => getConf()->root_path.'/app/view/templates'
            ));
        }
        return $smarty;
    }

    $db = null;

    function &getDB() {
        global $conf, $db;
        if (!isset($db)) {
            require_once 'lib/medoo/Medoo.php';
            $db = new \Medoo\Medoo([
                'database_type' => &$conf->db_type,
                'server' => &$conf->db_server,
                'database_name' => &$conf->db_name,
                'username' => &$conf->db_user,
                'password' => &$conf->db_pass,
                'charset' => &$conf->db_charset,
                'collation' => &$conf->db_collation,
                'port' => &$conf->db_port,
                'prefix' => &$conf->db_prefix,
                'option' => &$conf->db_option
            ]);
        }
        return $db;
    }

    require_once 'core/functions.php';

    session_start();
    $conf->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array();

    $router->setAction(getFromRequest('action'));