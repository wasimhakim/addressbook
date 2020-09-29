<?php
    class Redirect extends CI_model {

        public function insertData($data) {
            if(!empty($data)) {
                $data['pass'] = md5($data['pass']);
                if($this->db->insert('users', $data)) {
                    $data = $this->db->where('username', $data['username'])->get('users');
                    $result = $data->result();
                    $this->session->set_userdata('id', $result[0]->id);
                    $this->session->set_userdata('name', $result[0]->fullName);
                    return true;
                }
            }
        }

        public function verifyUser($data) {
            if(!empty($data)) {
                $data['pass'] = md5($data['pass']);
                $result = $this->db->where('username', $data['username'])
                                    ->where('pass', $data['pass'])
                                    ->get('users');
                if(count($result->result()) > 0) {
                    $this->session->set_userdata('name', $result->row()->fullName);
                    return $result->row()->id;
                } else {
                    return 0;
                }
            }
        }

        public function insertContact($data) {
            if(!empty($data)) {
                $data['user_id'] = $this->session->id;
                return $this->db->insert('contacts', $data);
            }
        }

        public function changePassword($data) {
            if(!empty($data)) {
                $data['oPass'] = md5($data['oPass']);
                $result = $this->db->where('id', $this->session->id)
                                    ->where('pass', $data['oPass'])
                                    ->get('users');
                if(count($result->result()) > 0) {
                    $newPass['pass'] = md5($data['nPass']);
                    return $this->db->where('id', $this->session->id)->update('users', $newPass);
                } else {
                    return 0;
                }
            }
        }

        public function insertAddress($data) {
            if(!empty($data)) {
                $result = $this->db->where('contact_id', $data['contact_id'])->get('adresses');
                if(count($result->result()) == 0) {
                    $data['status'] = "default"; 
                    return $this->db->insert('adresses', $data);
                } else {
                    $data['status'] = "normal"; 
                    return $this->db->insert('adresses', $data); 
                }
            }
        }

    }

?>