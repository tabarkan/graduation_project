{{-- @foreach ($doctors as $doctor)

@if($doctor->accepted == 1)
__________________________<br>
Name : {{$doctor->first_name}} {{$doctor->last_name}}<br>
Hospital : {{$doctor->hospital}}<br>
specialization : {{$doctor->specialization}}<br>
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
            <li class="breadcrumb-item active" aria-current="page">الأطباء</li>
            <li class="breadcrumb-item"><a href="index.html">الصفحة الرئيسية</a></li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">الأطباء</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="p-4 bg-white" >
        <form action="{{route('doctor.specialization')}}" method="POST">
          @csrf
        <select class="form-select" onchange="this.form.submit()" name="specialization">
          <option value="">اختر الاختصاص</option>
          <option value="جلدية">جلدية</option>
          <option value="نفسية">نفسية</option>
          <option value="جراحة">جراحة</option>
          <option value=" باطني"> باطني</option>
          <option value=" نووي">نووي </option>
          <option value="عظام">عظام</option>
          <option value="المخ والاعصاب">المخ والاعصاب</option>
          <option value="اسنان">اسنان</option>
          <option value="اطفال">اطفال</option>
          <option value="انف واذن وحنجرة">انف واذن وحنجرة</option>
          <option value="الجهاز البولي">الجهاز البولي</option>
          <option value="عيون">عيون</option>
          <option value="نساء">نساء</option>
          <option value="قلب">قلب</option>
          <option value="اخرى">اخرى</option>
        </select>
      </form>
      </div>
      
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">
            @foreach ($doctors as $doctor)
                <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                    <div class="card-doctor">
                    <div class="header">
                        <img src="{{asset('doctorsImages/'.$doctor->image_path)}}" alt="">
                        <div class="meta">
                        <a href="{{route('user.show.doctor', $doctor->id)}}"><span class="mai-call"></span></a>
                        <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-lg fw-bold mb-0">Dr. {{$doctor->first_name}} {{$doctor->last_name}}</p>
                        <span class="text-sm text-grey">{{$doctor->specialization}}</span>
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
      </form>
    </div> <!-- .container -->
  </div> <!-- .page-section --> --}}
  

  <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        {{-- <div class="col-lg-4 wow zoomIn"> --}}
          {{-- <div class="img-banner d-none d-lg-block">
            <img src="../assets/img/mobile_app.png" alt="">
          </div> --}}
        {{-- </div> --}}
        {{-- <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">اختر ماتحتاج من القائمة ادنى</h1>
          <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
        </div> --}}
      </div>
    </div>
  </div> <!-- .banner-home -->

 
  @yield('footer')
    