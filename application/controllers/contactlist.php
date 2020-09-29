<?php 
    class ContactList extends AddressBook {
        public function index() {
            parent::checkId();

            $data = $this->db->where('user_id', $this->session->id)->get('contacts');
            $result['contacts'] = $data->result();
            for($i = 0; $i < count($result['contacts']); $i++) {
                $data = $this->db->where('contact_id', $result['contacts'][$i]->id)
                             ->where('status', 'default')                
                             ->get('adresses');
                $result['address'][$i] = $data->result();
            }
            $this->load->view('contactlist', $result);
        }
    }

?>