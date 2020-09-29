<?php 
    class AddAddress extends AddressBook {
        public function index() {
            parent::checkId();

            $this->form_validation->set_rules(
                'address',
                'Address',
                'required|alpha_numeric_spaces|max_length[50]|min_length[4]'
            );

            $this->form_validation->set_rules(
                'city',
                'City',
                'required|alpha_numeric_spaces|max_length[50]|min_length[4]'
            );

            $this->form_validation->set_rules(
                'state',
                'State',
                'required|alpha_numeric_spaces|max_length[50]|min_length[4]'
            );

            $this->form_validation->set_rules(
                'country',
                'Country',
                'required|alpha_numeric_spaces|max_length[50]|min_length[4]'
            );

            $this->form_validation->set_rules(
                'pincode',
                'Pincode',
                'required|numeric|max_length[10]|min_length[4]'
            );


            if ($this->form_validation->run() == FALSE) {
                $this->load->view('addAddress');
            } else {
                $this->load->model('redirect');
                $userData = $this->input->post();
                $userData['contact_id'] = $_GET['id'];
                print_r($userData);
                if($this->redirect->insertAddress($userData)) {
                    return redirect('http://127.0.0.1:12345/addressBook/profile?id='.$_GET['id']);
                } else {
                    $this->load->view('addAddress');
                }
            }
        }
    }

?>