{{-- @foreach ($hospitals as $hospital)

@if($hospital->accepted == 1)
__________________________<br>
Name : {{$hospital->name}}<br>
Number : {{$hospital->contact_number}}<br>
Website : {{$hospital->website}}<br>
__________________________<br>
@endif

@endforeach --}}

@include('user.layouts')
@yield('header')
  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item active" aria-current="page">المستشفيات</li>
            <li class="breadcrumb-item"><a href="index.html">الصفحة الرئيسية</a></li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">المستشفيات</h1>
      </div> <!-- .container -->
      
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->


  <div class="page-section bg-light">
    <div class="container">
      <div class="p-4 bg-white" >
        <form action="{{route('hospital.governorate')}}" method="POST">
          @csrf
        <select class="form-select" onchange="this.form.submit()" name="governorate">
            <option>اختر المحافظة</option>
            <option value="بغداد">بغداد</option>
            <option value="نينوى">نينوى</option>
            <option value="البصرة">البصرة</option>
            <option value="بابل">بابل</option>
            <option value="النجف">النجف</option>
            <option value="كربلاء">كربلاء</option>
            <option value="ديالى">ديالى</option>
            <option value="صلاح الدين">صلاح الدين</option>
            <option value="الانبار">الانبار</option>
            <option value="القادسية">القادسية</option>
            <option value="ذي قار">ذي قار</option>
            <option value="كركوك">كركوك</option>
            <option value="المثنى">المثنى</option>
            <option value="ميسان">ميسان</option>
            <option value="واسط">واسط</option>
            <option value="اربيل">اربيل</option>
            <option value="حلبجة">حلبجة</option>
            <option value="دهوك">دهوك</option>
            <option value="السليمانية">السليمانية</option>
            
        </select>
      </form>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">
            @foreach ($hospitals as $hospital)
                <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                    <div class="card-doctor">
                    <div class="header">
                        <img src="{{asset('hospitalsImages/'.$hospital->image_path)}}" alt="">
                        <div class="meta">
                          <a href="{{route('user.show.hospital', $hospital->id)}}"><span class="mai-call"></span></a>
                        <a href="#"><span class="mai-call"></span></a>
                        <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-lg fw-bold mb-0">{{$hospital->name}} </p>
                        <span class="text-sm text-grey">{{$hospital->governorate}}</span>
                    </div>
                    </div>
                </div>
              </a>
            @endforeach
            
          </div>

        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  {{-- <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select">
              <option value="general">General Health</option>
              <option value="cardiology">Cardiology</option>
              <option value="dental">Dental</option>
              <option value="neurology">Neurology</option>
              <option value="orthopaedics">Orthopaedics</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form> --}}
    </div> <!-- .container -->
  </div> <!-- .page-section -->
  

  <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        {{-- <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="../assets/img/mobile_app.png" alt="">
          </div>
        </div> --}}
        {{-- <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">اختر ماتحتاج من القائمة ادنى</h1>
          <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
        </div> --}}
      </div>
    </div>
  </div> <!-- .banner-home -->

 
  @yield('footer')
    