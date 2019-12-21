<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::paginate(4);
        return view('admin.doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor = new Doctor();
        return view('admin.doctor.create', compact('doctor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Doctor::class);
        $doctor = Doctor::create($this->validateRequest());
        $this->storeImage($doctor);
        return redirect('admin/doctor');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $doctor = Doctor::find($doctor->id);
        return view('admin.doctor.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $this->validateRequestUpdate();
        $this->checkAndDeleteOldImage($doctor);
        $doctor->update($this->validateRequestUpdate());
        $this->storeImage($doctor);
        return redirect(route('doctor.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        Storage::delete('public/' . $doctor->photo);
        Doctor::find($doctor->id)->delete();
        return redirect(route('doctor.index'));
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'registrationNo' => 'required|numeric',
            'photo' => 'required|file|image|max:5000',
            'qualification' => 'required',
            'specialities' => 'required',
            'department' => 'required',
            'message' => 'required',
            'description' => 'required',
            'arrival' => 'nullable',
            'isDialy' => 'nullable|boolean',
        ]);
    }

    private function validateRequestUpdate()
    {
        return request()->validate([
            'name' => 'required',
            'registrationNo' => 'required|numeric',
            'photo' => 'sometimes|file|image|max:5000',
            'qualification' => 'required',
            'specialities' => 'required',
            'department' => 'required',
            'message' => 'required',
            'description' => 'required',
            'arrival' => 'nullable',
            'isDialy' => 'nullable|boolean',
        ]);
    }

    private function checkAndDeleteOldImage($doctor)
    {
        if (request()->has('photo')) {
            Storage::delete('public/' . $doctor->photo);
        }
    }
    private function storeImage($doctor)
    {
        if (request()->has('photo')) {
            $doctor->update([
                'photo' => request()->photo->store('doctor', 'public'),
            ]);
            $image = Image::make(public_path('storage/' . $doctor->photo))->fit(300,300);
            $image->save();
        }
    }
}