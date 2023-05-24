# Lab7Web

### Membuat PHP Frame Work (Codeigniter) <b>

### Berikut adalah langkah-langkah untuk membuat PHP Frame Work
1.  Mengaktifkan ekstensi dengan XAMPP Control Panel,  pada bagian Apache klik Config -> PHP.ini, dan akan muncul seperti gambar dibawah ini
<img src="./ss/s.png" style="margin: auto; width:600px;">

> Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

2. Start apache menjadi stop apache, lalu buka shell pada XAMPP ketik seperti gambar dibawah ini sesuai file yang dibuat.
<img src="./ss/ss.png" style="margin: auto; width:600px;">

> Apabila muncul output seperti dibawah ini, kita bisa langsung mengetik php spark serve agar dapat mengakses codeigniter.

3. Setelah mengetik php spark serve dan muncul output seperti dibawah maka codeigniter dapat digunakan.
<img src="./ss/sss.png" style="margin: auto; width:600px;">

4. rename env menjadi .env lalu mennghapus tanda  (#) pada CI_ENVIRONMENT dan ubah juga menjadi CI_ENVIRONMENT= development.

5. Refresh tampilan pada halaman http://localhost:8080/about 

### Hasil Output 
1. Tampilan untuk halaman home
<img src="./ss/ssss.png" style="margin: auto; width:600px;">

2. Tampilan untuk halaman about
<img src="./ss/sssss.png" style="margin: auto; width:600px;">

3. Tampilan untuk halaman artikel
<img src="./ss/ssssss.png" style="margin: auto; width:600px;">

4. Tampilan untuk halaman contact
<img src="./ss/sssssss.png" style="margin: auto; width:600px;">