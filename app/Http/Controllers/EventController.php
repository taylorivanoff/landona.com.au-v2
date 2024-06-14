<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $range = $request->get('range', 'all_time');

        $pageViewsQuery = Event::selectRaw("COUNT(*) views, attribute page, DATE(created_at) date")
            ->groupBy(['date', 'attribute'])
            ->where('useragent', 'not like', '%bot%')
            ->where('useragent', 'not like', '%python-requests%')
            ->where('useragent', 'not like', '%http%')
            ->where('useragent', 'not like', '%node-fetch%')
            ->where('useragent', 'not like', '%postman%')
            ->where('useragent', 'not like', '%curl%')
            ->orderBy('date');

        $uniqueVisitorsQuery = Event::selectRaw("COUNT(DISTINCT visitorid) views, 'unique' as page, DATE(created_at) date")
            ->groupBy('date')
            ->where('useragent', 'not like', '%bot%')
            ->where('useragent', 'not like', '%python-requests%')
            ->where('useragent', 'not like', '%http%')
            ->where('useragent', 'not like', '%node-fetch%')
            ->where('useragent', 'not like', '%postman%')
            ->where('useragent', 'not like', '%curl%')
            ->orderBy('date');

        switch ($range) {
            case 'last_week':
                $pageViewsQuery->where('created_at', '>=', Carbon::now()->subWeek());
                $uniqueVisitorsQuery->where('created_at', '>=', Carbon::now()->subWeek());
                break;
            case 'last_month':
                $pageViewsQuery->where('created_at', '>=', Carbon::now()->subMonth());
                $uniqueVisitorsQuery->where('created_at', '>=', Carbon::now()->subMonth());
                break;
        }

        $pageViews = $pageViewsQuery->get();
        $uniqueVisitors = $uniqueVisitorsQuery->get();

        return view('pages.dashboard.admin.events', [
            'page_views' => json_encode($pageViews),
            'unique_visitors' => json_encode($uniqueVisitors)
        ]);
    }

    public function data(Request $request)
    {
        $range = $request->get('range', 'all_time');

        $pageViewsQuery = Event::selectRaw("COUNT(*) views, attribute page, DATE(created_at) date")
            ->groupBy(['date', 'attribute'])
            ->where('useragent', 'not like', '%bot%')
            ->where('useragent', 'not like', '%python-requests%')
            ->where('useragent', 'not like', '%http%')
            ->where('useragent', 'not like', '%node-fetch%')
            ->where('useragent', 'not like', '%postman%')
            ->where('useragent', 'not like', '%curl%')
            ->orderBy('date');

        $uniqueVisitorsQuery = Event::selectRaw("COUNT(DISTINCT visitorid) views, 'unique' as page, DATE(created_at) date")
            ->groupBy('date')
            ->where('useragent', 'not like', '%bot%')
            ->where('useragent', 'not like', '%python-requests%')
            ->where('useragent', 'not like', '%http%')
            ->where('useragent', 'not like', '%node-fetch%')
            ->where('useragent', 'not like', '%postman%')
            ->where('useragent', 'not like', '%curl%')
            ->orderBy('date');

        switch ($range) {
            case 'last_week':
                $pageViewsQuery->where('created_at', '>=', Carbon::now()->subWeek());
                $uniqueVisitorsQuery->where('created_at', '>=', Carbon::now()->subWeek());
                break;
            case 'last_month':
                $pageViewsQuery->where('created_at', '>=', Carbon::now()->subMonth());
                $uniqueVisitorsQuery->where('created_at', '>=', Carbon::now()->subMonth());
                break;
        }

        $pageViews = $pageViewsQuery->get();
        $uniqueVisitors = $uniqueVisitorsQuery->get();

        return response()->json([
            'pageViews' => $pageViews,
            'uniqueVisitors' => $uniqueVisitors
        ]);
    }
}
