<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Core extends Controller
{
    //list material
    public function getArticles()
    {
    	echo "getArticles";
    }
    public function getArticletwo()
    {
        echo "getArticletwo";
    }    
    public function getArticle($id)
    //material
    {
    	echo "getArticle - " . $id;
    }
}
