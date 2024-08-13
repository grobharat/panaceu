<?php

namespace App\Modules\Crm\Repository;

use App\Models\Country;
use App\Models\Customer;
use App\Models\State;
use App\Models\District;
use App\Models\Tehsil;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CrmRepository {
    public function getAll() {
        return User::all();
    }

    public function getById($id) {
        return User::findOrFail($id);
    }

    public function create(array $data) {
        return User::create($data);
    }

    public function update($id, array $data) {
        $data = User::findOrFail($id);
        $data->update($data);
        return $data;
    }

    public function delete($id) {
        $data = User::findOrFail($id);
        $data->delete();
    }

    public function getAllCountry() {
        return Country::all();
    }

    public function getByIdCountry($id) {
        return Country::findOrFail($id);
    }

    public function createCountry(array $data) {
        return Country::create($data);
    }

    public function updateCountry($id, array $data) {
        $data = Country::findOrFail($id);
        $data->update($data);
        return $data;
    }

    public function deleteCountry($id) {
        $data = Country::findOrFail($id);
        $data->delete();
    }

    public function getAllState() {
        //return State::all();
     return   State::with('country')->get();
    }

    public function getAllStateByCountryId($id) {
        return State::where('country_id','=',$id);
    }

    public function getByIdState($id) {
        return State::findOrFail($id);
    }

    public function createState(array $data) {
        return State::create($data);
    }

    public function updateState($id, array $data) {
        $data = State::findOrFail($id);
        $data->update($data);
        return $data;
    }

    public function deleteState($id) {
        $data = State::findOrFail($id);
        $data->delete();
    }

    public function getAllDistrict() {
       // return District::all();
     return  District::with('state.country')->get();
    }
    public function getAllDistrictByStateId($id) {
        return District::where('state_id','=',$id);
    }
    public function getByIdDistrict($id) {
        return District::findOrFail($id);
    }

    public function createDistrict(array $data) {
        return District::create($data);
    }

    public function updateDistrict($id, array $data) {
        $data = District::findOrFail($id);
        $data->update($data);
        return $data;
    }

    public function deleteDistrict($id) {
        $data = District::findOrFail($id);
        $data->delete();
    }

    public function getAllTehsil() {
        return Tehsil::all();
    }
    public function getAllTehsilByDistrictId($id) {
        return State::where('district_id','=',$id);
    }

    public function getByIdTehsil($id) {
        return Tehsil::findOrFail($id);
    }

    public function createTehsil(array $data) {
        return Tehsil::create($data);
    }

    public function updateTehsil($id, array $data) {
        $data = Tehsil::findOrFail($id);
        $data->update($data);
        return $data;
    }

    public function deleteTehsil($id) {
        $data = Tehsil::findOrFail($id);
        $data->delete();
    }
    public function getAllCustomer() {
        $selectField=[
            'customers.id as customerId',
            'parameters.name as key',
            'customer_details.parameter_value as value'
        ];
        $queryBuilder = Customer::query();
        $queryBuilder->select($selectField)
        ->join('customer_details', 'customer_details.customer_id', '=', 'customers.id')
        ->join('parameters', 'parameters.id', '=', 'customer_details.parameter_id')
        ->get();
        return $queryBuilder->get();

       // return  Customer::with('customer_details')->get();
    }
}
