<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
      <!-- Bootstrap core CSS-->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>

      <!-- boostrap roker -->
        <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>

          <!-- animate CSS-->
          <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
          <!-- Icons CSS-->
          <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
          <!-- Sidebar CSS-->
          <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
          <!-- Custom Style-->
          <link href="assets/css/app-style.css" rel="stylesheet"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   
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
    margin-right: 20px;

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
     width: 450px; 
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

/*info team*/
.info-team figure h5{
    text-align: center;
    font-weight: 200;
    font-weight: bold;
    font-style: normal;
    font-size: 20px;
}
.info-team h4{
    text-align: center;
    font-weight: 200;
    font-style: italic;
    font-size: 25px;
    font-weight: bold;
    color: grey;
}

.info-team figure img{
    width: 120px;
    margin-top: 30px;       
}

.ahmad{
    margin-left: 30px;
}

.rendy{
    margin-left: 50px;
}

.dede{
    margin-left: 25px;
}

.elsa{
    margin-left: 25px;
}
.sumi{
    margin-left: 40px;
}
.pd{
    margin-top: -20px; 

}
.ps{
    margin-top: -20px; 

}
.pju{
    margin-top: -20px;
}

.t{
    text-align: center;
}




/*footer*/
footer{
    background-color: #599be2;
    background-image: linear-gradient(to top, rgba(0,0,0,0.10), rgba(255,255,255,1));
    padding: 1cm 0cm;
    margin-top: 40px;
}

.footer-about__img{
    width: 150px;
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
     height: 400px;
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

/*info team*/
.info-team figure h5{
    text-align: center;
    font-weight: 200;
    font-weight: bold;
    font-style: normal;
    font-size: 20px;
}
.info-team h4{
    text-align: center;
    font-weight: 200;
    font-style: italic;
    font-size: 25px;
    font-weight: bold;
    color: grey;
}

.info-team figure img{
    width: 90px;
    margin-top: 30px;       
}

.ahmad{
    margin-left: 45px;
}

.rendy{
    margin-left: 60px;
}

.dede{
    margin-left: 55px;
}

.elsa{
    margin-left: 55px;
}
.sumi{
    margin-left: 50px;
}
.pde{
    margin-left: 35px;
}
.pd{
    margin-top: -20px; 
    margin-left: 35px;
}
.psa{
    margin-left: 35px;
}
.ps{
    margin-top: -20px; 
    margin-left: 35px;
}
.pju{
    margin-top: -20px;
}
.t{
    text-align: left;
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

.alamat {
    font-size: 18px;
}



}    
    </style>

    <title>SMK Mahaputra</title>
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
            <a href="{{ route('dashboard.users') }}"><h6>Home</h6></a>
            @elseif(Auth()->user()->hasRole('staff'))
            <a href="{{ route('dashboard.users') }}"><h6>Home</h6></a>
            @elseif(Auth()->user()->hasRole('student'))
            <a href="{{ route('dashboard.users') }}"><h6>Home</h6></a>
            @elseif(Auth()->user()->hasRole('admin'))
            <a href="{{ route('dashboard.users') }}"><h6>Home</h6></a>
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
                
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    
                    @foreach ($master_slide->take(6) as $master_slide)
                    
                    <div class="carousel-item @if($loop->first) active @endif">
                      <img class="d-block w-100" src="@if($master_slide->mss_is_active == 1) {{$master_slide->mss_file}} @endif" alt="">
                    </div>
                    
                    @endforeach

                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
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

                    @foreach($master_config as $master_config)
                    @if($master_config->msc_is_active == 1)
                     <div class="row justify-content-center">
                        <div class="col-lg-7 info-profil">
                            <h3 class="text-center">PROFIL</h3>
                               <p align="justify">
                                
                                   {{$master_config->msc_description}}
                            
                                 </p>
                                 <br> 
                                   
                                 <iframe class="rounded" src="https://www.youtube.com/embed/9ALpIk7HmTM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                 <br><br>
                                 
                                 
                                
                            <h3 class="text-center">Visi</h3>
                                <p align="justify"> 
                                {{$master_config->msc_vision}}  
                                </p>    
                            <br>    
                            <h3 class="text-center">Misi</h3>
                                

                                <ol>
                                    
                                    <li>{{$master_config->msc_mision}}</li>
                                      
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
                <img src="assets/images/slide/RPL.jpg" class="img-fluid">
                <a class="jurusan" style="color: #599be2;" ><b>REKAYASA PERANGKAT LUNAK</b></a>
            </div>
            <div class="col-lg-6">
                <img src="assets/images/slide/MM.jpg"  class="img-fluid">
                <a class="jurusan" style="color: #599be2;" ><b>MULTIMEDIA</b></a>
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
                                
                                <img class="img-fluid" src="{{ asset($master_config->msc_logo)}}" style="margin-top: 20px;">
                                 
                            </div>
                        </div>

                        <!-- akhir footer about -->
                    </div>

                     <div class="col-md-6 font" style="color: navy;">
                         <p>
                              <h5 class=""><b>SMK MAHAPUTRA CERDAS UTAMA</b></h5>
                                <p class="alamat">Jl Katapang Andir KM. 4 Kp Pasantren Ds Sukamukti Kec Katapang Kab Bandung</p>
                               
                                <p class="alamat">
                                    {{$master_config->msc_school_phone_number}}
                                </p>
                                
                                <a href="mailto:smkmahaputracerdasutama@gmail.com?subject=Saya%20ingin%20lebih%20tau%20mengenai%20SMK%20Mahaputra&body=Isi%20dengan%20pertanyaan%20mengenai%20SMK%20Mahaputra.%20"><i class="zmdi zmdi-email fa-2x" style="color: darkblue;"></i></a>
                                <a href="https://web.facebook.com/SMKMAHAPUTRACERDASUTAMA"><i class="fa fa-facebook-square fa-2x" style="color: darkblue;"></i></a>
                                <a href="https://www.instagram.com/smkmahaputracerdasutama"><i class="fa fa-instagram fa-2x" style="color: darkblue;"></i></a>
                                <a href="https://www.youtube.com/channel/UCCfYqV-2N44pFhsQpGEedCw"><i class="fa fa-youtube-play fa-2x" style="color: darkblue;"></i></a>
                            </p>
                    </div>

                </div>   
            </div>
            <div class="container" style="color: navy;">
                 <p>
                    SMK MAHAPUTRA CERDAS UTAMA © 2021
                </p>
            </div>
        </footer>
        <!-- akhir footer -->
        @endif
        @endforeach


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

