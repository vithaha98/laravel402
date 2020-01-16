<?php


namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;



class Homecontroller extends BaseController
{
    public function showWelcome(){
        $posts = Posts::paginate(10);
        return view('index',['posts'=> $posts]);
    }
}
