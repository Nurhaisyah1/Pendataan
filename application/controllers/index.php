<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Belajar Framework Ceigniter | Membuat Tamplate sederhana codeigniter</title>
<link rel="stylesheet"type="text/css"
href="http://localhost/Codeigniter-lat1/assets/css/style.css">
</head>
<body>
<div id="wrapper">
<header>
<hgroup>
<h1>www.aisyah.com</h1>
<h3>Membuat tample sederhana codeigniter</h3>
</hgroup>
<nav>
<ul>
<li><a href="<?php echo base_url().'index.php/web'
?>">Home</a></li> 
<li><a href="<?php echo
base_url().'index.php/web/about' ?>">About</a></li>
</ul>
</nav>
<div class="clear"></div>
</header>
<section>
<h1><?php echo $judul ?></h1>
<p>
Codeigniter adalah suabuah web aplication network yang bersifat open source yang digunakan untuk membangun aplikasi php dinamis.
Codeigniter menjadi sebuah framework PHP dengan model MVC(Model,View,Cpntroller) untuk membangun website dinamis dengan dengan menggunakan PHP yang dapat 
mempercepat pengembang untuk membuat sebuah aplikasi web. selain itu ringan dan cepat,Codeigniter juga memiliki dokumentasi yang super lengkap disertai dengan
contoh implementasi kodenya. Dokumentasi yang lengkap inilah yang menjadi salah satu alesan kuat mengapa banyak orang memilih codeigniter karena "it is faster,
lighter and the last like a framework.".
</p>
<p>
keunggulan codeigniter
1. Size yang kecil
keseluruhan framework Codeigniter hanya sebesar 2MB. Size sekecil ini tentu memudahkan kita untuk mempelajari Codeigniter,menjalankannya,juga meng-update.

2. Sangat cepat
sebagai pengguna,kita cenderung menyukai aplikasi yang cepat, baik loading atau saat menggunakannya.
    Codeigniter memiliki daya respon loading kurang dari 50 milisecond.

3. Fleksibel
Codeigniter memiliki komponen dan fitur-fitur yang berdiri sendiri tanpa terlalu banyak bergantung pada satu sama lain,membuat codeigniter sangat mudah
untuk di-upgrade dan dibenarkan jika ada masalah.

4. Arsitektur yang bersifat MVC (Model-View-Controllers)
ketika membuat dan mengerjakan  aplikasi berbasis web,desain arsitektur MVC merupakan standar industri untuk sebuah framework. MVC sangat berguna untuk
memisahkan data,business logic,dan presentasi.

5. Dapat dimodifikasi
pada mulanya codeigniter sudah terdapat libray dan bantuan dari awal mula kita pakai.Jika apa yang anda cari tidak ada, Anda dapat dengan mudah menambahkan
library dan bantuan anda sendiri.

6. Mudah dipelajari dan dikuasai
</p>
</section>
<footer>
<a href="http://www.Aisyah.com"><center><h3>Created by : Aisyah </a> </center>
</a>
</footer>
</div>
</body>
</html>

