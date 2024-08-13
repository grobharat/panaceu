<?php

namespace App\Modules\Crm\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Crm\Service\CrmService;

class DistrictController extends Controller {
    protected $crmService;

    public function __construct(CrmService $crmService) {
        $this->crmService = $crmService;
    }

    public function index() {
        $data = $this->crmService->getAllDistrict();
        return view('crm.district', compact('data'));
    }

    public function create() {
        return view('crm.createdistrict');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'iso_code' => 'required|string',

        ]);

        $this->crmService->createDistrict($data);
        return redirect()->route('crm.district');
    }

    public function show($id) {
        $data = $this->crmService->getById($id);
        return view('crm.showdistrict', compact('data'));
    }

    public function edit($id) {
        $data = $this->crmService->getByIdTehsil($id);
        return view('crm.editdistrict', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'iso_code' => 'required|string',
        ]);

        $this->crmService->update($id, $data);
        return redirect()->route('crm.district');
    }

    public function destroy($id) {
        $this->crmService->delete($id);
        return redirect()->route('crm.district');
    }
}
