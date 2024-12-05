<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LadingPageConfig;

class DonationsConfigController extends Controller
{
    public function index()
    {
        return view('admin.donations-config.index');
    }

    public function update(Request $request)
    {
        $params = $request->all();

        if ($request->hasFile('donations_banner_image')) {
            $fileName = time() . $request->donations_banner_image?->getClientOriginalName();
            $file = $request->file('donations_banner_image');
            $file->move(public_path('images'), $fileName);
            $params['donations_banner_image'] = $fileName;
        }

        $instace = LadingPageConfig::getInstance();
        $instace->update($params);

        return redirect()->route('donations-form.index');
    }
}
