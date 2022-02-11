<?php
/**
 * ArticleController as Hello World!
 *
 * @author Igram Picasa <https://github.com/igpcl>
 */
namespace Controller;

use Model\Article;

class ArticleController {
    /**
     * We need to say a Hello first
     * Params provided by the main Controller.
     *
     * @param array $params
     */
    public function indexAction(array $params=[]) : void {
        //  This is indexAction to call
        //  Find and show an article according to $params from the database
        //  We need to check it to make sure there be no attacking purpose with $params
        
        $articleId= (int)($params[1]??1);
        $article = Article::findByColumn('id', $articleId);

        if ($article===false) {
            http_response_code(404);
            die('Error 404');
        }

        // Render a view as a response for calling this method
        include 'view/article/indexView.php';
    }
}
