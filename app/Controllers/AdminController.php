<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function index()
    {
        return view('AdminHome', [
            "siswa" => model("Siswa")->findAll()
        ]);
    }

    public function tambah()
    {
        return view("admin/siswa/create");
    }

    public function store()
    {
        $data = [
            "nis" => $this->request->getVar("nis"),
            "nama" => $this->request->getVar("nama"),
            "kelas" => $this->request->getVar("kelas"),
            "tempat_lahir" => $this->request->getVar("tempat_lahir"),
            "tgl_lahir" => $this->request->getVar("tanggal_lahir"),
            "alamat" => $this->request->getVar("alamat"),
            "jenis_kelamin" => $this->request->getVar("jenis_kelamin"),
            "agama" => $this->request->getVar("agama"),
        ];
        dd($data);
        model("Siswa")->insert($data);

        return redirect("admin/siswa");
    }
}