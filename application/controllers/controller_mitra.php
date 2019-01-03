<?php

class controller_mitra extends CI_Controller{
    function __construct()
	{
		parent:: __construct();
		$this->load->helper('html');
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Model');
    }

    public function Register_mitra()
    {
         $this->load->view('Register_mitra');
    }

    public function Reg_Proces()
    {
        $val_register = array(
                            array(
                                'field' => 'name',
                                'label' => 'name',
                                'rules' => 'required',
                                'error' => array('required' => 'Harap isi'),
                            ),
                            array(
                                'field' => 'email',
                                'label' => 'email',
                                'rules' => 'required|is_unique[user.email]',
                                'error' => array('required' => 'Harap isi',
                                                 'is_unique' => 'email sudah terdaftar'),
                                ),
                            array(
                                'field' => 'password',
                                'label' => 'password',
                                'rules' => 'required|min_length[8]',
                                'error' => array('required' => 'Password belum terisi',
                                                 'min_length' => 'Password minimal 8 karakter'),
                                ),
                            array(
                                'field' => 'cpassword',
                                'label' => 'cpassword',
                                'rules' => 'required|matches[password]',
                                'error' => array('required' => 'Harus diisi',
                                                 'matches'=>'Password tidak sesuai')
                            ),
                            array(
                                'field' => 'alamat',
                                'label' => 'alamat',
                                'rules' => 'required',
                                'error' => array('required'=> 'Harus diisi')
                            ),
                            array(
                                'field' => 'jenis_printer',
                                'label' => 'jenis_printer',
                                'rules' => 'required',
                                'error' => array('required'=> 'Harus diisi')
                            ),
                            array(
                                'field' => 'foto_mitra',
                                'label' => 'foto_mitra'
                            ),
                            array(
                                'field' => 'foto_ktp',
                                'label' => 'foto_ktp'
                            ),
                            array(
                                'field' => 'mitra_hp',
                                'label' => 'mitra_hp',
                                'rules' => 'required',
                                'error' => array('required' => 'Harus diisi')
                            ),

                        );

            $this->form_validation->set_rules($val_register);

            if($this->form_validation->run()==FALSE){
                $this->load->view('Register_mitra');
            }else{
            
                $data_mitra = array(
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'alamat' => $this->input->post('alamat'),
                    'jenis_printer' => $this->input->post('jenis_printer'),
                    'mitra_hp' => $this->input->post('mitra_hp'),
                    'foto_mitra' => $this->upload('foto_mitra'),
                    'foto_ktp' => $this->upload('foto_ktp'),

                );
                $this->Model->insert_mitra($data_mitra);
                $this->load->view('Login_mitra');
        
            }

    }

    public function Login_mitra()
    {
        $this->load->view('Login_mitra');
    }

    public function log_proces()
    {
        $val_login = array(     
            array(
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required',
                'error' => array('required'=>'Email tidak boleh kosong'),
        
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'error' => array('required'=>'Password harus diisi'),
            ),
        );
            $this->form_validation->set_rules($val_login);

            if($this->form_validation->run()==FALSE){
            $this->load->view('Login_mitra');
            }else{
            $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
            );
            $result = $this->Model->LoginMitra($data);
            if($result==true){
            $email = $this->input->post('email');
            $result = $this->Model->bandingkanMitra($email);
            if($result!=false){
                $session_data = array(
                    'email' => $result[0]->email,
                    'name' => $result[0]->nama,
                    // var_dump($result)
                    );
            $this->session->set_userdata($session_data);
            $this->load->view('Home');
            }else{
                echo '<script>alert("Username dan Password anda tidak cocok");</script>';
                redirect ('controller_mitra/Login_mitra','refresh');
            }
            }else{
            echo '<script>alert("Terjadi kesalahan :(");</script>';
            redirect ('controller_user/Login','refresh');
            }

            }        # code...
    }

    public function Home_mitra()
    {
        # code...
    }

    public function upload($namefile)
    {
        

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            
        $this->load->library('upload');
        $this->upload->initialize($config);
            
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload($namefile)) {
                $error = array('error' => $this->upload->display_errors());
            return false;
            // $this->load->view('upload_form', $error);
            } else {
            $data = array('upload_data' => $this->upload->data());
            return true;
            //$this->load->view('upload_success', $data);
            }
        }

}