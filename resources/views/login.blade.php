<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login - Warehouse</title>
   <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   <div class="navbar">
      <a href="/" class="logo">PT.BERANDA</a>
      <div class="nav-links">
         <a href="/">Home</a>
         <a href="#">About</a>
         <a href="#">Our Team</a>
      </div>
   </div>

   <div class="wrapper">
      <form method="post" action="{{ route('login') }}">
         @csrf
         <h1>Login</h1>
         <div class="input-box">
            <input type="email" name="email" placeholder="Email" required>
            <i class='bx bxs-envelope'></i>
         </div>
         <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt'></i>
         </div>
         <button type="submit" class="btn">Login</button>
         <div class="register-link">
            <center>
               <br>
            <p>Don't have an account? <a href="{{ route('signup') }}">Sign Up</a></p>
            </center>
         </div>
      </form>
   </div>
</body>
</html>
