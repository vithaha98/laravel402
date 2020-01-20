<?php


namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Models\Post;


class Homecontroller extends BaseController
{
    public function showWelcome(){
        $posts = Posts::paginate(10);
        return view('/admin/index',['posts'=> $posts]);
    }
    public function create(){
        return view('/admin/create');
    }
    public function save(){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $posts = new Posts();
        $posts->title = $title;
        $posts->content = $content;
        $posts->save();
        return redirect('/admin/');

    }
    public function delete($id){
        $delete = DB::table('posts')->where('id','=',$id)->delete();
        return redirect('/admin/');
    }
    public function update( $id){
        $posts = Posts::find($id);
        return view('/admin/update',compact('posts'));
    }
    public function saveupdate()
    {
        # code...
    }

}
