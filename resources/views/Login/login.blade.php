<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>E-Lades - Masuk</title>
   <link rel="icon" href="{{ asset('assets/img/logo.png') }}">
   <link href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,600') }}" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel='stylesheet' href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}">

</head>

<body>
   <!-- partial:index.partial.html -->
   <div class="container">
      <section id="formHolder">

         <div class="row">

            <!-- Brand Box -->
            <div class="col-sm-6 brand">

               <div class="heading">
                  <a class="logo"><img src="{{ asset('assets/img/Logokab.png') }}" alt="Logo" style="max-width: 120px;"></a>
                  <h2>Pemerintah</h2>
                  <p>Desa Pesudukuh</p>
               </div>

               <div class="success-msg">
                  <p>Lupa kata sandi? klik di Sini</p>
                  <a href="#" class="profile">Your Profile</a>
               </div>
            </div>


            <!-- Form Box -->
            <div class="col-sm-6 form">

               <!-- Login Form -->
               <div class="login form-peice">
                  <form class="login-form" action="/dashboard" method="post">
                     <div class="form-group">
                        <label for="loginemail">Email</label>
                        <input type="email" name="loginemail" id="loginemail" required>
                     </div>

                     <div class="form-group">
                        <label for="loginPassword">Kata sandi</label>
                        <input type="password" name="loginPassword" id="loginPassword" required>
                     </div>

                     <div class="CTA">
                        <input type="submit" value="Masuk">
                        <a href="#" class="switch">Lupa Katasandi</a>
                     </div>
                  </form>
               </div><!-- End Login Form -->


               <!-- Signup Form -->
               <div class="signup form-peice switched">
                  <form class="signup-form" action="#" method="post">



                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="emailAdress" id="email" class="email">
                        <span class="error"></span>
                     </div>

                     <!-- <div class="form-group">
                        <label for="phone">Phone Number - <small>Optional</small></label>
                        <input type="text" name="phone" id="phone">
                     </div> -->

                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="pass">
                        <span class="error"></span>
                     </div>

                     <div class="form-group">
                        <label for="passwordCon">Konfirmasi Password</label>
                        <input type="password" name="passwordCon" id="passwordCon" class="passConfirm">
                        <span class="error"></span>
                     </div>

                     <div class="CTA">
                        <input type="submit" value="Konfirmasi" id="submit">
                        <a href="#" class="switch">Masuk</a>
                     </div>
                  </form>
               </div>
               <!-- end signup -->
            </div>
         </div>

      </section>


      <footer>
         <p>
            Form made by: <a href="http://mohmdhasan.tk" target="_blank">Mohmdhasan.tk</a>
         </p>
      </footer>

   </div>
   <!-- partial -->
   <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
   <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
   <script src="{{ asset('assets/js/script.js')}}"></script>

</body>

</html>