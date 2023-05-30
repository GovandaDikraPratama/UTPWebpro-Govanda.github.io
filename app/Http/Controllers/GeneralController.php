<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function dashboard() {
        $totalEmployee = count(Employee::all());
        return view('general.v-dashboard', [
            'totalAdmin' => count(User::where('role', 2)->get()),
            'totalWages' => 4300000 * $totalEmployee,
            'totalEmployee' => $totalEmployee
        ]);
    }
}
