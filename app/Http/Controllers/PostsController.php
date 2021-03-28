<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


use App\Post;
use App\Like;
use App\Comment;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBy('created_at','desc')->paginate(5);
        return view('dashboard',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validate
        $this->validate($request,[
            'body'=>'required',
            'cover_image'=>'image|nullable'
        ]);

        if($request->hasFile('cover_image')){

            $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
            
        } else{ 
            $fileNameToStore='noimage.jpg';
        }

        $post= new Post();
        $post->body=$request->input('body');
        $post->cover_image=$fileNameToStore;
        $message='error';
       if( $request->user()->posts()->save($post))
       {
           $message='Created Successfully';
       }
        return \redirect('/dashboard')->with(['message'=>$message]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        if(Auth::user() != $post->user){
            return redirect()->back();
        }
         if ($post->cover_image != 'noimage.jpg') {
            Storage::delete('public/cover_images/'.$post->cover_image);
        }
        $post->delete();
        $post->likes()->delete();
        $post->comments()->delete();
        return redirect('dashboard')->with('message','Successfully Deleated');
    }



    public function postEdit(Request $request){
        $this->validate($request,[
            'body'=>'required',
        ]);
        $post=Post::find($request['postId']);
        if(Auth::user() != $post->user){
            return redirect()->back();
        }
        $post->body=$request['body'];
        $post->update();
        return response()->json(['newBody'=>$post->body],200);
    }


    
    public function postLike(Request $request){
        $post_id=$request['postId'];
        $isLike=$request['like']==='true';
        $post=Post::find($post_id);
      
        $user=Auth::user();
        $like=$user->likes()->where('post_id',$post_id)->first();
        if($like){
                $like->delete();
                // return null;
                return response()->json(['likes'=>count($post->likes)],200);
            }
        else{
            $like=new Like();
        } 
        $like->like=$isLike;
        $like->user_id=$user->id;
        $like->post_id=$post->id;
        $like->save();
        return response()->json(['likes'=>count($post->likes)],200);
    }

    
    public function postCom(Request $request){
        $this->validate($request,[
                'comment'=>'required'
        ]);
        $user=Auth::user();
        $comment=new Comment();
        $comment->comment=$request['comment'];
        $comment->post_id=$request['postId'];
        $comment->user_id=$user->id;
        $comment->save();
        $coun=Comment::where('post_id',$request['postId'])->get();
        $us=$user->first_name;
        $t=time_elapsed_string($comment->created_at);
        return response()->json(['a'=>$comment,'count'=>$coun,'us'=>$us,'t'=>$t],200);
    }
    
   
}
