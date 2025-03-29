<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function getUsers() {
        $users = [
            ['id' => 1, 'name' => 'Daniel', 'email' => 'daniel@example.com'],
            ['id' => 2, 'name' => 'Alice', 'email' => 'alice@example.com']
        ];
        return response()->json($users);
    }
}
