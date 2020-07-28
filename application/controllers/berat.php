 <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    class berat extends BD_Controller
    {
        public function berat_get()
        {
            $data = $this->db->get('berat');
            $this->response($data->result(), 200);
        }
        public function berat_post()
        {
            $data = $this->post();
            $result = $this->db->insert('berat', $data);
            $this->response($result, 200);
        }
        public function berat_put()
        {
            $data = $this->put();
            $id = $this->uri->segment(3);
            $this->db->where('id', $id);
            $result = $this->db->update('berat', $data);
            $this->response($result, 200);
        }
        public function berat_delete()
        {
            $id = $this->uri->segment(3);
            $this->db->where('id', $id);
            $result = $this->db->delete('berat');
            $this->response($result, 200);
        }
    }
