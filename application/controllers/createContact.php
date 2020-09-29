<?php
    class CreateContact extends AddressBook {

        public function index() {
            parent::checkId();

            $this->form_validation->set_rules(
                'name',
                'Full Name',
                'required|alpha_numeric_spaces|max_length[50]|min_length[4]'
            );

            $this->form_validation->set_rules(
                'email',
                'Email',
                'required|max_length[50]|min_length[10]|valid_email'
            );

            $this->form_validation->set_rules(
                'phone',
                'Phone Number',
                'required|max_length[10]|min_length[10]|numeric'
            );

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('createContact');
            } else {
                $userData = $this->input->post();
                if($this->redirect->insertContact($userData)) {
                    return redirect('http://127.0.0.1:12345/addressBook/contactlist');
                } else {
                    $this->load->view('signup');
                }
            }
        }
    }

?>