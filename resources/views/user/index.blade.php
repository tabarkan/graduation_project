@include('user.layouts')
@yield('header')
@if (session()->has('message'))
<div class="alert alert-success container text-center mt-4" role="alert">
    {{session()->get('message')}}
</div>
@endif
  <div class="page-hero bg-image overlay-dark" style="background-image: url({{asset('one-health/assets/img/bg_image_T.jpg')}});">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <h1 class="display-4">صحتك افضل</h1>
        <a href="{{route('user.doctors')}}" href="#" class="btn btn-primary">ابدأ استشارتك</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
        
    
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent d-flex align-items-center justify-content-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="38" viewBox="0 0 24 24"><path fill="white" d="M19.82 14A1.746 1.746 0 0 0 23 13a1.746 1.746 0 0 0-3.18-1H19c0-1.57-.5-3-1.4-4.19l1.34-1.34c.56.1 1.13-.06 1.56-.47c.67-.69.67-1.8 0-2.5c-.69-.67-1.8-.67-2.5 0c-.41.43-.57 1-.47 1.56L16.19 6.4c-.92-.69-2-1.15-3.19-1.32v-1.4A1.746 1.746 0 0 0 12 .5a1.746 1.746 0 0 0-1 3.18v1.4c-.9.13-1.74.42-2.5.86L7.39 4.35c.19-.52.14-1.12-.2-1.6a1.75 1.75 0 0 0-2.44-.43c-.79.55-.99 1.64-.43 2.43c.34.49.88.75 1.43.75l1.18 1.68c-.43.43-.77.91-1.06 1.44A1.76 1.76 0 0 0 4 9c-.67.7-.67 1.8 0 2.5c.29.27.64.43 1 .5c0 .54.07 1.06.18 1.56l-1.31.35c-.42-.35-1-.5-1.58-.35a1.75 1.75 0 1 0 .92 3.38c.57-.16 1-.58 1.18-1.1l1.51-.41c.45.79 1.05 1.49 1.75 2.07l-1.1 2c-.55.08-1.05.39-1.34.92a1.749 1.749 0 1 0 3.08 1.66c.28-.52.27-1.12.02-1.61l1.07-1.97c.81.32 1.69.5 2.62.5h.18c-.13.26-.18.56-.18.88c.08.97.92 1.69 1.88 1.62s1.69-.92 1.62-1.88c-.04-.5-.29-.94-.65-1.23c.47-.21.92-.48 1.34-.79l2.34 2.34c-.1.56.06 1.13.47 1.56c.7.67 1.8.67 2.5 0s.67-1.8 0-2.5c-.43-.41-1-.57-1.56-.47l-2.34-2.34c.49-.65.87-1.39 1.11-2.19h1.11m-9.32-2c-.83 0-1.5-.67-1.5-1.5S9.67 9 10.5 9s1.5.67 1.5 1.5s-.67 1.5-1.5 1.5m3.5 3c-.55 0-1-.45-1-1s.45-1 1-1s1 .45 1 1s-.45 1-1 1Z"/></svg>
                </div>
              <a href="{{route('user.diseases')}}" class="text-decoration-none text-center"><p><span> البحث </span>عن مرض</p> </a>
            </a>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary d-flex align-items-center justify-content-center text-white text-center">
