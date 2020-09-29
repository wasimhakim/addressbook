<?php
    class Login extends AddressBook {

        public function index() {
            if(!isset($this->session->id)) {
                $this->session->set_userdata('id', 0);
            }
            $this->load->library('form_validation');

            $this->form_validation->set_rules(
                'username',
                'UserName',
                'required|alpha_numeric|max_length[20]|min_length[5]'
            );
            $this->form_validation->set_rules(
                'pass',
                'Password',
                'required|max_length[12]|min_length[8]'
            );

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login');
            } else {
                $this->load->model('redirect');
                $userData = $this->input->post();
                $id = $this->redirect->verifyUser($userData);
                if($id > 0) {
                    $this->session->set_userdata('id', $id);
                    return redirect('http://127.0.0.1:12345/addressBook/contactlist');
                } else {
                    $this->load->view('login');
                }
                
            }
        }
    }

?>