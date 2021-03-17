<?php
    require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
    
    class ExampleCtrl {
        public function generateView(){
            global $conf;
            
            $smarty = new Smarty(); 
            $smarty->assign('conf',$conf);
            
            $smarty->assign('page_title','Kalkulator rat');
            $smarty->assign('page_description','Kalkulator rat obiektowy');
            $smarty->assign('page_header','<h1 class="lead">Kalkulator rat</h1> <p class="tagline">Kontroler główny</p>');
            $smarty->assign('page_footer','Kalkulator rat oparty na szablonie <a href="https://www.gettemplate.com/info/progressus/">Progressus</a>');
                  
            $smarty->display($conf->root_path.'/app/other/Example.tpl');
        }
    }
