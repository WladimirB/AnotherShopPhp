<?php 

class News 
{
    public static function getNewsList()
    {
        
    }
    
    public static function getNewsItemsById($id)
    {
        $id = intval($id);
        
        if($id) {
            
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM news WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            $newsItem = $result->fetch();
            
            return $newsItem;
        }
    }
}

?>