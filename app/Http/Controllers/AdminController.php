<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MySession;
use Carbon\Carbon;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\Mail\ForgetPassword;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
class AdminController extends BaseController
{
    public function registerAdmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:users,email',
            'name'=>'required|min:3',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all());
        }
    
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'isAdmin'=> 1, 
                ]);            
                $data['token'] = $user->createToken($request->email)->plainTextToken;
                $data['user'] = $user;
                return $this->sendResponse($data,'admin is created successfully');
  
     }  


     
 public function loginAdmin(Request $request)
 {
     $validator = Validator::make($request->all(), [
         'email' => 'required|email|max:255',
         'password' => ['required', 'string'],
     ]);
 
     if ($validator->fails()) {
        return $this->sendError('Validation Error.', $validator->errors()->all());
    }

             // Check email exist
         $user = User::where('email', $request->email)->first();
         if(!$user) {
            return $this->sendError('Invalid email', []);
           
         }
         // Check password
         if(!Hash::check($request->password, $user->password)) {
            return $this->sendError('Invalid password', []);

         }
 
         $data['token'] = $user->createToken($request->email)->plainTextToken;
         $data['user'] = $user;
         return $this->sendResponse($data,'User is logged in successfully.');
         }
 
    


     public function forgetPassword(Request $request)
         {
             try {
             $validator = Validator::make($request->all(), [
                 'email' => 'required|email|max:255',
             ]);
         
     if ($validator->fails()) {
        return $this->sendError('Validation Error.', $validator->errors()->all());
    }
                     $user = User::where([['isAdmin',1],['email',$request->email]])->first();
                     if ($user) {
                         $randomPassword = Str::random(8);
                         Mail::to($request->email)->send(new ForgetPassword($randomPassword )); 
                         $user->password = bcrypt($randomPassword);
                         $user->save();
                         return $this->sendResponse($user,'password has been successfully reset.');
                     }
                     return $this->sendError('Invalid email', []);
             }catch (\Throwable $th) {
                 return response()->json([
                     'status' => false,
                     'message' => $th->getMessage()
                 ], 500);
             }
         }
         
}

