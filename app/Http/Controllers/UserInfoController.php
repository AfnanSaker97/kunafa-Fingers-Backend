<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;
use Carbon\Carbon;
use Validator;
use Auth;
use Jenssegers\Agent\Facades\Agent;
class UserInfoController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userInfo = UserInfo::all();
        return $this->sendResponse($userInfo, 'user Info fetched successfully.');
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
        try {
            $utcTimestamp =now();
        
            // Convert the UTC timestamp to a Carbon instance
            $utcTime = Carbon::parse($utcTimestamp);
            
            // Convert the UTC time to your local time zone (UTC+3)
            $localTime = $utcTime->copy()->setTimezone('Etc/GMT-3');
            $time =$localTime->toDateTimeString();
    
          // Get IP information
      $IpInfo = $request->ip();
      $currentUserInfo = Location::get($IpInfo);
    
       $browser = Agent::browser();
       $version = Agent::version($browser);

      $platform = Agent::platform();
      $platformVersion = Agent::version($platform);
      $device = Agent::device();
     
      // Define a mapping of country codes to languages
      $countryLanguageMap = [
        'SY' => 'Arabic',
        'US' => 'English',
        'DE' => 'German',
        'FR' => 'French',
        'ES' => 'Spanish',
        'CN' => 'Chinese',
        'JP' => 'Japanese',
        'RU' => 'Russian',
        'IN' => 'Hindi',
        'BR' => 'Portuguese',
        'IT' => 'Italian',
        'KR' => 'Korean',
        'MX' => 'Spanish',
        'CA' => 'English', 
        'GB' => 'English',
        'AU' => 'English',
        'ZA' => 'English', 
        'AR' => 'Spanish',
        'CL' => 'Spanish',
        'CO' => 'Spanish',
        'NL' => 'Dutch',
        'BE' => 'Dutch',
        'CH' => 'German', 
        'AT' => 'German',
        'SE' => 'Swedish',
        'NO' => 'Norwegian',
        'DK' => 'Danish',
        'FI' => 'Finnish', 
        'PL' => 'Polish',
        'CZ' => 'Czech',
        'HU' => 'Hungarian',
        'PT' => 'Portuguese',
        'GR' => 'Greek',
        'TR' => 'Turkish',
        'EG' => 'Arabic',
        'SA' => 'Arabic',
        'IR' => 'Persian',
        'PK' => 'Urdu',
        'BD' => 'Bengali',
        'ID' => 'Indonesian',
        'MY' => 'Malay', 
        'TH' => 'Thai',
        'VN' => 'Vietnamese',
        'PH' => 'Filipino', 
        'NZ' => 'English',
        'IE' => 'English',
        'SG' => 'English',
        'NG' => 'English',
        'KE' => 'English',
        'GH' => 'English',
        'KE' => 'English',
        'UA' => 'Ukrainian',
        'RO' => 'Romanian',
        'IL' => 'Hebrew',
        'AE' => 'Arabic',
        'QA' => 'Arabic',
        'KW' => 'Arabic',
        'OM' => 'Arabic',
        'JO' => 'Arabic',
        'LB' => 'Arabic',
        'TN' => 'Arabic',
        'MA' => 'Arabic',
        'DZ' => 'Arabic',
        'LY' => 'Arabic',
        'IQ' => 'Arabic',
        'SD' => 'Arabic',
        'YE' => 'Arabic',
        'ET' => 'Amharic',
        'TZ' => 'Swahili',
        'UG' => 'English',
        'ZM' => 'English',
        'ZW' => 'English',
        'MW' => 'English',
        'LS' => 'English',
        'BW' => 'English',
        'NA' => 'English',
        'SZ' => 'English',
        'BI' => 'Kirundi',
        'RW' => 'Kinyarwanda',
        'CM' => 'French',
        'CI' => 'French',
        'SN' => 'French',
        'ML' => 'French',
        'NE' => 'French',
        'TG' => 'French',
        'BF' => 'French',
        'GN' => 'French',
        'BJ' => 'French',
        'GA' => 'French',
        'CD' => 'French',
        'CF' => 'French',
        'CG' => 'French',
        'GQ' => 'Spanish',
        'SL' => 'English',
        'LR' => 'English',
        'GM' => 'English',
        'TD' => 'French',
        'SS' => 'English',
        // Add more country codes and languages as needed
    ];

    $language = $countryLanguageMap[$currentUserInfo->countryCode] ?? 'English';
  
       // Gather device info from request headers
       $deviceInfoData = [
           'ip_address' => $IpInfo,
           'language' => $language,
           'browser' => $browser . '  ' . $version,
           'platform' => $platform . '  ' . $platformVersion,
           'device' => $device,
           'request_time' => $time ,
           'countryName' => $currentUserInfo->countryName ?? '0',
           'regionName' => $currentUserInfo->regionName ?? '0',
           'cityName' => $currentUserInfo->cityName ?? '0',
           
       ];
   

        // Check if a matching record exists
        $existingDeviceInfo = UserInfo::where('ip_address', $deviceInfoData['ip_address'])
            ->where('language', $deviceInfoData['language'])
            ->where('browser', $deviceInfoData['browser'])
            ->where('platform', $deviceInfoData['platform'])
            ->where('device', $deviceInfoData['device'])

            ->where('countryName', $deviceInfoData['countryName'])
            ->where('regionName', $deviceInfoData['regionName'])
            ->where('cityName', $deviceInfoData['cityName'])
            ->first();

            if ($existingDeviceInfo) {
                // Increment the count field if the record exists
                $existingDeviceInfo->count += 1;
                $existingDeviceInfo->request_time = $time; // Update the request time
                $existingDeviceInfo->updated_at =  $time;
                $existingDeviceInfo->save();
                $deviceInfo = $existingDeviceInfo;
            } else {
                // Create a new record if it doesn't exist
                $deviceInfoData['count'] = 1;
                $deviceInfo = UserInfo::create($deviceInfoData);
                $deviceInfo->updated_at =  $time;
                $deviceInfo->created_at =  $time;
                $deviceInfo->save();
            }
            return $this->sendResponse($deviceInfo,'created successfully.');
            
        
    } catch (\Throwable $th) {
        return response()->json([
            'status' => false,
            'message' => $th->getMessage()
        ], 500); 
    }
}

    /**
     * Display the specified resource.
     */
    public function show(UserInfo $userInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserInfo $userInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserInfo $userInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserInfo $userInfo)
    {
        //
    }



    public function getDeviceLanguage(Request $request)
{
    $IpInfo = $request->ip();
       $currentUserInfo = Location::get($IpInfo);
      
      // Define a mapping of country codes to languages
      $countryLanguageMap = [
        'SY' => 'Arabic',
        'US' => 'English',
        'DE' => 'German',
        'CA' => 'English',
        'GB' => 'English',
        'AU' => 'English',
        'ZA' => 'English',
        'EG' => 'Arabic',
        'SA' => 'Arabic',
        'BE' => 'German',
        'CH' => 'German', 
        'AT' => 'German',
        'IE' => 'English',
        'SG' => 'English', 
        'NG' => 'English',
        'KE' => 'English',
        'GH' => 'English',
        'KE' => 'English',
        'AE' => 'Arabic',
        'QA' => 'Arabic',
        'KW' => 'Arabic',
        'OM' => 'Arabic',
        'JO' => 'Arabic',
        'LB' => 'Arabic',
        'TN' => 'Arabic',
        'MA' => 'Arabic',
        'DZ' => 'Arabic',
        'LY' => 'Arabic',
        'IQ' => 'Arabic',
        'SD' => 'Arabic',
        'YE' => 'Arabic',
        'UG' => 'English',
        'ZM' => 'English',
        'ZW' => 'English',
        'MW' => 'English',
        'LS' => 'English',
        'BW' => 'English',
        'NA' => 'English',
        'SZ' => 'English',
        'SL' => 'English',
        'LR' => 'English',
        'GM' => 'English',
        'SS' => 'English',
    ];
    $language = $countryLanguageMap[$currentUserInfo->countryCode] ?? 'English';


    return response()->json(['language' => $language]);
}

}
