<?php
namespace App\Repositories;

use App\Post;
use Illuminate\Http\Request;
use App\Repositories\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
	 public function index()
    {
        return Post::all();
    }

    public function store($arr)
    {

        $post = new Post();
        $post->comment = $arr['comment'];
       return  $result = $post->save();
        
    }

      public function edit($id)
    {
    	return Post::find($id);
    }


      public function update($id,$array)
    {
    	$post = Post::find($id);
    	$post->comment = $array['comment'];
    	return $post->save();
    }


    public function show($id)
    {
    	return Post::find($id);
    }

     public function delete($id)
    {
    	return Post::destroy($id);
    }

}