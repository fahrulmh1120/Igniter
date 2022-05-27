<?php


class Homepage extends CI_Controller
{

    public function hmpage()
    {
        $this->load->view("home");
    }

    public function tampil()
    {
       $data = [
        'username' => $this->input->post('username')
        ];

        $this -> load ->view ('mainpage',$data);
    }
}
