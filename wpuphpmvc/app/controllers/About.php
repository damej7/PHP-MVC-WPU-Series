<?php

class About extends Controller
{
    public function index($nama = "Jaran", $pekerjaan = "Ya Allah iki piye ga onok error e loh tapi ga melaku gg gomang")
    {
        $data['judul'] = 'About Me';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        // var_dump($data);
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    // public function index()
    // {
    //     echo "controller tolmit";
    // }

    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('About/page', $data);
    }
}
