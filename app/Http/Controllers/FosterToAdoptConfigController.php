<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LadingPageConfig;

class FosterToAdoptConfigController extends Controller
{
    public function index()
    {
        return view('admin.foster-to-adopt-config.index');
    }

    public function update($config, Request $request)
    {
        $params = $request->all();

        if ($request->hasFile('adoption_banner_image')) {
            $fileName = time() . $request->adoption_banner_image?->getClientOriginalName();
            $file = $request->file('adoption_banner_image');
            $file->move(public_path('images'), $fileName);
            $params['adoption_banner_image'] = $fileName;
        }

        if ($request->hasFile('adoption_banner_image_1')) {
            $fileName = time() . $request->adoption_banner_image_1?->getClientOriginalName();
            $file = $request->file('adoption_banner_image_1');
            $file->move(public_path('images'), $fileName);
            $params['adoption_banner_image_1'] = $fileName;
        }

        if ($request->hasFile('adoption_banner_image_2')) {
            $fileName = time() . $request->adoption_banner_image_2?->getClientOriginalName();
            $file = $request->file('adoption_banner_image_2');
            $file->move(public_path('images'), $fileName);
            $params['adoption_banner_image_2'] = $fileName;
        }

        $instace = LadingPageConfig::getInstance();
        $instace->update($params);

        return redirect()->route('foster-to-adopt.index');
    }
}
