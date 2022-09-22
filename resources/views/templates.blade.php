<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>DON'T SAD</b></h1>
  <p> Keren kamu, tetap bertahan di kondisi apapun <span class="w3-tag"><3</span></p>
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="/image/gmbr.jpg.jpg" alt="Wpp" style="width:100%">
    //pake "{{asset(foto.jpg)}}"
        <div class="w3-container">
      <h3><b>SEMANGAT KAMU</b></h3>
      <h5>Jangan Lupa Bahagia^^ <span class="w3-opacity">Juli 19, 2022</span></h5>
    </div>

    <div class="w3-container">
        <p>Allo!!</p>
        <p>Hai bagaimana suasana hatimu hari ini? 
            Aku harap kamu tetap bisa tersenyum walaupun banyak banget masalah di hidupmu yang mungkin membuatmu ingin menyerah.
            Dan aku harap kamu mau berjuang untuk tetap tegar dan menjalani segala sesuatu dengan tenang yaa^^. Jangan pernah
            merasa sendirian. Banyak tau yang sayang sama kamu dan mau mendengarkan segala keluh kesahmu:D. Aku tau semua ga mudah
            buat kamu. Kalau cape nangis aja ya gapapa, nangis bukan berarti lemah kok, itu bisa dijadiin penguat untuk diri 
            di tengah keterpurukan. Tapi jangan menangis dan terpuruk yang berlaru-larut ya! Kamu perlu menenangkan diri dan
            menenangkan diri dengan cara bahagia. Tetap semangat ya kamu! Aku tau kamu manusia kuat. Ingat, Tuhan tidak akan
            memberikan cobaan ke hambanya diluar kemampuan. Tuhan percaya kamu kuat. Manusia kuat sepetimu layak untuk bahagia<3 </p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="image/d3.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>LOVE ME</b></h3>
      <h5>Cintai dirimu sendiri sebelum mencintai orang lain, <span class="w3-opacity">Juli 19, 2022</span></h5>
    </div>

    <div class="w3-container">
      <p>Cintai dirimu sendiri. Cukup untuk mengambil tindakan yang diperlukan untuk kebahagiaan Anda. 
        Cukup untuk melepaskan diri dari masa lalu yang penuh drama. 
        Cukup untuk menetapkan standar tinggi untuk hubungan. 
        Cukup untuk memberi makan pikiran dan tubuh Anda dengan cara yang sehat. 
        Cukup memaafkan diri sendiri. Cukup untuk melanjutkan</p>
        </br>
        </br>
        </br>
        <hr> <center>
            <h3> Penulis : {{$template['penulis']}}</h3>
            <h3> Domisili : {{$template['domisili']}}</h3>
            <h3> Instagram : {{$template['instagram']}}</h3>
</center>
        <hr>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge">2</span></span></p>
        </div>
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="image/g2.jpg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><center><b>~Quotes~</b></center></h4>
      <p>"Ciptakanlah hari esok, daripada kamu mengkhawatirkan apa yang sudah terjadi kemarin. – Steve Job" – Steve Job</p>
      <p>"Dunia tidak akan mengingat apa yang Anda katakan, tapi tidak akan melupakan apa yang telah Anda lakukan. – Jack Ma" – Jack Ma</p>
    </div>
  </div><hr>
  
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Popular Posts</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="image/z2.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Ramalan Zodiak Hari Ini</span><br>
        <span>Zodiakmu apa? </span>
      </li>
      <li class="w3-padding-16">
        <img src="image/s2.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Resep Membuat Sup Jagung</span><br>
        <span>Resep sehat dan lezat</span>
      </li> 
      <li class="w3-padding-16">
      <img src="image/m2.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Minuman Sehat Untuk Diet</span><br>
        <span>Kiw yang diet sini mampir</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="image/b2.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Trik Cepat Mahir dalam Menari</span><br>
        <span></span>
      </li>  
    </ul>
  </div>
  <hr> 
 
  <!-- Labels / tags -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">LoveSelf</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Beauty</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Food</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
    </p>
    </div>
  </div>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
  <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>
