<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ObatModel;

class Obat extends ResourceController
{
    protected $modelName = 'App\Models\ObatModel';
    protected $format    = 'json';

    // GET /obat
    public function index()
    {
        $data = [
            'message' => 'success',
            'data_obat' => $this->model->orderBy('id', 'DESC')->findAll()
        ];

        return $this->respond($data, 200);
    }

    // GET /obat/{id}
    public function show($id = null)
    {
        $data = [
            'message' => 'success',
            'obat_byid' => $this->model->find($id)
        ];

        if ($data['obat_byid'] == null) {
            return $this->failNotFound('Data obat tidak ditemukan');
        }

        return $this->respond($data, 200);
    }

    // POST /obat
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
            return $this->failNotFound("Obat dengan ID $id tidak ditemukan");
        }

        $data = $this->request->getJSON(true);
        if ($this->model->update($id, $data)) {
            return $this->respond([
                'status' => 200,
                'message' => "Data obat berhasil diupdate"
            ]);
        }
        return $this->failValidationErrors($this->model->errors());
    }

    // DELETE /obat/{id}
    public function delete($id = null)
    {
        $existing = $this->model->find($id);
        if (!$existing) {
            return $this->failNotFound("Obat dengan ID $id tidak ditemukan");
        }

        $this->model->delete($id);
        return $this->respondDeleted([
            'status' => 200,
            'message' => "Data obat berhasil dihapus"
        ]);
    }
}
