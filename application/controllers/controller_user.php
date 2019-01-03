<?php

class controller_user extends CI_Controller
{
    function __construct()
	{
		parent:: __construct();
        $this->load->helper('html');
        $this->load->helper('html');
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Model');
    }
    
    public function Home(){
        $this->load->view('Home');
    }

    public function Register()
    {
        $this->load->view('Register');
    }

    public function Login()
    {
        $this->load->view('Login');
    }

    public function login_process()
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
                                'label' => 'label',
                                'rules' => 'required',
                                'error' => array('required'=>'Password harus diisi'),
                            ),
                        );
        $this->form_validation->set_rules($val_login);

        if($this->form_validation->run()==FALSE){
            $this->load->view('Login');
        }else{
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            $result = $this->Model->Login($data);
            if($result==true){
                $email = $this->input->post('email');
                $result = $this->Model->bandingkan($email);
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
                    redirect ('controller_user/Login','refresh');
                }
            }else{
                echo '<script>alert("Terjadi kesalahan :(");</script>';
                redirect ('controller_user/Login','refresh');
            }

        }
    }

    public function register_user()
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
                                'field' => 'user_hp',
                                'label' => 'user_hp',
                                'rules' => 'required',
                                'error' => array('required' => 'Harus diisi')
                            ),
                            array(
                                'field' => 'foto_user',
                                'label' => 'foto_user'
                            ),

                        );

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 2048;
            $config['max_width'] = 0;
            $config['max_height'] = 0;

            $this->form_validation->set_rules($val_register);
            $this->load->library('upload');
            $this->upload->initialize($config);

            if($this->form_validation->run()==FALSE){
                $this->load->view('Register');
            }else{
                $this->upload->do_upload('foto_user');
                $data_upload=$this->upload->data();
                $image_path = $data_upload['full_path'];
                $data = array(
                    'email' => $this->input->post('email'),
                    'nama' => $this->input->post('name'),
                    'password' => $this->input->post('password'),
                    'alamat' => $this->input->post('alamat'),
                    'user_hp' => $this->input->post('user_hp'),
                    'foto_user' => $image_path,
                );
                $this->Model->insert_User($data);
                $this->load->view('Login');
        
            }
    }

    public function Lokasi()
    {
        # code...
    }

    public function Mitra()
    {
        # code...
    }

    public function Upload()
    {
        # code...
    }

    public function showMitra()
    {
        # code...
    }


}
?>