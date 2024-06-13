<?php

namespace App\Http\Controllers;

use App\Models\CountatUs;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\CountactUs;
class CountatUsController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'email' => 'required|email',
            'subject' => 'required|min:3',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }

        $ContactUs =  CountatUs::create([
        'email' => $request->email,
        'subject' => $request->subject,
         ]);
        
         Mail::to('Info.tecrek@gmail.com')->send(new CountactUs($ContactUs));
         return $this->sendResponse($ContactUs ,'Thank you for reaching out! Your message is important to us, and we’re looking forward to helping you. One of our team members will get back to you shortly.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CountatUs $countatUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CountatUs $countatUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CountatUs $countatUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CountatUs $countatUs)
    {
        //
    }
}
