<?php 

    // class About extends Controller{
    //     public function index($nama='Adnan Zainal Arifin', $jenis_kelamin='L'){
    //         $data[title]= 'My Page';
    //         $this -> view("teamplate/header", $data);
    //         $this -> view('aboute/index');
    //         $this -> view('teamplate/footer');
    //     }

    //     public function page(){
    //         $data[title]= 'My Page';
    //         $this -> view("teamplate/header", $data);
    //         $this -> view('aboute/index');
    //         $this -> view('teamplate/footer');
    //     }
    // } ;
        class About extends controller{
            public function index ($nama = 'Adnan Zainal Arifin', $pekerjaan = 'Mahasiswa Ndoning', $umur = '18'){
                // echo "nama saya $nama saya seorang $pekerjaan , saya berumur $umur";
                $data ['nama'] = $nama;
                $data ['pekerjaan'] = $pekerjaan;
                $data ['umur'] = $umur;
                $this-> view('about/index', $data);
            }
            public function page (){
                // echo 'About/page';
                $this-> view('about/page');
            }
        }
?>