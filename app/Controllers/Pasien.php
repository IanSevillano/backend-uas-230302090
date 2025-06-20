<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ObatModel;

class Pasien extends ResourceController
{
    protected $modelName = 'App\Models\PasienModel';
    protected $format    = 'json';

    // GET /pasien
    public function index()
    {
        $data = [
            'message' => 'success',
            'data_pasien' => $this->model->orderBy('id', 'DESC')->findAll()
        ];

        return $this->respond($data, 200);
    }

    // GET /pasien/{id}
    public function show($id = null)
    {
        $data = [
            'message' => 'success',
            'pasien_byid' => $this->model->find($id)
        ];

        if ($data['pasien_byid'] == null) {
            return $this->failNotFound('Data pasien tidak ditemukan');
        }

        return $this->respond($data, 200);
    }

    // POST /pasien
    public function create()
{
    $data = $this->request->getJSON(true);
    if ($this->model->insert($data)) {
        return $this->respondCreated($data);
    }
    return $this->failValidationErrors($this->model->errors());
}


    // PUT /pasien/{id}
    public function update($id = null)
    {
        $existing = $this->model->find($id);
        if (!$existing) {
            return $this->failNotFound("Pasien dengan ID $id tidak ditemukan");
        }

        $data = $this->request->getJSON(true);
        if ($this->model->update($id, $data)) {
            return $this->respond([
                'status' => 200,
                'message' => "Data pasien berhasil diupdate"
            ]);
        }
        return $this->failValidationErrors($this->model->errors());
    }

    // DELETE /pasien/{id}
    public function delete($id = null)
    {
        $existing = $this->model->find($id);
        if (!$existing) {
            return $this->failNotFound("Pasien dengan ID $id tidak ditemukan");
        }

        $this->model->delete($id);
        return $this->respondDeleted([
            'status' => 200,
            'message' => "Data pasien berhasil dihapus"
        ]);
    }
}
