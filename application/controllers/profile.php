<?php 
    class Profile extends AddressBook  {

        public function index() {
            parent::checkId();

            $contact_id = $_GET['id'];
            $data = $this->db->where('id', $contact_id)
                             ->get('contacts');
            $result['contacts'] = $data->result();
            $data = $this->db->where('contact_id', $contact_id)
                                ->get('adresses');
            $result['addresses'] = $data->result();
            $this->load->view('profile', $result);
        }
    }

?>