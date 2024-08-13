<?php

namespace App\Modules\Auth\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Auth\Service\AuthService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    protected $authService;

    public function __construct(AuthService $authService) {
        $this->authService = $authService;
    }

    public function login() {
        return view('auth.login');
    }



    public function register() {
        return view('auth.register');
    }

    public function loginpost(Request $request) {
        \Log::info("borjesh request:  ".json_encode($request->all()));

        $data = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:3',
        ]);
        \Log::info("brijesh before".json_encode($data));
        $response= $this->authService->loginpost($request->only('email', 'password'));
        \Log::info("brijesh after".json_encode($response));

        if($response){
            
            return redirect()->intended('/crm');
        }
        return redirect()->route('login');

    }

    public function registerpost(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $this->authService->create($data);
        return redirect()->route('login');
    }

    public function logout() {
        Auth::logout();
        return view('auth.login');
    }

    public function show($id) {
        $user = $this->authService->getById($id);
        return view('auth.show', compact('user'));
    }

    public function edit($id) {
        $user = $this->authService->getById($id);
        return view('auth.edit', compact('user'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if (empty($data['password'])) {
            unset($data['password']);
        }

        $this->authService->update($id, $data);
        return redirect()->route('Auth.index');
    }

    public function destroy($id) {
        $this->authService->delete($id);
        return redirect()->route('Auth.index');
    }
}
