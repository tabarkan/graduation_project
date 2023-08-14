
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
  
  <style></style>
</head>
<body>

  
  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary"> iQ </span>صحتي</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link {{ Route::currentRouteName() == 'user.suggest' ? 'active' : ''}}" href="{{route('user.suggest')}}">اقترح علينا</a>
            </li>
            <li class="nav-item">

              <a href="{{route('user.diseases')}} "class="nav-link  {{ Route::currentRouteName() == 'user.diseases' ? 'active' : ''}} ">الأمراض</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Route::currentRouteName() == 'user.hospitals' ? 'active' : ''}}" href="{{route('user.hospitals')}}">المستشفيات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Route::currentRouteName() == 'user.doctors' ? 'active' : ''}}" href="{{route('user.doctors')}}">الأطباء</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : ''}}" href="{{route('dashboard')}}">الصفحة الرئيسية</a>
            </li>
            @if(Auth::user())
            <li class="nav-item">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                  <button type="submit" class="btn btn-primary ml-lg-3">تسجيل خروج</button>
               </form>
            </li>
            <li class="nav-item">
              @if (Auth::user()->role == 1)
                <a href="{{route('admin.main')}}" class="btn btn-primary ml-lg-3">Admin Dashboard</a>
              @endif
            </li>
            @else
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <li class="nav-item">
                {{-- <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a> --}}

  
                <a href="{{ route('login') }}" class="btn btn-primary ml-lg-3" >تسجيل دخول</a>
            </li>
          </form>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <li class="nav-item">
            <a  href="{{ route('register') }}" class="btn btn-primary ml-lg-3" href="#">انشاء حساب</a>
          </li>
        </form>
           @endif 
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

@endsection


@section('footer')
<footer class="page-footer">
  <div class="col-lg-8 wow fadeInRight text-center">
    <h1 class="font-weight-normal mb-3">اختر ماتحتاج من القائمة ادنى</h1>
    <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
    <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
  </div>
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3 text-center">
          <h5>مكونات الموقع</h5>
          <ul class="footer-menu">
            <li><a href="{{route('user.doctors')}}" href="#">الاطباء</a></li>
            <li><a href="{{route('user.hospitals')}}" href="#">المستشفيات</a></li>
            <li><a href="{{route('user.diseases')}}" href="#"> الامراض</a></li>
            <li><a href="{{route('user.suggest')}}" href="#">الاقتراحات</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3 text-center">
          <h5>اقتراحات المستخدم</h5>
          <ul class="footer-menu">
            <li><a href="{{route('user.add.doctor')}}" href="#">اضافة طبيب</a></li>
            <li><a href="{{route('user.add.hospital')}}" href="#">اضافة مستشفى</a></li>
            <li><a href="{{route('user.add.disease')}}" href="#">اضافة مرض</a></li>
            <li><a href="#">بعدين نقرر شنضيف</a></li>
          </ul>
        </div>
        {{-- <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div> --}}
        <div class="col-sm-6 col-lg-3 py-3">
          {{-- <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a> --}}

          <h5 class="mt-3 text-center">Social Media</h5>
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

      <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
        ©
        <script>
          document.write(new Date().getFullYear() + ",");
        </script>
        made with <i class="fa fa-heart"></i> by
        <a href="#" class="font-semibold text-slate-700 dark:text-white" target="_blank">students 4th Tim</a>
        for a healthy web.
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

  
  