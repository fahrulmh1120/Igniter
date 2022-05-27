<?php


class Test extends CI_Controller
{
    public function index()
    {
        echo "This is default fuction. 3411191037 - Mohammad Fakhrul Hidayat - Ini Class Index";
    }

    public function hello(){
        echo "This is hello funciton. 3411191037 - Mohammad Fakhrul Hidayat - Ini Class hello";
    }

    public function view(){
        $this -> load -> view('test');
    }

    public function profil(){
        $this -> load -> helper("url");
        $this->load->view("profile");
        }
}
