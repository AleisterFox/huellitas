<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LadingPageConfig;

class LadingPageConfigController extends Controller
{
    public function index()
    {
        return view('admin.config.index');
    } 

    public function update($config, Request $request)
    {
        $params = $request->all();

        if ($request->hasFile('card_1_image')) {
            $fileName = time() . $request->card_1_image?->getClientOriginalName();
            $file = $request->file('card_1_image');
            $file->move(public_path('images'), $fileName);
            $params['card_1_image'] = $fileName;
        }

        if ($request->hasFile('card_2_image')) {
            $fileName = time() . $request->card_2_image?->getClientOriginalName();
            $file = $request->file('card_2_image');
            $file->move(public_path('images'), $fileName);
            $params['card_2_image'] = $fileName;
        }

        if ($request->hasFile('card_3_image')) {
            $fileName = time() . $request->card_3_image?->getClientOriginalName();
            $file = $request->file('card_3_image');
            $file->move(public_path('images'), $fileName);
            $params['card_3_image'] = $fileName;
        }
    
        $config = LadingPageConfig::getInstance();
        $config->update($params);
        return redirect()->route('config.index');
    }
}
