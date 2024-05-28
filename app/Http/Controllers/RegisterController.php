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
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;
class RegisterController extends BaseController
{
    public function register(Request $request)
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
            Mail::to($user->email)->send(new VerificationCodeMail($email_verification_code));
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
       return $email_verification_code;
            Mail::to($existingUser->email)->send(new VerificationCodeMail($email_verification_code));
           }
          
        return $this->sendResponse($success,'Verification code sent to your email.');
  
    }catch (\Throwable $th) {
        return response()->json([
            'status' => false,
            'message' => $th->getMessage()
        ], 500);
    }
}



public function verify(Request $request)
{
    try {
    // Validate the request input
    $validator = Validator::make($request->all(), [
        'email' => 'required|email|exists:users,email',
        'verification_code' => 'required|string',
    ]);

    // Check if validation fails
  
    if($validator->fails()){
        return $this->sendError('Validation Error.', $validator->errors()->all());       
    }

    // Retrieve the user by email and check the verification code
    $user = User::where('email', $request->email)
                ->where('code', $request->verification_code)
                ->first();

    // If user does not exist or code is incorrect, return an error response
    if (!$user) {
        return $this->sendError('Invalid verification code!');
    }
      
        // Update user's email verification timestamp
        $user->email_verified_at = Carbon::now();
        $user->save();

        // Create a new API token for the user
        $data['token'] = $user->createToken($request->email)->plainTextToken;
        $data['user'] = $user;

        return $this->sendResponse($data,'Email verified successfully.');
    } catch (\Throwable $th) {
        return response()->json([
            'status' => 'error',
            'message' => $th->getMessage()
        ], 500);
    }
}



public function logout(Request $request)
{
    $user = auth()->user();
    $user->tokens()->delete();
    $user->mySession()->delete();
    $success['user'] =  $user;
    return $this->sendResponse($success, 'User is logged out successfully.');

} 


}