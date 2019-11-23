<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

/**
 */
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = About::create($this->validateRequest());
        $this->storeLogo($about);
        return redirect()->intended(route('about.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\About $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\About $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\About $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $this->validateRequestUpdate();
        $this->checkAndDeleteOldLogo($about);
        $about->update();
        $this->storeLogo($about);
        return redirect(route('service.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\About $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        Storage::delete('public/' . $about->photo);
        About::find($about->id)->delete();
        return redirect(route('about.index'));
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'address' => 'required',
            'phone_no' => 'required',
            'email' => 'required',
            'slogan' => 'required',
            'description' => 'required',
            'logo' => 'sometimes|file|image|max:5000',
        ]);
    }

    private function validateRequestUpdate()
    {
        return request()->validate([
            'name' => 'required',
            'address' => 'required',
            'phone_no' => 'required',
            'email' => 'required',
            'slogan' => 'required',
            'description' => 'required',
            'logo' => 'sometimes|file|image|max:5000',
        ]);
    }

    private function checkAndDeleteOldLogo($about)
    {
        if (request()->has('logo')) {
            Storage::delete('public/' . $about->logo);
        }
    }

    private function storeLogo($about)
    {
        if (request()->has('logo')) {
            $about->update([
                'logo' => request()->logo->store('about', 'public'),
            ]);
            $image = Image::make(public_path('storage/' . $about->logo))->fit(300, 300);
            $image->save();
        }
    }
}
