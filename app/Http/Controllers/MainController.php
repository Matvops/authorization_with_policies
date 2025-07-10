<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View
    {
        $posts = Post::with('user')->get();

        return view('home', compact('posts'));
    }

    public function update($id)
    {   
        $post = Post::find($id);

        if(Auth::user()->can('update', $post)) {
            echo "O usuáro pode atualizar";
        } else {
            echo "O usuário não pode atualizar!";
        }
    }

    public function delete($id)
    {
       $post = Post::find($id);

        if(Auth::user()->can('delete', Post::class)) {
            echo "O usuáro pode excluir";
        } else {
            echo "O usuário não pode excluir!";
        }
    }

    public function create()
    {
        if(Auth::user()->can('create', Post::class)) {
            echo "O usuáro pode criar um post";
        } else {
            echo "O usuáro NÃO pode criar um post";
        }
    }
}
