<?php

namespace App\Http\Controllers;

use App\About;
use App\Carousel;
use App\Notice;
use App\Service;
use App\Visitor;
use App\Executive;
use App\VisitorChecker;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        Visitor::checkVisitor();
        $visitors = Visitor::get();
        $carousels = Carousel::all();
        $about = About::first();
        $services = Service::take(4)->get();
        return view('web.page.index', compact('carousels', 'about', 'services', 'visitors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }

    public function executive()
    {
        $executives = Executive::all();
        // dd($executives);
        return view('web.page.executives', compact('executives'));
    }


    public function contact()
    {
        return view('web.page.contact');
    }
    public function service()
    {
        $services = Service::all();
        return view('web.page.services', compact('services'));
    }
    public function notice()
    {
        $notices = Notice::all();
        return view('web.page.notices', compact('notices'));
    }
}
