<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Bootstrap core CSS-->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <script src="assets/js/jquery.js"></script> 
    <script src="assets/js/popper.js"></script> 
    <script src="assets/js/bootstrap.js"></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- My Css -->
    <style>
        
html , body{
    max-width: 100%;
    overflow-x: hidden;
}

        /* navbar */
.navbar{
    position: relative;
    z-index: 1;
}

.navbar-brand {
    font-family: viga;
    font-size: 13px;
}

.navbar img {
    width: 50px;
    height: 50px;
    text-align: center;
 }


/*jumbotron*/
.jumbotron{
    background-color: #599be2;
    background-size: cover;
    height: auto;
    text-align: center;
    position: relative;
}


.jumbotron .container{
    z-index: 1;
    position: relative;
} 

.jumbotron::after {
    content: '';
    display: block;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to top, rgba(255,255,255,1), rgba(0,0,0,0));
    position: absolute;
    bottom: 0;
}

.jumbotron .display-4{
    color: white;
    text-align: center;
    margin-top: 60px;
    font-weight: 200;
    text-shadow: 2px 2px 10px grey;
    font-size: 30px;
    margin-bottom: 30px;
}

.jumbotron .display-4 span{
    font-weight: 500;
    margin-top: -5px;
}

/*info panel*/

.info-panel{
    box-shadow: 0 3px 20px rgba(0,0,0,0.5);
    border-radius: 12px;
    margin-top: 40px;
    background-color: white;
    padding: 30px;

}

.info-panel img{
    width: 80px;
    height: 8-px;
    margin-right: 20px;
    margin-bottom: 20px;
}

.info-panel p{
    font-size: 14px;
    color: grey;
    margin-top: 10px;
    font-weight: 200;
}

/*info profil*/
.info-profil{
    box-shadow: 0 3px 20px rgba(0,0,0,0.5);
    border-radius: 12px;
    margin-top: 20px;
    background-color: white;
    padding: 30px;
    margin-left: 20px;

}

.info-profil p{
    font-size: 20px;
    font-family: viga;
    margin-top: 10px;
    font-weight: 400;
    color: #599be2;
}

.info-profil ol{
    font-size: 20px;
    font-family: viga;
    margin-top: 10px;
    font-weight: 200;
    color: #599be2;
}

.info-profil h3{
    text-shadow: 1px 1px 1px blue;
    font-size: 30px;
    font-family: viga;
    margin-top: 10px;
    font-weight: 200;
    color: #599be2;
}

.info-profil iframe{
     width: 320px; 
     height: 180px;
}

/*info jurusan*/
.info-jurusan h5{
    text-shadow: 1px 1px 1px blue;
    font-size: 30px;
    font-family: viga;
    font-weight: 200;
    color: #599be2;
}

/*workingspace*/
.workingspace{
    margin-top: 40px;
    margin-bottom: 40px; 
    text-align: right;
}

.workingspace h3{
    font-size: 20px;
}

.jurusan{
    font-size: 14px; 
}


/*footer*/
footer{
    background-color: #599be2;
    background-image: linear-gradient(to top, rgba(0,0,0,0.10), rgba(255,255,255,1));
    padding: 1cm 0cm;
}

.footer-about__img{
    width: 100px;
    height: auto;
}
.font{
    font-size: 12px;
}

.font img{
    width: 25px;
    height: 25px;   
}




/*desktop version*/
@media (min-width: 992px) {
    /* navbar */
.navbar{
    position: relative;
    z-index: 1;
}

.navbar-brand {
    font-family: viga;
    font-size: 20px;
    color: navy !important;
}

.nav-link/{
    text-transform: uppercase;
    margin-right: 30px;
    color: navy !important;
}

.nav-link:hover::after{
        content: '';
        display: block;
        border-bottom: 3px solid blue;
        width: 50%;
        margin: auto;
        padding-bottom: 5px;
        margin-bottom: -8px;  
    }


.navbar img {
    width: 50px;
    height: 50px;
}


/*jumbotron*/
.jumbotron{
    background-color: #599be2;
    background-size: cover;
    height: auto;
    text-align: center;
    position: relative;
}


.jumbotron .container{
    z-index: 1;
    position: relative;
} 

.jumbotron::after {
    content: '';
    display: block;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to top, rgba(255,255,255,1), rgba(0,0,0,0));
    position: absolute;
    bottom: 0;
}

.jumbotron .display-4{
    color: white;
    text-align: center;
    font-weight: 200;
    text-shadow: 2px 2px 10px grey;
    margin-bottom: 30px;
    margin-top: 50px;
    font-size: 40px;
}

.jumbotron .display-4 span{
    font-weight: 500;
    margin-top: -5px;
}

/*info panel*/

.info-panel{
    box-shadow: 0 3px 20px rgba(0,0,0,0.5);
    border-radius: 12px;
    margin-top: 100px;
    background-color: white;
    padding: 30px;

}

.info-panel img{
    width: 80px;
    height: 8-px;
    margin-right: 20px;
    margin-bottom: 20px;
}

.info-panel p{
    font-size: 14px;
    color: grey;
    margin-top: 10px;
    font-weight: 200;
}


