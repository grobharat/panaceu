<?php

namespace App\Modules\Auth\Service;

use App\Modules\Auth\Repository\AuthRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthService {
    protected $authRepository;

    public function __construct(AuthRepository $authRepository) {
        $this->authRepository = $authRepository;
    }


    public function loginpost(array $data){
        $repsonse= $this->authRepository->getByEmail($data);
        if($repsonse){
            return true;
        }
        return false;
    }

    public function getAll() {
        return $this->authRepository->getAll();
    }

    public function getById($id) {
        return $this->authRepository->getById($id);
    }

    public function create(array $data) {
        return $this->authRepository->create($data);
    }

    public function update($id, array $data) {
        return $this->authRepository->update($id, $data);
    }

    public function delete($id) {
        return $this->authRepository->delete($id);
    }
}
