<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Savings;
use App\Models\User;

class SavingController extends Controller
{
    public function index () {
        // $users = User::all();

        $savings = Savings::all();
        // dd($users);
        return view('savings/index', ['savings' => $savings]);
    }

    public function create () {
        // get id and name from users table and send with view
        $users = User::select('id', 'name')->get();
        return view('savings/create', ['users' => $users]);
    }
    public function store (Request $request) {

        $data = $request->validate([
            'user_id' => ['required', 'integer'],
            'name' => ['required'],
            'amount' => ['required'],
            'total' => ['required'],
            'month' => ['required'],
        ]);
        // dd($request);

        $newData = Savings::create($data);

        return redirect(route('savings.index'));
    }
}
