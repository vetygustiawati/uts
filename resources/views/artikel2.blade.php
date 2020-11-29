<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Vety Gustiawati</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li>
                                 <a href="{{url("/about")}}">About</a>
                              </li>
                              <li class="active">
                                 <a href="{{url("/artikel2")}}">Artikel</a>
                              </li>
                              <li>
                                 <a href="{{url("/komen2")}}">Komentar</a>
                              </li>
                              <li>
                                 <a href="{{url("/kontak")}}">Contact us</a>
                              </li>
                              <li>
                                 <a href="{{url("/login2")}}">Login</a>
                              </li>
                              <li>
                                 <a href="#"><img src="images/search_icon.png" alt="#" /></a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <div class="Marketing-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="Marketingheading">
               <h3>Marketing</h3>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container">
   <div class="row">
      <div class="col-md-12 mt-5">
         <div class="card">
            <div class="card-header">
               Filter
            </div>
            <div class="card-body">
               <form action="{{url('artikel/filter')}}" method="post">
                  @csrf
                  <div class="form-group">
                     <label for="" class="control-label">Judul</label>
                  <input type="text" class="form-control" name="judul" value="{{$judul ??""}}">
                  </div>
                  <div class="form-group">
                     <label for="" class="control-label">Tanggal</label>
                  <input type="text" class="form-control" name="tanggal" value="{{$tanggal ??""}}">
                  </div>
                  <div class="form-group">
                     <label for="" class="control-label">Tags</label>
                  <input type="text" class="form-control" name="tags" value="{{$tags ??""}}">
                  </div>
                  <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
               </form>
            </div>
         </div>
      <!-- section --> 
      <div class="section layout_padding dark_bg">
         <div class="container">
            
            <div class="row">
               <div class="col-md-6">
                  <img src="images/marketing_img.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h3 class="white_font">Where can I get some</h3>
                     <h5 class="grey_font">March 19 2019 5 READ</h5>
                     <p class="white_font">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined g to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator..</p>
                  </div>
               </div>
            </div>
            
            </div>
         </div>
      </div>
      <!-- end section -->

       <!-- section --> 
      <div class="section layout_padding">
         <div class="container">
            
            <div class="row">
   <div class="col-md-6">
                  <div class="full blog_cont">
                     <h3>Where can I get some</h3>
                     <h5>March 19 2019 5 READ</h5>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined g to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator..</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <img src="images/marketing_img.png" alt="#" />
               </div>
               
            </div>
         </div>
      </div>
      <!-- end section -->
      
      <!-- footer -->
      
      <div class="cpy">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>Copyright © 2020 Design by <a href="https://html.design/">Free Html Templates</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>