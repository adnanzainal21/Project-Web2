# Project-Web2
Project MVC PHP 

#### Create To Project MVC PHP
Konsep desain MVC (Model-View-Controller) dalam PHP adalah sebuah pola arsitektur perangkat lunak yang memisahkan aplikasi web menjadi tiga komponen utama: Model, View, dan Controller. Pola ini membantu dalam organisasi kode dan memisahkan logika bisnis dari antarmuka pengguna serta logika kontrol. Berikut adalah penjelasan lebih rinci mengenai masing-masing komponen:

1. **Model**:
   - **Tugas**: Model bertanggung jawab untuk mengelola data dan logika bisnis aplikasi. Ini termasuk interaksi dengan basis data, validasi data, dan aturan bisnis lainnya.
   - **Contoh dalam PHP**: Model biasanya diimplementasikan sebagai kelas PHP yang berisi metode untuk mengambil, menyimpan, dan memodifikasi data.

     ```php
     class UserModel {
         public function getUserById($id) {
             // Query database to get user by ID
         }

         public function createUser($data) {
             // Insert new user into the database
         }
     }
     ```

2. **View**:
   - **Tugas**: View bertanggung jawab untuk menghasilkan antarmuka pengguna dan menampilkan data yang diambil oleh model. View biasanya berisi HTML yang dicampur dengan kode PHP untuk menampilkan data dinamis.
   - **Contoh dalam PHP**: View bisa berupa file template PHP yang menampilkan data.

     ```php
     <!-- user_view.php -->
     <html>
     <head>
         <title>User Profile</title>
     </head>
     <body>
         <h1><?php echo $user['name']; ?></h1>
         <p>Email: <?php echo $user['email']; ?></p>
     </body>
     </html>
     ```

3. **Controller**:
   - **Tugas**: Controller bertindak sebagai perantara antara Model dan View. Controller menangani logika kontrol aplikasi, memproses input dari pengguna, berinteraksi dengan model untuk mendapatkan data, dan kemudian meneruskan data tersebut ke view untuk ditampilkan.
   - **Contoh dalam PHP**: Controller biasanya diimplementasikan sebagai kelas yang mengelola berbagai tindakan (actions) dan rute (routes).

     ```php
     class UserController {
         public function show($id) {
             $model = new UserModel();
             $user = $model->getUserById($id);
             include 'views/user_view.php';
         }

         public function create() {
             if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                 $model = new UserModel();
                 $model->createUser($_POST);
                 // Redirect to success page or show success message
             } else {
                 include 'views/user_create_form.php';
             }
         }
     }
     ```

### Keuntungan Menggunakan MVC dalam PHP

1. **Pemeliharaan Kode**: Memisahkan logika bisnis, tampilan, dan logika kontrol membuat kode lebih terstruktur dan mudah dipelihara.
2. **Reusabilitas**: Model dapat digunakan kembali oleh berbagai controller dan view, sehingga mengurangi duplikasi kode.
3. **Pengujian**: Memisahkan logika bisnis dari tampilan memudahkan pengujian unit dan integrasi.
4. **Kolaborasi Tim**: Desain MVC memungkinkan pengembang backend dan frontend bekerja secara paralel tanpa saling mengganggu.

Dengan menggunakan desain MVC, aplikasi web PHP dapat lebih mudah dikembangkan, dipelihara, dan diukur skala kompleksitasnya, sehingga mempermudah manajemen proyek dan kolaborasi tim.
