<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Filter bots
        return view('event.index', ['page_views' => Event::selectRaw("COUNT(*) views, attribute page, DATE(created_at) date")->groupBy(['date', 'attribute'])->orderBy('date')
            ->where('useragent', 'not like', '%bot%')->where('useragent', 'not like', '%python-requests%')->where('useragent', 'not like', '%http%')->where('useragent', 'not like', '%node-fetch%')->where('useragent', 'not like', '%postman%')->where('useragent', 'not like', '%curl%')->get(), 'unique_visitors' => Event::selectRaw("COUNT(DISTINCT visitorid) unique_visitors, DATE(created_at) date")->groupBy(['date'])
            ->where('useragent', 'not like', '%bot%')->where('useragent', 'not like', '%python-requests%')->where('useragent', 'not like', '%http%')->where('useragent', 'not like', '%node-fetch%')->where('useragent', 'not like', '%postman%')->where('useragent', 'not like', '%curl%')->orderBy('date')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
