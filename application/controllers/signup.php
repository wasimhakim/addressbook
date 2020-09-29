<?php 
    class SignUp extends AddressBook {

        public function index() {

            $this->form_validation->set_rules(
                'fullName',
                'Full Name',
                'required|alpha_numeric_spaces|max_length[50]|min_length[4]'
            );

            $this->form_validation->set_rules(
                'username',
                'UserName',
                'required|alpha_numeric|max_length[20]|min_length[5]|is_unique[users.username]'
            );

            $this->form_validation->set_rules(
                'pass',
                'Password',
                'required|max_length[20]|min_length[8]'
            );

            $this->form_validation->set_rules(
                'cPass',
                'Confirm Password',
                'required|max_length[20]|min_length[8]|matches[pass]'
            );

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('signup');
            } else {
                $this->load->model('redirect');
                $userData = $this->input->post();
                unset($userData['cPass']);
                if($this->redirect->insertData($userData)) {
                    return redirect('http://127.0.0.1:12345/addressBook/contactlist');
                } else {
                    $this->load->view('signup');
                }
            }
        }

    }

?>