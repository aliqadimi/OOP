<?php
include_once 'BaseModel.php';
class Article extends BaseModel
{
    protected $table = 'articles';

    public function mostCommentedArticles(){
        # get most commented Articles from database
    }
    
}