<?php // <--- INI WAJIB ADA AGAR KODE BERWARNA DAN JALAN

class Auth extends Controller {
    public function index() {
        $this->view('auth/index');
    }

    public function login() {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        // Username & Password darurat agar bisa masuk
        if($user == 'admin' && $pass == 'admin') {
            header('Location: ' . BASEURL . '/Dashboard');
            exit;
        } else {
            header('Location: ' . BASEURL . '/Auth');
            exit;
        }
    }
}