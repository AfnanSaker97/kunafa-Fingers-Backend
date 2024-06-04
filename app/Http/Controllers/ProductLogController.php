<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductLog;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
use Auth;
class ProductLogController extends BaseController
{
    public function index(Request $request)
    {
        $logs = ProductLog::with('product')->get();
        return $this->sendResponse($logs,'logs Product fetched successfully.');
    
    
    }
}
