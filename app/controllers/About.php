<?php

class About extends Controller {
    public function index($name = 'Muhammad Balyan', $job = 'Programmer', $age = 22) {
        $data['title'] = ucwords('about');
        $data['name']  = $name;
        $data['job']   = $job;
        $data['age']   = $age;
        $this->view('layouts/header', $data);
        $this->view('about/index', $data);
        $this->view('layouts/footer');
    }

    public function page() {
        $data['title'] = ucwords('my pages');
        $this->view('layouts/header', $data);
        $this->view('about/page', $data);
        $this->view('layouts/footer');
    }
}