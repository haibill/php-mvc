<?php

class Students extends Controller {

    public function index() {
        $data['title']  = ucwords('list students');
        $data['result'] = $this->model('Student_model')->getAll();
        $this->view('layouts/header', $data);
        $this->view('students/index', $data);
        $this->view('students/modal-add');
        $this->view('layouts/footer');
    }

    public function show($id) {
        $data['title']  = ucwords('detail students');
        $data['result'] = $this->model('Student_model')->getOne($id);
        $this->view('layouts/header', $data);
        $this->view('students/show', $data);
        $this->view('layouts/footer');
    }

    public function create() {
        if ( $this->model('Student_model')->insert($_POST) > 0 ) {
            Flasher::setFlash('OK', 'Student data was successfully created', 'success');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
        else {
            Flasher::setFlash('OPS', 'Student data failed to be generated', 'danger');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
    }

    public function edit() {
        echo json_encode($this->model('Student_model')->getOne($_POST['id']));
    }

    public function change() {
        if ( $this->model('Student_model')->update($_POST) > 0 ) {
            Flasher::setFlash('OK', 'Student data was successfully updated', 'success');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
        else {
            Flasher::setFlash('OPS', 'Nothing to be change', 'danger');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
    }

    public function destroy($id) {
        if ( $this->model('Student_model')->delete($id) > 0 ) {
            Flasher::setFlash('OK', 'Student data was successfully deleted', 'success');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
        else {
            Flasher::setFlash('OPS', 'Student data failed to be delete', 'danger');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
    }
}