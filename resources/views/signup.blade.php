<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sign Up - Warehouse</title>
   <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   <!-- Navigation Bar -->
   <div class="navbar">
      <a href="/" class="logo">PT.BERANDA</a>
      <div class="nav-links">
         <a href="/">Home</a>
         <a href="#">About</a>
         <a href="#">Our Team</a>
      </div>
   </div>

   <!-- Sign-Up Form Wrapper -->
   <div class="wrapper">
      <!-- Tambahkan route 'signup' dan method POST -->
      <form method="POST" action="{{ route('signup') }}">
         @csrf <!-- Ini untuk token CSRF Laravel, wajib ditambahkan -->

         <h1>Sign Up</h1>

         <!-- Input for Name -->
         <div class="input-box">
            <input type="text" name="name" placeholder="Username" required>
            <i class='bx bxs-user'></i>
            <!-- Tampilkan pesan error jika ada kesalahan pada input -->
            @error('name')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>

         <!-- Input for Email -->
         <div class="input-box">
            <input type="email" name="email" placeholder="Email" required>
            <i class='bx bxs-envelope'></i>
            <!-- Tampilkan pesan error jika ada kesalahan pada input -->
            @error('email')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>

         <!-- Input for Password -->
         <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt'></i>
            <!-- Tampilkan pesan error jika ada kesalahan pada input -->
            @error('password')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>

         <!-- Input for Confirm Password -->
         <div class="input-box">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <i class='bx bxs-lock'></i>
         </div>

         <!-- Sign-Up Button -->
         <button type="submit" class="btn">Sign Up</button>

         <!-- Link to Sign-In Page -->
         <div class="register-link">
            <center>
               <br>
               <p>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
            </center>
         </div>
      </form>
   </div>
</body>
</html>
