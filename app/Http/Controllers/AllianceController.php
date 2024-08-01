<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alliance;

class AllianceController extends Controller
{
    public function index()
    {
        return view('admin.alliances.index', [
            'alliances' => Alliance::all()
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

        $product = Alliance::create($params);

        return redirect()->route('alianzas.index');
    }

    public function update(Request $request, $slide)
    {
        $slide = Alliance::find($slide);
        $params = $request->all();
        if ($request->hasFile('image')) {
            $fileName = time() . $request->image->getClientOriginalName();
            $file = $request->file('image');
            $file->move(public_path('slides'), $fileName);
            $params['image'] = $fileName;
        }

        $slide->update($params);

        return redirect()->route('alianzas.index');
    }

    public function destroy($slide)
    {
        $slide = Alliance::find($slide);
        $slide->delete();

        return redirect()->route('alianzas.index');
    }
}
