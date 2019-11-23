<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::orderBy('created_at', 'desc')->get();
        return view('admin.notice.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notice = Notice::create($this->validateRequest());
        $this->storeFile($notice);
        return redirect('admin/notice');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {
        //
    }
    private function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'description' => 'required',
            'attachment' => 'sometimes|file|max:10000|mimes:doc,docx,pdf,jpeg,png,jpg,xls,xlsx',
        ]);
    }

    private function storeFile($notice)
    {
        $filenameWithExt = request()->file('attachment')->getClientOriginalName();
        if (Str::startsWith($filenameWithExt, '#')) {
            $filenameWithExt = Str::after($filenameWithExt, '#');
        }
        $path = request()->file('attachment')->storeAs('public/attachment', $filenameWithExt);
        $notice->update([
            'attachment' => Str::after($path, 'public/'),
        ]);
    }
}
