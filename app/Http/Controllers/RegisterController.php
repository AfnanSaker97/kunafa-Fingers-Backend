<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\MySession;
use Carbon\Carbon;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
class RegisterController extends BaseController
{
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'nullable|min:3',
            'email' => 'required|email',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }
        try {
            $email = $request->email;
            $email_verification_code = random_int(1000, 9999); 
            $existingUser = User::where('email', $request->email)->first();
            if(!$existingUser)
            {
            // Create a new user
            $user = User::create([
                'name' =>  $request->name,
                'email' =>  $email,
                'code' => $email_verification_code 
            ]);

            MySession::create([
                'user_id' => $user->id,
                'ip_address' => $request->ip(),
                'user_agent' => $request->header('User-Agent'),
                'payload' => base64_encode($request->getContent()), 
                'last_activity' => time(),
            ]);
            $success['user'] =  $user;
           }
           else{
            $existingUser->code =$email_verification_code;
            $existingUser->save();
            MySession::create([
                'user_id' => $existingUser->id,
                'ip_address' => $request->ip(),
                'user_agent' => $request->header('User-Agent'),
                'payload' => base64_encode($request->getContent()), 
                'last_activity' => time(),
            ]);
            $success['user'] =  $existingUser;
           }
        return $this->sendResponse($success,'Email verification code sent.');
  
    }catch (\Throwable $th) {
        return response()->json([
            'status' => false,
            'message' => $th->getMessage()
        ], 500);
    }
}

}