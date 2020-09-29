<?php 
    class MakeDefault extends AddressBook {
        public function index() {
            $data['status'] = "normal";
            $update = $this->db->where('contact_id', $_GET['mid'])
                        ->where('status', 'default')
                        ->update('adresses', $data);
            if($update) {
                $data['status'] = "default";
                $new = $this->db->where('id', $_GET['id'])->update('adresses', $data);
                if($new) {
                    redirect("http://127.0.0.1:12345/addressBook/profile?id=".$_GET['mid']);
                } else {

                }
            }
        }
    }

?>