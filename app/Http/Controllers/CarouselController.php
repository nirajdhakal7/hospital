<?php

namespace App\Http\Controllers;

use App\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels = Carousel::latest()->paginate(4);
        return view('admin.carousel.index', compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = Carousel::create($this->validateRequest());
        $this->storeImage($slider);
        return redirect('admin/carousel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel)
    {
        $slider = Carousel::findorfail($carousel->id);
        return view('admin.carousel.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        $carousel = Carousel::find($carousel->id);
        return view('admin.carousel.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carousel $carousel)
    {
        $this->validateRequestUpdate();
        $this->checkAndDeleteOldImage($carousel);
        $carousel->update($this->validateRequestUpdate());
        $this->storeImage($carousel);
        return redirect(route('carousel.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carousel $carousel)
    {
        Storage::delete('public/' . $carousel->photo);
        Carousel::find($carousel->id)->delete();
        return redirect(route('carousel.index'));
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'required',
            'photo' => 'required|file|image|max:5000',
        ]);
    }

    private function validateRequestUpdate()
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'required',
            'photo' => 'sometimes|file|image|max:5000',
        ]);
    }

    private function checkAndDeleteOldImage($carousel)
    {
        if (request()->has('photo')) {
            Storage::delete('public/' . $carousel->photo);
        }
    }

    private function storeImage($carousel)
    {
        if (request()->has('photo')) {
            $carousel->update([
                'photo' => request()->photo->store('carousel', 'public'),
            ]);
            $image = Image::make(public_path('storage/' . $carousel->photo))->fit(1920,1280);
            $image->save();
        }
    }
}
