<?php

namespace App\Modules\Crm\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Crm\Service\CrmService;

class CustomerController extends Controller {
    protected $crmService;

    public function __construct(CrmService $crmService) {
        $this->crmService = $crmService;
    }

    public function index() {
        $headers=$this->crmService->getHeaders("customer");
        $data = $this->crmService->getCustomerWithDetails();

       // dd($data);
        return view('crm.customer', ['datas'=>$data,'headers'=>$headers]);
    }

    public function create() {
        return view('crm.createtehsil');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'iso_code' => 'required|string',

        ]);

        $this->crmService->createTehsil($data);
        return redirect()->route('crm.tehsil');
    }

    public function show($id) {
        $data = $this->crmService->getById($id);
        return view('crm.showtehsil', compact('data'));
    }

    public function edit($id) {
        $data = $this->crmService->getById($id);
        return view('crm.edittehsil', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'iso_code' => 'required|string',
        ]);

        $this->crmService->update($id, $data);
        return redirect()->route('crm.tehsil');
    }

    public function destroy($id) {
        $this->crmService->delete($id);
        return redirect()->route('crm.tehsil');
    }
}
