<?php

namespace App\Modules\Auth\Repository;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthRepository {

    public function getAll() {
        return User::all();
    }
    public function getByEmail($data) {
        // Find user by email
        $user = User::where('email', $data["email"])->first();
        if ($user && Hash::check($data["password"], $user->password)) {
        // Passwords match
            Auth::login($user);
            return true;
        } else {
            // Passwords do not match or user not found
            return false;
        }
    }

    public function getById($id) {
        return User::findOrFail($id);
    }

    public function create(array $data) {
        return User::create($data);
    }

    public function update($id, array $data) {
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id) {
        $user = User::findOrFail($id);
        $user->delete();
    }
}
