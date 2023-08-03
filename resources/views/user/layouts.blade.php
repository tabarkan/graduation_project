
@section('header')
<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health</title>

  <link rel="stylesheet" href="{{asset('one-health/assets/css/maicons.css')}}">

  <link rel="stylesheet" href="{{asset('one-health/assets/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('one-health/assets/vendor/owl-carousel/css/owl.carousel.css')}}">

  <link rel="stylesheet" href="{{asset('one-health/assets/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('one-health/assets/css/theme.css')}}">
</head>
<body>

  <div class="">
    <a class="bg-primary rounded-circle text-center position-absolute top-50 start-50 p-2" href="">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="white" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z"/></svg>
    </a>
  </div>
  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary"> صحتي  </span> </a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">الخدمات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">الأمراض</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">المستشفيات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('user.doctors')}}">الأطباء</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{route('dashboard')}}">الصفحة الرئيسية</a>
            </li>
            @if(Auth::user())
            <li class="nav-item">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                  <button type="submit" class="btn btn-primary ml-lg-3">Logout</button>
               </form>
            </li>
            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="#">تسجيل دخول / انشاء حساب</a>
            </li>
            @endif
            
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

@endsection









@section('footer')
<footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
    </div>
  </footer>

<script src="{{asset('one-health/assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('one-health/assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('one-health/assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('one-health/assets/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('one-health/assets/js/theme.js')}}"></script>
  
</body>
</html>
@endsection

  
  