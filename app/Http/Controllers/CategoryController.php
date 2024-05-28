<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use App\Models\Category;
use Validator;
class CategoryController extends BaseController
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
 
    // Retrieve categories data
    $categories = Cache::remember('categories', 60, function () {
        // Retrieve categories from database
        return Category::paginate(12);
    });
    return $this->sendResponse($success,'Successfully');

    }
}
