<?php
include_once 'BaseModel.php';
include_once 'traits/HasViewCount.php';

class Article extends BaseModel
{
    protected $table = 'articles';

    public function mostCommentedArticles(){
        # get most commented Articles from database
    }

    use HasViewCount;

}

$post_id = 2;
$post = new Article();
$data = $post->find($post_id);
$post->addViewCount($post_id);
echo "$data->title (views:$data->viewcount)";