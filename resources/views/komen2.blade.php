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
                              <li>
                                 <a href="{{url("/artikel2")}}">Artikel</a>
                              </li>
                              <li class="active">
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
      <!-- revolution slider -->
      
<div class="Blog-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="Blogheading">
               <h3>Blog </h3>
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
               <form action="{{url('komen/filter')}}" method="post">
                  @csrf
                  <div class="form-group">
                     <label for="" class="control-label">Nama</label>
                  <input type="text" class="form-control" name="nama" value="{{$nama ??""}}">
                  </div>
                  <div class="form-group">
                     <label for="" class="control-label">Komen</label>
                  <input type="text" class="form-control" name="nama" value="{{$komen ??""}}">
                  </div>
                  <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
               </form>
            </div>
         </div>


      <!-- section --> 
      <div class="section layout_padding blog_blue_bg light_silver">
         <div class="container">
            
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="full">
                     <div class="big_blog">
                        <img class="img-responsive" src="images/blog_1.png" alt="#" />
                     </div>
                     <div class="blog_cont_2">
                        <h3>Why do we use it</h3>
                        <p class="sublittle">March 19 2019  5 READ</p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters as opposed to using Content here content here making..</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->

<!-- section -->
      <section class="layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                     <h4 style="border-bottom: solid #333 1px;">Comments / 2</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_blog_line">
                     <div class="row">
                        <div class="col-md-1">
                           <img src="images/c_1.png" alt="#" />
                        </div>
                        <div class="col-md-9">
                           <div class="full contact_text">
                              <h3>Ilham</h3>
                              <h4>Posted on 29 November 2020 at 22:01 pm</h4>
                              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
                                 dolore magna aliquam erat volutpat.
                              </p>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <a class="reply_bt" href="#">Reply</a>
                        </div>
                     </div>
                  </div>
                  <div class="full comment_blog_line">
                     <div class="row">
                        <div class="col-md-1">
                           <img src="images/c_2.png" alt="#" />
                        </div>
                        <div class="col-md-9">
                           <div class="full contact_text">
                              <h3>Fitri</h3>
                              <h4>Posted on 29 November 2020 at 22:00 pm</h4>
                              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
                                 dolore magna aliquam erat volutpat.
                              </p>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <a class="reply_bt" href="#">Reply</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-12 margin_top_30">
                  <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                     <h4>Post : Your Comment</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_form">
                     <form action="index.html">
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Name" required="#" />
                                    <input type="email" name="email" placeholder="Email" required="#" />
                                 </div>
                                 <div class="col-md-6">
                                    <textarea placeholder="Comment"></textarea>
                                 </div>
                              </div>
                              <div class="row margin_top_30">
                                 <div class="col-md-12">
                                    <div class="center">
                                       <button>Send</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
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