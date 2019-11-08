<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(4);
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = Service::create($this->validateRequest());
        $this->storeImage($service);
        return redirect('admin/service');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $service = Service::find($service->id);
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->validateRequestUpdate();
        $this->checkAndDeleteOldImage($service);
        $service->update($this->validateRequestUpdate());
        $this->storeImage($service);
        return redirect(route('service.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Service $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        Storage::delete('public/' . $service->photo);
        Service::find($service->id)->delete();
        return redirect(route('service.index'));
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

    private function checkAndDeleteOldImage($service)
    {
        if (request()->has('photo')) {
            Storage::delete('public/' . $service->photo);
        }
    }

    private function storeImage($service)
    {
        if (request()->has('photo')) {
            $service->update([
                'photo' => request()->photo->store('service', 'public'),
            ]);
//            $image = Image::make(public_path('storage/' . $service->photo));
//            $image->save();
        }
    }

}
