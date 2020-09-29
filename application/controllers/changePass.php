<?php
    class ChangePass extends AddressBook {
        public function index() {
            parent::checkId();

            $this->form_validation->set_rules(
                'oPass',
                'Old Password',
                'required|max_length[20]|min_length[8]'
            );

            $this->form_validation->set_rules(
                'nPass',
                'New Password',
                'required|max_length[20]|min_length[8]'
            );

            $this->form_validation->set_rules(
                'cPass',
                'Confirm Password',
                'required|max_length[20]|min_length[8]|matches[nPass]'
            );

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('changePass');
            } else {
                $this->load->model('redirect');
                $userData = $this->input->post();
                unset($userData['cPass']);
                if($this->redirect->changePassword($userData)) {
                    return redirect('http://127.0.0.1:12345/addressBook/contactlist');
                } else {
                    $this->load->view('changePass');
                }
            }
        }
    }

?>