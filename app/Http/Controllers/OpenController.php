<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;

class OpenController extends Controller
{
    public function categorySubcategory()
    {

        $categories = Category::all();

        foreach($categories as $category)
        {
            $category->subcategories = $category->subcategories;
        }
        return $categories;
    }
}
