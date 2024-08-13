<?php

namespace App\Modules\Crm\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Crm\Service\CrmService;

class CrmController extends Controller {
    protected $crmService;

    public function __construct(CrmService $crmService) {
        $this->crmService = $crmService;
    }

    public function index() {
        $users = $this->crmService->getAll();
        return view('crm.dashboard', compact('users'));
    }

    public function create() {
        return view('crm.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $this->crmService->create($data);
        return redirect()->route('Crm.index');
    }

    public function show($id) {
        $user = $this->crmService->getById($id);
        return view('crm.show', compact('user'));
    }

    public function edit($id) {
        $user = $this->crmService->getById($id);
        return view('crm.edit', compact('user'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if (empty($data['password'])) {
            unset($data['password']);
        }

        $this->crmService->update($id, $data);
        return redirect()->route('Crm.index');
    }

    public function destroy($id) {
        $this->crmService->delete($id);
        return redirect()->route('Crm.index');
    }
}
