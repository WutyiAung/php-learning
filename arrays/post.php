<?php
 class Post{
    public $title;
    public $isPublish;
    public function __construct($title,$isPublish)
    {
        $this->title = $title;
        $this->isPublish = $isPublish;
    }
 }
 $firstPost = new Post("first Post",true);      
 $second = new Post("second post",false);
 $third = new Post("third post", true);
 $posts =[$firstPost,$second,$third];
 
 $mapResult= array_map(function($post){
    return $post->title;
    },$posts,);
    echo "<pre>";
    var_dump($mapResult);

    $filterResult = array_filter($posts,function($post){
        return $post->title;
        });
    echo "<pre>";
   // var_dump($filterResult);