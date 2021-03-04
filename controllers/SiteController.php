<?php

class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(3);
        
        require_once(ROOT . '/views/site/index.php');
        
        return true;
    } 
    
    public function actionContact()
    {
        $userEmail = '';
        $userText = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            
            $userEmail = strip_tags($_POST['userEmail']);
            $userText = strip_tags($_POST['userText']);
            
            $errors = false;
            
            
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            
            if($errors == false) {
                
                $adminEmail = 'siteadress@mail.ru';
                $subject = 'Тема письма';
                $message = "Текст: {$userText}. От {$userEmail}";
                $result = mail($adminEmail, $subject, $message);
                $result = true;

            }
        }
        
        require_once(ROOT . '/views/site/contact.php');
        
        return true;
    } 
}
