<?php

class CabinetController
{

    public function __construct()
    {
        $userId = User::checkLogged();
        
        $user = User::getUserById($userId);
    }
    public function actionIndex()
    {     
        require_once(ROOT . '/views/cabinet/index.php');

        return true;
    }  
    
    public function actionEdit()
    {
        
        $name = $user['name'];
        $password = $user['password'];
                
        $result = false;     

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
            
            $errors = false;
            
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            if ($errors == false) {
                $result = User::edit($userId, $name, $password);
            }

        }

        require_once(ROOT . '/views/cabinet/edit.php');

        return true;
    }

}