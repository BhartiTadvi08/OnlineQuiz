<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Repositories\PostRepositoryInterface;


class PostController extends Controller
{
    

     private $post;
    
     public function __construct(PostRepositoryInterface $post)
    {
       
        $this->post = $post;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $data = $this->post->index();
        return view('posts.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $post = $this->post->store($request->all());
        return redirect()->route('post.index')->with('success','Post created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $post = $this->post->show($id);

        return view('posts.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $id)
    {
       
        $post = $id;
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       
        $post = $this->post->update($id,$request->all());
        return redirect()->route('post.index')->with('success','post deleted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $post = $this->post->delete($id);
        return redirect()->route('post.index')->with('success','post deleted successfully');
    }
}
