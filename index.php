<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Layout Mockup Dengan Semantik HTML</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
  <div id="container">

    <header><img src="assets/images/Gambar1.png" alt="Header"></header>

    <nav>
      <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="#">Artikel</a></li>
        <li class="dropdown">
          <a href="#">Profil</a>
          <ul class="submenu">
            <li><a href="#">Hub Kami</a></li>
            <li><a href="#">Tentang Kami</a></li>
          </ul>
        </li>
      </ul>
    </nav>

    <article>
      <div id="single">
        <div id="t-images" style="background:url(assets/images/Gambar2.jpg)">&nbsp;</div>
        <h2>Belajar Web dengan HTML+CSS3</h2>
        <p>
          Click Insert and then choose the elements you want from the different galleries. Themes and styles 
          also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, 
          charts, and SmartArt graphics change to match your new theme...
        </p>
        <div id="more"><a href="Gambar2.php">Baca selengkapnya</a></div>
      </div>

      <div id="single">
        <div id="t-images" style="background:url(assets/images/Gambar3.jpg)">&nbsp;</div>
        <h2>Mockup web dengan word</h2>
        <p>
          Click Insert and then choose the elements you want from the different galleries. Themes and styles 
          also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, 
          charts, and SmartArt graphics change to match your new theme...
        </p>
        <div id="more"><a href="Gambar3.php">Baca selengkapnya</a></div>
      </div>
    </article>

    <aside>
      <li class="widget">
        <h2>Berita Populer</h2>
        <ul>													
          <li><a href="#">Belajar Web dengan HTML+CSS3</a></li> 
          <li><a href="#">Mockup web dengan Word</a></li>
          <li><a href="#">Disain Web Statis</a></li>
        </ul>
      </li>

      <li class="widget">
        <h2>Artikel Populer</h2>
        <ul>
          <li><a href="#">Artikel 1</a></li>
          <li><a href="#">Artikel 2</a></li>
          <li><a href="#">Artikel 3</a></li>
        </ul>
      </li>

      <li class="widget">
        <h2>Berita selanjutnya</h2>
        <ul>
          <li><a href="#">UINSU Ganti Logo</a></li>
          <li><a href="#">RUSIA Damai</a></li>
          <li><a href="#">Cuaca di Medan</a></li>
        </ul>
      </li>
    </aside>

    <footer>
      <div id="column">
        <h2>LAYANAN</h2>
        E-Mail<br>
        E-Learning,BR.<br>
        E-Jurnal<br>
        Digital Library<br>
        Portal SIA<br>
        SI-Selma<br>
        SI-Dahlia
      </div>

      <div id="column">
        <h2>Business Hour</h2>
        Silahkan hubungi pesbangnis UINSU telp 064123123 pada
        jam kerja atau email <a href="#">pusbangnis@uinsu.ac.id</a>
      </div>

      <div id="column">
        <h2>Head Office</h2>
        Jl. Willem Iskandar, Pasar V, Medan Estate<br>
        Tel : +62-61-6615683<br>
        Email : humas@uinsu.ac.id
      </div>
    </footer>

  </div>
</div>

<script>
</script>
</body>
</html>