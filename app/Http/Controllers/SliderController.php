<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
use Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
class SliderController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'language_id' => 'required|exists:languages,id',
        ]);
       
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all());       
        }
    
        // Retrieve sliders data
        $languageId = $request->language_id;
        $sliders = Cache::remember('sliders_' . $languageId, 60, function () use ($languageId) {
            try {
                $sliders = Slider::with([
                    'translations' => function ($query) use ($languageId) {
                        $query->where('language_id', $languageId)
                              ->select('slider_id', 'text1','text2'); // Ensure the correct columns are selected
                    }
                ])->get();
    
                // Format the sliders data if needed
                return $sliders->map(function ($slider) {
                    return [
                        'id' => $slider->id,
                        'text1' => optional($slider->translations->first())->text1 ?? '0',
                        'text2' => optional($slider->translations->first())->text2 ?? '0',
                        'url_media' => $slider->url_media,
                    ];
                });
            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['error' => $e->getMessage()], 500);
            }
        });



        // Assuming $this->sendResponse() method is defined elsewhere
        return $this->sendResponse($sliders, 'Slider fetched successfully.');
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
       
            // Validate the request data
            $validator = Validator::make($request->all(), [
                'text1_en' => 'nullable|string|max:255',
                'text1_ar' => 'nullable|string|max:255',
                'text1_zh' => 'nullable|string|max:255',
                'text1_ms' => 'nullable|string|max:255',
                'text2_en' => 'nullable|string|max:255',
                'text2_ar' => 'nullable|string|max:255',
                'text2_zh' => 'nullable|string|max:255',
                'text2_ms' => 'nullable|string|max:255',
                'url_media' => 'required|file',

            ]);
    
            // If validation fails, return error response
            if($validator->fails()){
                return $this->sendError('Validation Error.', $validator->errors()->all());       
            }
            try {
                // Start the transaction
                DB::beginTransaction();
              // Handle the file upload
            if ($request->hasFile('url_media')) {
                $imageName = time() . '.' . $request->url_media->extension();
                $request->url_media->move(public_path('Slider'), $imageName);
                $url = url('Slider/' . $imageName);
             
            }
            
        // Save the image URL to the database
        $slider = Slider::create([
          // or any other relevant data
          'url_media' => $url,
        ]);

        $translations = [
            ['language_id' => 1, 'text1' => $request->input('text1_en', '0'), 'text2' => $request->input('text2_en', '0')],
            ['language_id' => 2, 'text1' => $request->input('text1_ar', '0'), 'text2' => $request->input('text2_ar', '0')],
            ['language_id' => 3, 'text1' => $request->input('text1_zh', '0'), 'text2' => $request->input('text2_zh', '0')],
            ['language_id' => 4, 'text1' => $request->input('text1_ms', '0'), 'text2' => $request->input('text2_ms', '0')],

        ];
    
        foreach ($translations as $translation) {
            $slider->translations()->create($translation);
        }
              // Commit the transaction
              DB::commit();
            return $this->sendResponse($slider, 'Slider uploaded successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500); }
        }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
