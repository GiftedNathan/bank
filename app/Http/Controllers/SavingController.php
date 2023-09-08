<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Savings;
use App\Models\User;

class SavingController extends Controller
{
    public function index () {
        // get all savings record and send with view
        $savings = Savings::all();
        return view('savings/index', ['savings' => $savings]);
    }

    public function create () {
        // get id and name culums from users table and send with view
        $users = User::select('id', 'name')->get();
        return view('savings/create', ['users' => $users]);
    }
    public function store (Request $request) {
        // get the detail of the user using the id from request.
        $user = User::find($request->user_id);

        $data = $request->validate([
            'user_id' => ['required', 'integer'],
            // 'name' => ['required'],
            'amount' => ['required'],
            'month' => ['required'],
        ]);

        // add user name from user details to data before saving
        $data['name'] = $user->name;

        $newData = Savings::create($data);

        return redirect(route('savings.index'));
    }
}
