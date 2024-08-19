<?php

namespace App\Modules\Blog\Service;

use App\Modules\Blog\Repository\BlogRepository;

class BlogService {
    protected $blogRepository;

    public function __construct(BlogRepository $blogRepository) {
        $this->blogRepository = $blogRepository;
    }

    public function getAll() {
        return $this->blogRepository->getAll();
    }

    public function getById($id) {
        return $this->blogRepository->getById($id);
    }

    public function create(array $data) {
        return $this->blogRepository->create($data);
    }

    public function update($id, array $data) {
        return $this->blogRepository->update($id, $data);
    }

    public function delete($id) {
        return $this->blogRepository->delete($id);
    }


    public function getAllCountry() {
        return $this->blogRepository->getAllCountry();
    }

    public function getByIdCountry($id) {
        return $this->blogRepository->getByIdCountry($id);
    }

    public function createCountry(array $data) {
        return $this->blogRepository->createCountry($data);
    }

    public function updateCountry($id, array $data) {
        return $this->blogRepository->updateCountry($id, $data);
    }

    public function deleteCountry($id) {
        return $this->blogRepository->deleteCountry($id);
    }

    public function getAllState() {
        return $this->blogRepository->getAllState();
    }

    public function getAllStateByCountryId($id) {
        return $this->blogRepository->getAllStateByCountryId($id);
    }

    public function getByIdState($id) {
        return $this->blogRepository->getByIdState($id);
    }

    public function createState(array $data) {
        return $this->blogRepository->createState($data);
    }

    public function updateState($id, array $data) {
        return $this->blogRepository->updateState($id, $data);
    }

    public function deleteState($id) {
        return $this->blogRepository->deleteState($id);
    }

    public function getAllDistrict() {
        return $this->blogRepository->getAllDistrict();
    }
    public function getAllDistrictByStateId($id) {
        return $this->blogRepository->getAllDistrictByStateId($id);
    }


    public function getByIdDistrict($id) {
        return $this->blogRepository->getByIdDistrict($id);
    }

    public function createDistrict(array $data) {
        return $this->blogRepository->createDistrict($data);
    }

    public function updateDistrict($id, array $data) {
        return $this->blogRepository->updateDistrict($id, $data);
    }

    public function deleteDistrict($id) {
        return $this->blogRepository->deleteDistrict($id);
    }

    public function getAllTehsil() {
        return $this->blogRepository->getAllTehsil();
    }

    public function getAllTehsilByDistrictId($id) {
        return $this->blogRepository->getAllTehsilByDistrictId($id);
    }

    public function getByIdTehsil($id) {
        return $this->blogRepository->getByIdTehsil($id);
    }

    public function createTehsil(array $data) {
        return $this->blogRepository->createTehsil($data);
    }

    public function updateTehsil($id, array $data) {
        return $this->blogRepository->updateTehsil($id, $data);
    }

    public function deleteTehsil($id) {
        return $this->blogRepository->deleteTehsil($id);
    }

    public function getAllCustomer() {
        return $this->blogRepository->getAllCustomer();
    }
}
