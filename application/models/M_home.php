<?php

class M_home extends CI_Model
{
    public function tampilMahasiswa()
    {
        return $this->db->query("SELECT * FROM mahasiswa ORDER BY id_mhs DESC")->result_array();
    }

    public function detailMahasiswa($id_mhs)
    {
        return $this->db->query("SELECT * FROM mahasiswa WHERE id_mhs='$id_mhs' LIMIT 1")->row_array();
    }

    public function hapusmhs($id_mhs)
    {
        return $this->db->query("DELETE FROM mahasiswa WHERE id_mhs='$id_mhs'");
    }

    public function tambahmhs()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "universitas" => $this->input->post('universitas', true),
            "fakultas" => $this->input->post('fakultas', true),
            "jurusan" => $this->input->post('jurusan', true),
            "tahun" => $this->input->post('tahun', true),
            "proker1" => $this->input->post('proker1', true),
            "proker2" => $this->input->post('proker2', true),
        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function ambilDataMahasiswa($id_mhs)
    {
        return $this->db->get_where('mahasiswa', ['id_mhs' => $id_mhs])->row_array();
    }

    public function editmhs()
    {
        $data = [
            "universitas" => $this->input->post('universitas', true),
            "fakultas" => $this->input->post('fakultas', true),
            "jurusan" => $this->input->post('jurusan', true),
            "tahun" => $this->input->post('tahun', true),
            "proker1" => $this->input->post('proker1', true),
            "proker2" => $this->input->post('proker2', true),
        ];

        $this->db->where('id_mhs', $this->input->post('id_mhs'));
        $this->db->update('mahasiswa', $data);
    }
}
