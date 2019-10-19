<?php

namespace App\Http\Controllers\Admin;

use App\Model\Web\Mensaje;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function create(){

        $VAR = 0;
        return view('admin.post.post');

    }


    public function destroy($id) {
        return "Publicación eliminada con éxito";
    }
}
