<?php

namespace App\Http\Controllers;

use App\Executive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExecutiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $executives = Executive::paginate(4);
        return view('admin.executive.index', compact('executives'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $executive = new Executive();
        return view('admin.executive.create', compact('executive'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $executive = Executive::create($this->validateRequest());
        $this->storeImage($executive);
        return redirect('admin/executive');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Executive $executive
     * @return \Illuminate\Http\Response
     */
    public function show(Executive $executive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Executive $executive
     * @return \Illuminate\Http\Response
     */
    public function edit(Executive $executive)
    {
        $executive = Executive::find($executive->id);
        return view('admin.executive.edit', compact('executive'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Executive $executive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Executive $executive)
    {
        $this->validateRequestUpdate();
        $this->checkAndDeleteOldImage($executive);
        $executive->update($this->validateRequestUpdate());
        $this->storeImage($executive);
        return redirect(route('executive.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Executive $executive
     * @return \Illuminate\Http\Response
     */
    public function destroy(Executive $executive)
    {
        Storage::delete('public/' . $executive->photo);
        Executive::find($executive->id)->delete();
        return redirect(route('executive.index'));
    }


    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'photo' => 'required|file|image|max:5000',
            'post' => 'required',
            'message' => 'nullable',
        ]);
    }

    private function validateRequestUpdate()
    {
        return request()->validate([
            'photo' => 'sometimes|file|image|max:5000',
            'name' => 'required',
            'post' => 'required',
            'message' => 'nullable',
        ]);
    }

    private function checkAndDeleteOldImage($executive)
    {
        if (request()->has('photo')) {
            Storage::delete('public/' . $executive->photo);
        }
    }

    private function storeImage($executive)
    {
        if (request()->has('photo')) {
            $executive->update([
                'photo' => request()->photo->store('executive', 'public'),
            ]);
//            $image = Image::make(public_path('storage/' . $executive->photo));
//            $image->save();
        }
    }

}
