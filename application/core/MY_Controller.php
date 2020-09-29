<?php 
    class AddressBook extends CI_Controller {
        public function checkId() {
            if($this->session->id <= 0) {
                redirect('http://127.0.0.1:12345/addressBook/login');
            }
        }
    }
?>