<?php

namespace App\Modules\Crm\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Crm\Service\CrmService;

class CountryController extends Controller {
    protected $crmService;

    public function __construct(CrmService $crmService) {
        $this->crmService = $crmService;
    }

    public function index() {
        $data = $this->crmService->getAllCountry();
        return view('crm.country', compact('data'));
    }

    public function create() {
        return view('crm.createcountry');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'iso_code' => 'required|string',

        ]);

        $this->crmService->createCountry($data);
        return redirect()->route('crm.country');
    }

    public function show($id) {
        $data = $this->crmService->getById($id);
        return view('crm.showcountry', compact('data'));
    }

    public function edit($id) {
        $data = $this->crmService->getById($id);
        return view('crm.editcountry', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'iso_code' => 'required|string',
        ]);

        $this->crmService->update($id, $data);
        return redirect()->route('crm.country');
    }

    public function destroy($id) {
        $this->crmService->delete($id);
        return redirect()->route('crm.country');
    }
}
