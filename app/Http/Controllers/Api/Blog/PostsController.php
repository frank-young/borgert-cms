<?php

namespace App\Http\Controllers\Api\Blog;

use Carbon\Carbon;
use App\Libraries\Upload;
use Illuminate\Http\Request;
use App\Models\Admin\Blog\Posts;
use App\Http\Controllers\Controller;
use App\Models\Admin\Blog\Categorys;

class PostsController extends Controller
{
    const UPLOAD_PATH = 'blog/posts/';
    const UPLOAD_ROUTE = 'admin.blog.posts.upload';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::sortable(['created_at' => 'desc'])->paginate(10);

        // return view('admin.blog.posts.index', ['posts' => $posts]);
        return response()->json($posts);
    }

    public function show($id)
    {
        $post = Posts::where(['id' => $id, 'status' => 1]);
        $res = returnDetail($post);
        return response()->json($res);
    }

}
