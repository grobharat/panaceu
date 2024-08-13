<?php

namespace App\Modules\Website\Service;

use App\Modules\Website\Repository\WebsiteRepository;

class WebsiteService {
    protected $websiteRepository;

    public function __construct(WebsiteRepository $websiteRepository) {
        $this->websiteRepository = $websiteRepository;
    }

    public function getAll() {
        return $this->websiteRepository->getAll();
    }

    public function getById($id) {
        return $this->websiteRepository->getById($id);
    }

    public function create(array $data) {
        return $this->websiteRepository->create($data);
    }

    public function update($id, array $data) {
        return $this->websiteRepository->update($id, $data);
    }

    public function delete($id) {
        return $this->websiteRepository->delete($id);
    }
}
