<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::whereNull('parent_id')->get();
        return view('users' , compact('users'));
    }

    public static function recurringUsers($users)
    {
        echo '<ul>';
        foreach ($users as $user) {
            echo '<li>' . $user->name;
            if ($user->children->isNotEmpty()) {
                self::recurringUsers($user->children);
            }
            echo '</li>';
        }
        echo '</ul>';
    }
    public function clock(){
        return view('digitalclock');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
