<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\post;

class postController extends Controller
{
    function home_page()
    {
        $posts=post::latest()->take(3)->get();
        return view('web_pages.index',compact('posts'));
    }
    function Show_all()
    {
        $posts =post::paginate(6);
        // @dd($posts);
        return view('web_pages.All_Articles', compact('posts'));
    }
    function showPost($id)
    {
        $curPost=post::findorfail($id);
        return view('web_pages.postShow',compact('curPost'));
    }
    // =========================================================================================
    function creatPost()
    {
        // $userName=Auth::user();
        return view('admin_pages.createPost');
    }
    function Store_New_Post()
    {
        /*
        if you will use this way you should sure first that all field here 
        (title,body) is added to fillable variable in post model (or any model you will use)
        ********
         if you use fillable you can write 
        post::create(request->all());
        ********
        post::create(
            [
                'title'=>request('title'),
                'body'=>request('body')
            ]
            );
        */
        $newPost=new post();
        $newPost->title=request('title');
        $newPost->body=request('body');//can write request['body'];
        $newPost->save();
        // @dd($newPost);
         return redirect('/all articles');
        //  return redirect()->route('web_pages.All_Articles');

    }
    // ===============================================================================================
    function editPost($id)
    {
        $find_post=post::findorfail($id);
        return view('admin_pages.editPost',compact('find_post'));
    }
    function updatePost($id)
    {
        $update_post=post::findorfail($id);
        $update_post->title=request('title');
        $update_post->body=request('body');
        $update_post->update();
        //  return redirect()->route('web_pages.All_Articles');
        // dd($update_post);
         return redirect()->back()->with('status','Updated Successfully');
        
    }
    // =====================================================================================================
    function deletePost($id)
    {
      $post=post::findorfail($id)->delete();
        return redirect()->back();
       // return 'done';
    }




}
