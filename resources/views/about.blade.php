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
      
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="{{url('img/profile.png')}}" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I am Dhruv</h2>
                        <p class="about__text">A passionate Web Designer based in Gujarat. With a background in Computer Science, I enjoy exploring watching movie,Travellimg world, and I'm always eager to learn new things.
                             I take pride in my skills in html and css, and I'm committed to Website Designer. In my free time, I love to play games, and I am 
                             always looking for ways to grow both personally and professionally.</p>

</p>           
                    </div>                                   
                </div>
</section>
<section class="work section" id="work">
                           <h2 class="section-title">Work</h2>
           
           
             <div class="container">              
               <h2>Personal Details</h2>
               <table class="table table-hover table-primary table-bordered">
                   <thead>
                       <tr>
                           <th>Full Name</th>
                           <td>Dhruv Ghodadra</td>
                           
                        </tr>
                        <tr>
                            <th>Job Title</th>
                            <td>Web Designer</td>
                            
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td>Gujarat</td>
                            
                        </tr>
                        <tr>

                            <th>Key Skills</th>
                            <td>Logo Design<br>Web Design [HTML,CSS,JS]</td>
            
                         </tr>
                         <tr>
                            <th>Education</th>
                             <td>Bachelor’s Degree in Computer Science, Atmiya University (2024)</td>
                         </tr>
                         <tr>
                             <th>Phone No</th>
                             <td>+91 7576338024</td>

                         </tr>
                         <tr>
                             <th>Email No</th>
                             <td>dhruvghodadra@gmail.com</td>
                         </tr>
  </thead>


</table>
              </div>
           
           <div class="container mt-3">
 <h2>Edcation Details</h2>
           
            <table class="table table-bordered table-dark mt-3">
              <thead>
                <tr>
                  <th>Degree</th>
                  <th>Education</th>
                  <th>Year Of Graduation</th>
                  <th>CGPA</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>Master Of Computer Applications</td>
                    <td>Atmiya University</td>
                    <td>2026</td>
                    <td>Current</td>
                </tr>
                <tr>
                  <td>Bachelor Of Computer Applications</td>
                  <td>Atmiya University</td>
                  <td>2024</td>
                  <td>8.83</td>
                </tr>
                <tr>
                  <td>High School</td>
                  <td>New Era School</td>
                  <td>2020</td>
                  <td>78.98%</td>
                </tr>
              </tbody>
            </table>
                       
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
