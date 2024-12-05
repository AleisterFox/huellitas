<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class SlideConfigController extends Controller
{
    public function index()
    {
        return view('admin.slides.index', [
            'slides' => Slide::all()
        ]);
    }

    public function store(Request $request)
    {
        $fileName = time() . $request->image?->getClientOriginalName();
        $params = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move(public_path('slides'), $fileName);
            $params['image'] = $fileName;
        }

        $product = Slide::create($params);

        return redirect()->route('slides.index');
    }

    public function update(Request $request, $slide)
    {
        $slide = Slide::find($slide);
        $params = $request->all();
        if ($request->hasFile('image')) {
            $fileName = time() . $request->image->getClientOriginalName();
            $file = $request->file('image');
            $file->move(public_path('slides'), $fileName);
            $params['image'] = $fileName;
        }

        $slide->update($params);

        return redirect()->route('slides.index');
    }

    public function destroy($slide)
    {
        $slide = Slide::find($slide);
        $slide->delete();

        return redirect()->route('slides.index');
    }
}
