<?php

namespace App\Modules\Crm\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Crm\Service\CrmService;

class StateController extends Controller {
    protected $crmService;

    public function __construct(CrmService $crmService) {
        $this->crmService = $crmService;
    }

    public function index() {
        $data = $this->crmService->getAllState();
        return view('crm.state', compact('data'));
    }

    public function create() {
        return view('crm.createstate');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'iso_code' => 'required|string',

        ]);

        $this->crmService->createState($data);
        return redirect()->route('crm.state');
    }

    public function show($id) {
        $data = $this->crmService->getById($id);
        return view('crm.showstate', compact('data'));
    }

    public function edit($id) {
        $data = $this->crmService->getById($id);
        return view('crm.editstate', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'iso_code' => 'required|string',
        ]);

        $this->crmService->update($id, $data);
        return redirect()->route('crm.state');
    }

    public function destroy($id) {
        $this->crmService->delete($id);
        return redirect()->route('crm.state');
    }
}
