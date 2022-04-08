<?php
class Rollercoasters extends Controller {
    public function __construct() {
        $this->rollercoastersModel = $this->model('Rollercoaster');
    }

    public function index() {
        $rollercoaster = $this->rollercoastersModel->getRollercoasters();
        
        $data = [
            'title' => 'Home page',
            'users' => $rollercoaster
        ];

        $this->view('/rollercoasters/index', $data);
    }
}
