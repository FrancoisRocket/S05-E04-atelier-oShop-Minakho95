<?php

class MainController
{
    public function home()
    {
        $this->show('home', [
            'title' => 'Dans les shoe',
        ]);
    }

    public function error404()
    {
        $this->show('error404', [
            'title' => 'Page non trouvée',
        ]);
    }

    public function show($viewName, $viewVars = array()) {

        include(__DIR__.'/../views/header.tpl.php');
        include(__DIR__.'/../views/'.$viewName.'.tpl.php');
        include(__DIR__.'/../views/footer.tpl.php');
    }

}