/*info profil*/
.info-profil{
    box-shadow: 0 3px 20px rgba(0,0,0,0.5);
    border-radius: 12px;
    margin-top: 20px;
    background-color: white;
    padding: 30px;

}

.info-profil p{
    font-size: 20px;
    font-family: viga;
    margin-top: 10px;
    font-weight: 200;
    color: #599be2;
}

.info-profil ol{
    font-size: 20px;
    font-family: viga;
    margin-top: 10px;
    font-weight: 200;
    color: #599be2;
}

.info-profil h3{
    text-shadow: 1px 1px 1px blue;
    font-size: 30px;
    font-family: viga;
    margin-top: 10px;
    font-weight: 200;
    color: #599be2;
}

.info-profil iframe{
     width: 750px; 
     height: 422px;
}

/*info jurusan*/
.info-jurusan h5{
    text-shadow: 1px 1px 1px blue;
    font-size: 30px;
    font-family: viga;
    font-weight: 200;
    color: #599be2;
}

/*workingspace*/
.workingspace{
    margin-top: 80px;
    margin-bottom: 80px; 
    text-align: right;
}

.workingspace h3{
    font-size: 30px;
}

.jurusan{
    font-size: 20px; 
}


/*footer*/
footer{
    background-color: #599be2;
    background-image: linear-gradient(to top, rgba(0,0,0,0.10), rgba(255,255,255,1));
    padding: 2cm 0cm;
    font-size: 15px;
}

.footer-about__img{
    width: 200px;
    height: auto;
}

.font{
    margin-top: 30px;
}

