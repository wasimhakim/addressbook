<?php 
    class Logout extends AddressBook {
        public function index() {
            $this->session->sess_destroy();
            redirect('http://127.0.0.1:12345/addressBook/login');
        }
    }

?>