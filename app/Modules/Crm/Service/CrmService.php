<?php

namespace App\Modules\Crm\Service;

use App\Modules\Crm\Repository\CrmRepository;

class CrmService {
    protected $crmRepository;

    public function __construct(CrmRepository $crmRepository) {
        $this->crmRepository = $crmRepository;
    }

    public function getAll() {
        return $this->crmRepository->getAll();
    }

    public function getById($id) {
        return $this->crmRepository->getById($id);
    }

    public function create(array $data) {
        return $this->crmRepository->create($data);
    }

    public function update($id, array $data) {
        return $this->crmRepository->update($id, $data);
    }

    public function delete($id) {
        return $this->crmRepository->delete($id);
    }


    public function getAllCountry() {
        return $this->crmRepository->getAllCountry();
    }

    public function getByIdCountry($id) {
        return $this->crmRepository->getByIdCountry($id);
    }

    public function createCountry(array $data) {
        return $this->crmRepository->createCountry($data);
    }

    public function updateCountry($id, array $data) {
        return $this->crmRepository->updateCountry($id, $data);
    }

    public function deleteCountry($id) {
        return $this->crmRepository->deleteCountry($id);
    }

    public function getAllState() {
        return $this->crmRepository->getAllState();
    }

    public function getAllStateByCountryId($id) {
        return $this->crmRepository->getAllStateByCountryId($id);
    }

    public function getByIdState($id) {
        return $this->crmRepository->getByIdState($id);
    }

    public function createState(array $data) {
        return $this->crmRepository->createState($data);
    }

    public function updateState($id, array $data) {
        return $this->crmRepository->updateState($id, $data);
    }

    public function deleteState($id) {
        return $this->crmRepository->deleteState($id);
    }

    public function getAllDistrict() {
        return $this->crmRepository->getAllDistrict();
    }
    public function getAllDistrictByStateId($id) {
        return $this->crmRepository->getAllDistrictByStateId($id);
    }


    public function getByIdDistrict($id) {
        return $this->crmRepository->getByIdDistrict($id);
    }

    public function createDistrict(array $data) {
        return $this->crmRepository->createDistrict($data);
    }

    public function updateDistrict($id, array $data) {
        return $this->crmRepository->updateDistrict($id, $data);
    }

    public function deleteDistrict($id) {
        return $this->crmRepository->deleteDistrict($id);
    }

    public function getAllTehsil() {
        return $this->crmRepository->getAllTehsil();
    }

    public function getAllTehsilByDistrictId($id) {
        return $this->crmRepository->getAllTehsilByDistrictId($id);
    }

    public function getByIdTehsil($id) {
        return $this->crmRepository->getByIdTehsil($id);
    }

    public function createTehsil(array $data) {
        return $this->crmRepository->createTehsil($data);
    }

    public function updateTehsil($id, array $data) {
        return $this->crmRepository->updateTehsil($id, $data);
    }

    public function deleteTehsil($id) {
        return $this->crmRepository->deleteTehsil($id);
    }

    public function getAllCustomer() {
        return $this->crmRepository->getAllCustomer();
    }
}
