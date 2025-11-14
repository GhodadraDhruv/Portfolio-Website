<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{url('css/styles.css')}}">
                
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <title>Portfolio Website</title>
        <style>
            .s{
                margin-top:-40px;
            }
            
    .h{
        padding-left:15px;
        padding-top: 10px;
    }
    .im{
        width: 320px;
    }
    .im2{
        width: 320px;
        height: 210px;
    }
    .im3{
        width: 320px;
        height: 210px;
    }
    .img1{
        height: 600px;
        width: 1480px;   
        margin-top: 80px;  
        margin-left:30px;  
    }
    .hm{
        margin-top: -600px;
    }
    .tt{
          color: white;
    }
    .pf{
        left:750px;
    }
        </style>
    </head>
    <body>
       
       <header class="l-header bg-dark">
           <nav class="nav bd-grid">
               <div>
                   <a href="#" class="text-white">Dhruv</a>
               </div>

               <div class="nav__menu" id="nav-menu">
                   <ul class="nav__list">
                       <li class="nav__item"><a href="/index" class="text-white">Home</a></li>
                       <li class="nav__item"><a href="/about" class="text-white">About</a></li>                                
                       <li class="nav__item"><a href="/work" class="text-white">Work</a></li>
                       <li class="nav__item"><a href="/skills" class="text-white">Skills</a></li>
                       <li class="nav__item"><a href="/contact" class="text-white">Contact</a></li>
                   </ul>
               </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>
    
        <main class="l-main">
            
            <div>
                <img src="./img/bg.png" class="img1">
                
            </div>
            <section class="home bd-grid hm" id="home">
                
                <div class="home__data">
                    <h1 class="tt home__title">Hi,<br>I am <span class="home__title-color">Dhruv</span><br> Web Designer</h1>

                    <a href="/contact" class="button">Contact</a>
                </div>

                <div class="home__social">
                    <a href="https://linkedin.com" class="home__social-icon bg-white"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://instagram.com" class="home__social-icon bg-white"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://github.com" class="home__social-icon bg-white"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img pf">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">   
             <g>                            
                 <image class="home__blob-img" href="{{url('img/profile-mod.png')}}"/>
             </g>
         </svg>
     </div>
 </section>
<hr>
<section class="work section" id="work">
     <h2 class="section-title">Work</h2>
     <div class="work__container bd-grid">
         <a href="" class="work__img">
             <img src="./img/work1.png" class="im">
             <h4 class="h">Camera E-Commerce Website</h4>
         </a>
         <a href="" class="work__img">
             <img src="./img/work4.png" class="im2">
             <h4 class="h">Car Service Management System</h4>
         </a>
         <a href="" class="work__img">
             <img src="./img/work5.png" class="im3">
             <h4 class="h">PortFolio</h4>
         </a>
     </div>
 </section>
        
           </main>

     
        <footer class="footer">
            <p class="footer__title">Dhruv</p>
            <div class="footer__social">
                <a href="https://facebook.com" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="https://instagram.com" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="https://x.com" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p class="footer__copy">&#169; Dhruv. All rigths reserved</p>
        </footer>
                
        <script src="https://unpkg.com/scrollreveal"></script>

        <script src="assets/js/main.js"></script>
    </body>
</html>
