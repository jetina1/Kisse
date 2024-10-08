<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Expense;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $incomeData = Income::select(DB::raw('SUM(amount) as total_income, MONTH(entry_date) as month'))
            ->groupBy('month')
            ->get();

        $expenseData = Expense::select(DB::raw('SUM(amount) as total_expense, MONTH(entry_date) as month'))
            ->groupBy('month')
            ->get();
        return view('admin.dashboard', compact('incomeData', 'expenseData'));
    }

}
