<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addpost()
    {
        return view('admin.add_post');
    }
       public function createpost(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('img', $imagename);
        $post->image = $imagename;
        $post->user_name=Auth::user()->name;
        $post->user_id=Auth::user()->id;
        $post->save();
    }
}
