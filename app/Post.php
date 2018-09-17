<?php
/**
 * Created by PhpStorm.
 * User: Amey
 * Date: 9/17/2018
 * Time: 1:15 PM
 */

namespace App;


class Post
{
    public function getPosts($session){
        if(!$session->has('posts')){
            $this->createDummyDate($session);
        }
        return $session->get('posts');
    }

    public function getPost($session,$id){
        if(!$session->has('posts')){
            $this->createDummyDate($session);
        }
        return $session->get('posts')[$id];
    }

    public function addPost($session,$title,$content){
        if(!$session->has('posts')){
            $this->createDummyDate($session);
        }
        $posts=$session->get('posts');
        array_push($posts,['title'=>$title,'content'=>$content]);
        $session->put('posts',$posts);
    }

    public function editPost($session,$id,$title,$content){
        if(!$session->has('posts')){
            $this->createDummyDate($session);
        }
        $posts=$session->get('posts');
        $posts[$id]=['title'=>$title,'content'=>$content];
        $session->put('posts',$posts);
    }

    private function createDummyDate($session){
        $posts=[
            [
            'title'=>'Learning Laravel',
            'content'=> 'This blog post will get you right on track with Laravel'],
            ['title'=>'Something Else',
            'content'=> 'Some Other Content']
        ];
        $session->put('posts',$posts);



    }
}