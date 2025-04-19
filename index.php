<?php 
  require_once('./home_header.php');
  require_once('./home_navbar.php');
?>
<style>
    .sales-hero-header h4{
           font-size: 60px;
           font-weight: bolder;
    }
    .sales-hero-header h4 span{
        color:rgb(28, 24, 244);
    }
    .sales-hero-header p{
        margin-top: 15px;
    }
    .hero-btn{
         display: flex;
         gap: 2rem;
         margin-top: 40px;
    }
    .btn-1{
         background-color: #fe7f4c;
         border-radius: 5px;
    }
    .btn-2{
         border: 1px solid rgb(28, 24, 244);
         border-radius: 5px;
    }
    .btn-1 a{
        color: #fff;
        font-weight: bold;
        text-decoration: none;
        font-size: 18px;
    }
    .btn-2 a{
        color: #000;
        font-weight: bold;
        text-decoration: none;
        font-size: 18px;
    }
    .btn-1 , .btn-2{
        padding: 20px 10px;
        /* border: 2px solid #000; */
        width: 100%;
        text-align: center;
    }
    .section {
      padding: 60px 20px;
    }
  
    .section h2 {
      margin-bottom: 30px;
    }
    .highlight {
      background: #f0f0f0;
      padding: 15px;
      border-left: 5px solid #ffc107;
      font-style: italic;
    }
    .btn-join {
      background: #f0f0f0;
      font-weight: bold;
      padding: 15px 30px;
      font-size: 18px;
      border-radius: 30px;
    }
    .btn-join:hover {
      background: #218838;
    }
    .pricing-card {
      border-radius: 15px;
      transition: transform 0.3s ease;
    }
    .pricing-card:hover {
      transform: scale(1.05);
    }
    .hero {
      background:linear-gradient(to right, #0f2027, #203a43, #2c5364);
      color: white;
      padding: 80px 0;
      text-align: center;
    }

    @media(max-width: 600px){
        .hero-btn{
           flex-direction: column;
           gap: 1rem;
        }
        .sales-hero-header h4{
           font-size: 35px;
           font-weight: bolder;
        }
    }
   
</style>
<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>




    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
  

          
      <section class="bg-light p-4">

            <div class="container">
                <div class="row align-items-center justify-content-center " data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-6 sales-hero-header">
                        <h4>Break Free from Financial Struggles</h4>
                        <p>Discover how thousands of people are turning small contributions into big financial growth — while also changing lives. You don’t need to sell anything, refer anyone, or beg anyone. Just join a system that works.
                        </p>

                        <div class="hero-btn">
                            <div class="btn-1">
                                <a href="">Create Account</a>
                            </div>
                            <div class="btn-2">
                                <a href="">Join Community</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src="./assets/images/circle-2.png" alt="">
                        
                    </div>
                </div>


                
            </div>
        </section>
        <section class="section mt-5">
            <div class="container">
            <div class="row align-items-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-md-6 animate__animated animate__fadeInLeft">
                <h2>You’re Working So Hard, But Still Struggling… Why?</h2>
                <p class="highlight">"Why is money never enough, no matter how hard I try?"</p>
                <p>You hustle every day, yet money seems to vanish. It’s not your fault. The system is broken — and GIVAS is here to change that.</p>
                </div>
                <div class="col-md-6 animate__animated animate__fadeInRight">
                <img src="./assets/images/tired-2.png" alt="Struggling Worker" class="img-fluid">
                </div>
            </div>
            </div>
        </section>

     
        <section class="section text-center">
            <div class="container">
            <h2 class="animate__animated animate__fadeIn">The Bitter Truth No One Tells You</h2>
            <p class="highlight">"Hard work alone doesn’t guarantee success today."</p>
            <p>Degrees, skills, and big dreams aren’t enough. GIVAS exists because people like you deserve more — and now you can have it.</p>
            </div>
        </section>



        <section class="section">
            <div class="container">
            <div class="row align-items-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-md-6">
                <img src="./assets/images/pana.png" alt="Community Impact" class="img-fluid animate__animated animate__fadeInLeft">
                </div>
                <div class="col-md-6 animate__animated animate__fadeInRight">
                    <h2>GIVAS: The Simple, Powerful System</h2>
                    <p>No referrals. No selling. No begging. Just join, contribute a little, and earn as others join — all while helping shelters and orphanages.</p>
                
                </div>
            </div>
            </div>
        </section>

        <section class="hero">
                <div class="container">
                <h1 class="display-4 fw-bold animate__animated animate__fadeInDown text-white">Don’t Miss This! Join the Free Class Now</h1>
                <p class="lead animate__animated animate__fadeInUp py-3">Seats are limited. Secure your spot and learn the full secret behind GIVAS today.</p>
                <a href="#join" class="btn btn-join mt-4 animate__animated animate__pulse animate__infinite">Join Now - Limited Space</a>
                </div>
        </section>
       


   


    </div><!-- /.page-wrapper -->


   <?php 
      require_once('./mobile_navbar.php');

   ?>

   

    <a href="index.html#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>


    <?php 
      require_once('./script.php')
    ?>
</body>

</html>