<?php

class About extends Controller
{
    public function index($url = "index")
    {
        $data = [
            "title" => "About",
            "header" => "About",
            "name" => "Muhamad Daffa Maulana Arrasyid",
            "url" => $url

        ];

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');

    }
    public function page()
    {
        $data = [
            "title" => "Page",
            "header" => "Page",
            "name" => "Muhamad Daffa Maulana Arrasyid"

        ];

        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer');
    }
}
