<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Shop;
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

    public function navbar()
    {
        $categories = Category::all();

        foreach($categories as $category)
        {
            $category->subcategories = $category->subcategories;
        }

        $shops = Shop::all();
        $brands = Brand::all();
        return ['categories' => $categories, 'shops' => $shops, 'brands' => $brands];

    }
}