<svg xmlns="http://www.w3.org/2000/svg" width="40" height="44" viewBox="0 0 64 64"><path fill="white" d="M32 49.813v1.875a.94.94 0 0 0 .938.938h27.188v-3.75H32.938a.94.94 0 0 0-.938.937m28.125-6.563H32.938a.94.94 0 0 0-.938.938v1.875a.94.94 0 0 0 .938.937h27.188v-3.75z"/><path fill="white" d="M61.063 58.25h-.938V54.5H32.938a.941.941 0 0 0-.938.938v2.813h-1.875V42.313a.94.94 0 0 1 .938-.938h29.063v-3.75a1.88 1.88 0 0 0-1.875-1.875H45.125V22.625A5.63 5.63 0 0 0 39.5 17h-4.688V9.5a7.5 7.5 0 0 0-15 0V17h-4.688A5.63 5.63 0 0 0 9.5 22.625V35.75h-.937c-.516 0-1.172.351-1.457.78l-2.711 4.064c-.285.43-.52 1.202-.52 1.718V58.25h-.937a.941.941 0 0 0-.938.938v1.875a.94.94 0 0 0 .938.937h58.125a.94.94 0 0 0 .937-.937v-1.875a.941.941 0 0 0-.937-.938m-38.438-5.625v5.625h-.938v-5.625h-3.281V54.5c.258 0 .469.212.469.469v.938a.47.47 0 0 1-.469.469v1.875h-.938v-1.875a.47.47 0 0 1-.469-.469v-.938c0-.257.211-.469.469-.469v-1.875h-3.281v5.625h-.937v-6.563h9.376v.938zm4.688-49.219A6.101 6.101 0 0 1 33.407 9.5c0 3.36-2.733 6.094-6.094 6.094S21.219 12.86 21.219 9.5a6.1 6.1 0 0 1 6.094-6.094M11.375 22.625a3.761 3.761 0 0 1 3.75-3.75H39.5a3.761 3.761 0 0 1 3.75 3.75V35.75H26.375a1.88 1.88 0 0 0-1.875 1.875V58.25h-.938v-7.219h-11.25v7.219h-.938V22.625zM6.688 40.906c0-.257.211-.469.469-.469h.938c.258 0 .469.212.469.469v4.688a.471.471 0 0 1-.469.469h-.939a.471.471 0 0 1-.469-.469v-4.688zm0 8.438c0-.257.211-.469.469-.469h.938c.258 0 .469.212.469.469v4.688a.47.47 0 0 1-.469.469h-.939a.47.47 0 0 1-.469-.469v-4.688z"/><path fill="white" d="M13.719 34.813h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m3.75 0h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m3.75 0h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m3.75 0h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m3.75 0h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m-15 7.5h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m3.75 0h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m3.75 0h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m-7.5 7.5h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m3.75 0h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m3.75 0h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m-7.5-22.5h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m3.75 0h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m3.75 0h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m3.75 0h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m3.75 0h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m3.75 7.5h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m0-7.5h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m3.75 7.5h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m0-7.5h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m3.75 7.5h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469m0-7.5h.938a.471.471 0 0 0 .469-.469v-4.688a.471.471 0 0 0-.469-.469h-.938a.471.471 0 0 0-.469.469v4.688c0 .257.211.469.469.469M25.75 11.063v2.344c0 .43.353.781.781.781h1.563a.784.784 0 0 0 .781-.781v-2.344h2.344c.43 0 .781-.352.781-.781V8.719a.783.783 0 0 0-.781-.781h-2.344V5.594a.784.784 0 0 0-.781-.781h-1.563a.784.784 0 0 0-.781.781v2.344h-2.344a.783.783 0 0 0-.781.781v1.563c0 .43.352.781.781.781h2.344"/></svg>
              </div>
             <a href="{{route('user.hospitals')}}" class="text-decoration-none text-center"> <p><span> البحث </span>عن مستشفى </p> </a>
             </a>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape d-flex align-items-center justify-content-center bg-secondary text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="34" viewBox="0 0 21 24"><path fill="white" d="m6.53 8.098l.14-.012a.305.305 0 0 0 .141-.053l-.001.001c.134.462.298.948.503 1.457c.263.666.522 1.213.812 1.741l-.04-.08c-.024.364-.053.738-.091 1.1a2.565 2.565 0 0 1-.129.627l.005-.018c-.012.005-.029 2.08-.029 2.08a2.868 2.868 0 0 0 2.198 2.787l.02.004a.384.384 0 0 1 .357-.246h.574a.39.39 0 0 1 .356.243l.001.003a2.877 2.877 0 0 0 2.229-2.789v-.001s-.035-2.066-.053-2.08a3.152 3.152 0 0 1-.122-.593l-.001-.015c-.035-.364-.058-.729-.091-1.1c.247-.446.506-.992.734-1.555l.038-.106c.205-.509.364-.994.503-1.457a.297.297 0 0 0 .139.053h.001l.141.012c.17.018.32-.122.334-.339l.152-1.931v-.002a.32.32 0 0 0-.279-.317h-.019a7.143 7.143 0 0 0-.242-2.999l.013.051A4.27 4.27 0 0 0 11.725.122l-.026-.004a5.847 5.847 0 0 0-.993-.112h-.021a5.49 5.49 0 0 0-1.038.118l.036-.006a4.295 4.295 0 0 0-3.114 2.419l-.011.027a7.047 7.047 0 0 0-.225 2.985l-.004-.037a.316.316 0 0 0-.282.313v.007l.152 1.931c.014.222.166.356.33.338z"/><path fill="white" d="M21.416 20.878c-.07-3.04-.374-3.728-.538-4.194c-.065-.187-.118-1.451-2.206-2.271c-1.28-.504-2.932-.514-4.33-1.105v1.644a3.632 3.632 0 0 1-2.944 3.56l-.023.004a.384.384 0 0 1-.374.32h-.018v1.24a2.194 2.194 0 1 0 4.388 0v-.866a1.248 1.248 0 1 1 .588-.055l-.009.003v.965a2.774 2.774 0 0 1-5.548 0v-.05v.002v-1.251a.381.381 0 0 1-.35-.318v-.002a3.635 3.635 0 0 1-2.954-3.556v-1.657c-1.404.603-3.066.615-4.353 1.12c-2.094.819-2.142 2.08-2.206 2.27c-.16.468-.468 1.153-.538 4.195c-.012.4 0 1.013 1.206 1.549c2.626 1.03 6.009 1.35 9.344 1.58h.32c3.342-.228 6.72-.547 9.344-1.58c1.201-.533 1.212-1.142 1.201-1.546zm-14.681-1.24H5.489v1.251h-.89v-1.247H3.353v-.89h1.246v-1.246h.89v1.246h1.246z"/><path fill="white" d="M16.225 17.965v-.001a.673.673 0 1 0 0 .001z"/></svg>
               </div>
             <a href="{{route('user.doctors')}}" class="text-decoration-none text-center"> <p ><span>البحث</span> عن طبيب</p> </a>
            </a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div style="transform: scaleX(-1)" class="col-lg-6 fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="{{asset('one-health/assets/img/bg-doctor.png')}}" alt="">
            </div>
            {{-- <div class="img-place custom-img-1">
              <img src="{{asset('one-health/assets/img/bg-disease.png')}}" alt="">
            </div> --}}
          </div>
          <div class="col-lg-6 py-3 wow text-right fadeInUp">
            <h1>اهلاً بكم في موقع صحتي </h1>
            <p class="text-grey mb-4">موقع يحتوي على كل مايخص الصحه من الاطباء والمستشفيات والامراض والعلاجات وغيرها</p>
            <a href=""about.html"" class="btn btn-primary">للمزيد</a>
          </div>
          
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">اشهر  المستشفيات</h1>
      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('one-health/assets/img/hospitalT/bag.jpeg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">مستشفى بغداد التعليمي</p>
              <span class="text-sm text-grey">بغداد</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('one-health/assets/img/hospitalT/mos.jpeg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">مستشفى الموصل العام</p>
              <span class="text-sm text-grey"> الموصل</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('one-health/assets/img/hospitalT/bas.jpeg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">مستشفى البصرة العام</p>
              <span class="text-sm text-grey"> البصرة</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('one-health/assets/img/hospitalT/hla.jpeg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">مستشفى الحلة التعليمي</p>
              <span class="text-sm text-grey">بابل</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('one-health/assets/img/hospitalT/nag.jpeg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">مستشفى النجف التعليمي</p>
              <span class="text-sm text-grey">النجف</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('one-health/assets/img/hospitalT/kar.jpeg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">مستشفى الكفيل التخصصي</p>
              <span class="text-sm text-grey">كربلاء</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('one-health/assets/img/hospitalT/deo.jpeg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0"> مستشفى الديوانيةالتعليمي</p>
              <span class="text-sm text-grey">الديوانية</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('one-health/assets/img/hospitalT/bq.jpeg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">مستشفى بعقوبة التعليمي </p>
              <span class="text-sm text-grey">ديالى</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('one-health/assets/img/hospitalT/sal.jpeg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">مستشفى صلاح الدين العام </p>
              <span class="text-sm text-grey">صلاح الدين</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('one-health/assets/img/hospitalT/an.jpeg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">مستشفى الرمادي التعليمي </p>
              <span class="text-sm text-grey">الانبار</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('one-health/assets/img/hospitalT/qad.jpeg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">مستشفى القادسية العام </p>
              <span class="text-sm text-grey">القادسية</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('one-health/assets/img/hospitalT/the.jpeg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">مستشفى الحسين العام </p>
              <span class="text-sm text-grey">ذي قار</span>
            </div>
          </div>
        </div> 
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('one-health/assets/img/hospitalT/kark.jpeg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">مستشفى كركوك العام </p>
              <span class="text-sm text-grey">كركوك</span>
            </div>
          </div>
        </div> 
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('one-health/assets/img/hospitalT/moth.jpeg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">مستشفى الحسين التعليمي</p>
              <span class="text-sm text-grey">المثنى</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('one-health/assets/img/hospitalT/mes.jpeg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">مستشفى الزهراوي الجراحي</p>
              <span class="text-sm text-grey">ميسان</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('one-health/assets/img/hospitalT/was.jpeg')}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">مستشفى العزيزية العام</p>
              <span class="text-sm text-grey">واسط</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Covid19</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/blog/blog_1.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus case</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/person_1.jpg" alt="">
                  </div>
                  <span>Roger Adams</span>
                </div>
                <span class="mai-time"></span> 1 week ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Covid19</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/blog/blog_2.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Recovery Room: News beyond the pandemic</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/person_1.jpg" alt="">
                  </div>
                  <span>Roger Adams</span>
                </div>
                <span class="mai-time"></span> 4 weeks ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Covid19</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/blog/blog_3.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much sugar?</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/person_2.jpg" alt="">
                  </div>
                  <span>Diego Simmons</span>
                </div>
                <span class="mai-time"></span> 2 months ago
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="blog.html" class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section --> --}}

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">ابلغنا عن مشكلة</h1>
  
      <form class="main-form"  method="POST" action="{{route('user.add.notification')}}">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="section" id="section" class="custom-select">
              <option value="general">قسم المشكلة</option>
              <option value="الأطباء">الأطباء</option>
              <option value="الأمراض">الأمراض</option>
              <option value="المستشفيات">المستشفيات</option>
              <option value="اقسام اخرى">اقسام اخرى</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="issue" id="issue" class="form-control" rows="6" placeholder="التفاصيل"></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">ارسال الابلاغ</button>
      </form>
      
    </div>
  </div>
  
   <!-- .page-section -->
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
