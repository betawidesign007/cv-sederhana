<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Curriculum Vitae</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- Google Fonts & Font Awesome -->
</head>
<body>
<div class="container">
  

  <div class="sidebar">
    <div class="profile">
      <img src="Assets/picture/pic2.jpeg" alt="Foto Profil">
      <h4>Ibrahim</h4>
      <p class="title">Jurnalis Jalanan | Konten Kreator</p>
    </div>

    <div class="contact-info">
  <a href="https://maps.app.goo.gl/PttkKK4GvpGw8Juy7" class="contact-button" target="_blank">
    <img src="Assets/logo/maps.png" alt="maps" class="icon"> Alamat Saya
  </a>

  <a href="https://wa.me/6287799107735" class="contact-button" target="_blank">
    <img src="Assets/logo/wa.png" alt="Whatsapp" class="icon"> Hubungi Saya
  </a>

  <a href="mailto:betawidesign007@gmail.com" class="contact-button">
    <img src="Assets/logo/email.png" alt="email" class="icon"> Email
  </a>
</div>

    <div class="section">
      <h3>Selayang Pandang</h3>
      <p>Menjadi jurnalis jalanan yang mampu beradaptasi dengan berbagai situasi dan lingkungan,
        adalah bagian dari nikmat yang tuhan berikan.
      </p>
    </div>

    <div class="section">
      <h3>Pendidikan</h3>
      <p><strong>Sekolah Dasar Negeri</strong><br>Sawah Baru 01 Ciputat (1992 - 1998)</p>
      <p><strong>Madrasah Tsanawiyah</strong><br>Islamiyah Ciputat (1998 - 2001)</p>
      <p><strong>Sekolah Menengah Atas</strong><br>Islamiyah Ciputat (2001 - 2004)</p>
      <p><strong>S1 Teknik Informatika</strong><br>Universitas Pamulang (2024 - 2028)</p>
    </div>

    <div class="section">
      <h3>Pengalaman</h3>
      <p><strong>Quality Control</strong><br>PT. Tempo Inti Media (2008 - 2014)</p>
      <p><strong>Head Of Dormitory</strong><br>LAZNAS Griya Yatim Dhuafa</p>
    </div>

    <div class="skill">
      <h3>Keahlian</h3>
      <ul>
        <li>Design Grafis</li>
        <li>Microsoft Office</li>
        <li>Programming</li>
        <li>Video Editor</li>
      </ul>
    </div>

    <div class="medsos">
      <a href=""><img src="Assets/logo/fb.png" alt="facebook"></a>
      <a href=""><img src="Assets/logo/ig.png" alt="instagram"></a>
      <a href="https://www.youtube.com/@BelalangAspalMV" target="_blank"><img src="Assets/logo/yt.png" alt="youtube"></a>
      <a href="logout.php" target="_blank"><img src="Assets/logo/logout.png" alt="logout"></a>
    </div>
      <p>Anda Sebagai: <?php echo $_SESSION["role"]; ?></p>
  </div>

    <div class="content">
        <h2>Tentang Saya</h2>
        <br>
        <!-- isi konten -->
         <p>
          Terlahir dari keluarga sederhana bersuku betawi, namun memiliki semangat dan tekad kuat untuk terus berkembang dan meraih cita-cita besar, 
          nilai-nilai kejujuran, kerja keras, dan rasa hormat yang saya pelajari sejak kecil menjadi pondasi utama dalam setiap langkah yang saya ambil, 
          dengan latar belakang tersebut, saya selalu berusaha memberikan yang terbaik, belajar dengan giat, dan tidak mudah menyerah dalam menghadapi tantangan, 
          saya percaya bahwa keterbatasan bukanlah penghalang untuk sukses, melainkan motivasi untuk terus maju dan membuktikan kemampuan diri.
         </p>
         <br>
         <p>
          Memiliki cita-cita menjadi seorang jurnalis jalanan yang mampu menyuarakan realitas kehidupan masyarakat secara jujur dan menyentuh, 
          ketertarikan saya pada dunia sosial dan kepedulian terhadap ketimpangan membuat saya ingin hadir langsung di tengah masyarakat, 
          mendengar suara mereka, dan menyampaikan kisah-kisah yang jarang tersorot media arus utama, bagi saya, menjadi jurnalis bukan hanya tentang melaporkan berita, 
          tapi tentang menyuarakan kebenaran dan memberi ruang bagi mereka yang selama ini terpinggirkan.
         </p>
         <br>
         <p>
          Jurnalis jalanan yang mampu beradaptasi dengan berbagai situasi dan lingkungan, 
          terbiasa berinteraksi dengan berbagai kalangan dan memiliki jaringan informasi yang kuat, 
          mampu mencari berita unik dan menarik, serta menyampaikannya dengan gaya yang efektif, 
          memiliki kemampuan yang terbukti untuk menyelesaikan tugas dengan efisien dan efektif.
         </p>
         <br>
         <br>
         <p>~ Ibrahim ~</p>
    </div>

</div>
</body>
</html>
