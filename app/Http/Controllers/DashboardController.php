<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Drink;
use App\Models\Order;
use App\Models\Receipt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Receipt::select(DB::raw("SUM(total_price) as count"), DB::raw("MONTHNAME(created_at) as month_name"),DB::raw('max(created_at) as createdAt'))
            ->whereYear('created_at', date('Y'))
            ->groupBy('month_name')
            ->orderBy('createdAt')
            ->get();

        $labels = [];
        $dataPoints = [];

        foreach ($data as $row) {
            $labels[] = $row->month_name;
            $dataPoints[] = $row->count;
        }
        $chartData = [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Số tiền đạt được theo tháng',
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                    'borderWidth' => 1,
                    'data' => $dataPoints,
                ],
            ],
        ];

        $categories = Category::all() -> count();
        $drinks = Drink::all() -> count();
        $users = User::all() -> count();
        $orders = Receipt::all() -> count();
        return view('admin/dashboard/index', [
            'categories' => $categories,
            'drinks' => $drinks,
            'users' => $users,
            'orders' => $orders,
            'chartData' => $chartData,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand, Request $request)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand, Request $request)
    {

    }
}
