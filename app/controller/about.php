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
        class About{
            public function index ($nama = 'Adnan Zainal Arifin', $pekerjaan = 'Mahasiswa Ndoning', $umur = '18'){
                echo "nama saya $nama saya seorang $pekerjaan , saya berumur $umur";
            }
            public function page (){
                echo 'About/page';
            }
        }
?>