.font img{
    width: 25px;
    height: 25px; 

}


}    
    </style>

    <title>Landing Page</title>
  </head>
  <body>
    <!-- navbar -->
    <header class="topbar-nav fixed-top">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <img src="assets/images/logo.png">
      <a class="navbar-brand" href="#">SMK MAHAPUTRA CERDAS UTAMA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
           @if (Route::has('login'))
            @auth
            @if(Auth()->user()->hasRole('teacher'))
            <a href="{{ route('dashboard.users') }}">Home</a>
            @elseif(Auth()->user()->hasRole('staff'))
            <a href="{{ route('dashboard.users') }}">Home</a>
            @elseif(Auth()->user()->hasRole('student'))
            <a href="{{ route('dashboard.users') }}">Home</a>
            @elseif(Auth()->user()->hasRole('admin'))
            <a href="{{ route('dashboard.users') }}">Home</a>
            @else
            @endif
            @else
            <a class="nav-link" href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a class="nav-link" href="{{ url('select-registration') }}">Daftar</a>
            @endif
            @endauth
            @endif
        </div>
      </div>
    </div>
    </nav>
    </header>
    <!-- akhir navbar -->
        
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><span>Selamat Datang</span> di SMK Mahaputra Cerdas Utama, sekolah dengan konsep <span>Green School</span> pertama di <span>Kabupaten Bandung</span></h1>
            <div class="container">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="" data-slide-to="0" class="active"></li>
                            <li data-target="" data-slide-to="1"></li>
                            <li data-target="" data-slide-to="2"></li>
                            <li data-target="" data-slide-to="3"></li>
                            <li data-target="" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/3.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/4.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div> 
                            <div class="carousel-item">
                                <img src="assets/images/kerjasama1.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/kerjasama2.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center">
            <div class="col-10 info-panel">

                <!-- info panel -->
                 <div class="row">
                    <div class="col-lg">
                        <img src="assets/images/siswa.jfif" class="float-left">
                        <p>Pendaftaran</p>
                        <a href="{{ url('register-student') }}" style="color: #599be2; text-shadow: 0.1px 0.1px 0.1px blue;"><b style="font-size: 15px;">Siswa Baru</b></a>
                    </div>
                    <div class="col-lg">
                        <img src="assets/images/guru.jfif" class="float-left">
                        <p>Pendaftaran</p>
                        <a href="{{ url('register-teacher') }}" style="color: #599be2; text-shadow: 0.1px 0.1px 0.1px blue;"><b style="font-size: 15px;">Guru Baru</b></a>
                    </div>
                    <div class="col-lg">
                        <img src="assets/images/staff4.jfif" class="float-left">
                        <p>Pendaftaran</p>
                        <a href="{{ url('register-staff') }}" style="color: #599be2; text-shadow: 0.1px 0.1px 0.1px blue;"><b style="font-size: 15px;">Staf Baru</b></a>
                    </div>
                </div>
                <!-- akhir info panel -->

            </div>  
        </div>
        </div>
    </div>
    <!-- akhir jumbotron -->


                     <div class="row justify-content-center">
                        <div class="col-lg-7 info-profil">
                            <h3 class="text-center">PROFIL</h3>
                               <p align="justify">
                                   SMKS Mahaputra Cerdas Utama didirikan pada 22 Agustus tahun 2016, 
                                   adalah salah satu SMK swasta yang ada di Kabupaten Bandung yang memiliki program study Multimedia (MM) dan Rekyasa Perangkat Lunak (RPL), 
                                   menjadi sekolah pertama di Kabupaten Bandung dengan Konsep Green School
                                   atau Sekolah Hijau yang ramah lingkungan SMKS Mahaputra Cerdas Utama berkomitmen untuk mencetak Sumber Daya Manusia (SDM) yang unggul di era 4.0. 
                                 </p>
                                 <br>   
                                 <iframe class="rounded" src="https://www.youtube.com/embed/is-6lNoy9zM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                 <br><br>
                                 <iframe class="rounded" src="https://www.youtube.com/embed/YLEZwd8Qc8c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                 <br><br>
                                 <iframe class="rounded" src="https://www.youtube.com/embed/sugJyk6a590" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                 <br><br>
                                 <iframe class="rounded" src="https://www.youtube.com/embed/8MgZKPN5GDQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                 <br><br>
                                
                            <h3 class="text-center">Visi</h3>
                                <p align="justify">
                                    Menjadi penyelenggara pendidikan kejuruan yang melahirkan tenaga ahli, terampil, kreatif, inovatif, dan berpengetahuan yang ramah lingkungan di tahun 2025.    
                                </p>    
                            <br>    
                            <h3 class="text-center">Misi</h3>
                                
                                <ol>
                                    <li> Menyelenggarakan pendidikan kejuruan </li>  
                                     <li>  Melahirkan tenaga ahli tingkat menengah </li>
                                     <li>   Mewujudkan tenaga terampil, kreatif, inovatif, dan berpengalaman. </li>
                                     <li>   Menyediakan sarana prasarana pendukung kegiatan pembelajaran yang berwawasan lingkungan. </li>
                                     <li>   Mewujudkan lingkungan sekolah yang bersih, hijau, indah, dan sehat. </li>
                                     <li>   Menerapkan kesadaran warga sekolah berprilaku hidup yang berbudaya lingkungan. </li>
                                     <li>   Menjalin kemitraan dan kerjasama yang harmonis dengan masyarakat dan instansi instansi terkait. </li>
                                     <li>  Mencetak Sumber Daya Manusia (SDM) yang unggul di era 4.0. </li>
                                 </ol> 


                        </div> 
                    </div>


    <div class="container info-jurusan">

        
         <!-- info panel -->


                <div class="row workingspace">
                    <div class="container">
                    <h3 class="text-center font-weight-bold" style="color: #599be2; text-shadow: 0.50px 0.50px 0.50px blue; font-family: viga;">PROGRAM KEAHLIAN <br>SMK MAHAPUTRA CERDAS UTAMA</h3>
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/images/4.jpg" class="img-fluid">
                        <a class="jurusan" href="" style="color: #599be2;" ><b>REKAYASA PERANGKAT LUNAK</b></a>
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/images/3.jpg"  class="img-fluid">
                        <a class="jurusan" href="" style="color: #599be2;" ><b>MULTIMEDIA</b></a>
                    </div>
                </div>
                <!-- akhir info panel -->
        
        

    </div>
    

    <!-- footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- footer about -->
                        <div class="footer-about">
                            <div class="footer-about__img">
                                <img class="img-fluid" data-lazysrc="https://smkmahaputra.sch.id/public/logo/image.png" src="https://smkmahaputra.sch.id/public/logo/image.png">  
                            </div>
                        </div>

                        <!-- akhir footer about -->
                    </div>

                     <div class="col-md-6 font" style="color: navy;">
                         <p>
                              <h5 class=""><b>SMK MAHAPUTRA CERDAS UTAMA</b></h5>
                                <p class="">Jl Katapang Andir KM. 4 Kp Pasantren Ds Sukamukti Kec Katapang Kab Bandung</p>
                                <p class="">022 85876147</p>
                                <a href="mailto:"><img title="email" src="https://smkmahaputra.sch.id/public/img/sosmed/email.png" alt="email" width="35" height="35"></a>
                                <a href="https://www.facebook.com/" target="_blank"><img title="Facebook" src="https://smkmahaputra.sch.id/public/img/sosmed/facebook.png" alt="Facebook" width="35" height="35"></a>
                                <a href="https://www.youtube.com/https://www.youtube.com/channel/UCCfYqV-2N44pFhsQpGEedCw" target="_blank"><img title="Youtube" src="https://smkmahaputra.sch.id/public/img/sosmed/youtube.png" alt="RSS" width="35" height="35"></a>
                                <a href="https://www.instagram.com/" target="_blank"><img title="Instagram" src="https://smkmahaputra.sch.id/public/img/sosmed/instagram.png" alt="RSS" width="35" height="35"></a>
                                <a href="https://www.twitter.com/" target="_blank"><img title="Instagram" src="https://smkmahaputra.sch.id/public/img/sosmed/twitter.png" alt="RSS" width="35" height="35"></a> 
                            </p>
                    </div>

                </div>   
            </div>
            <div class="container" style="color: navy;">
                 <p>
                    SMK MAHAPUTRA CERDAS UTAMA © 2020
                </p>
            </div>
        </footer>
        <!-- akhir footer -->



    <!-- Optional JavaScript; choose one of the two! -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
        

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>

