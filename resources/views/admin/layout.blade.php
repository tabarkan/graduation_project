<!--

=========================================================
* Argon Dashboard 2 Tailwind - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-tailwind
* Copyright 2022 Creative Tim (https://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>

<html>
  @section('header')
  <head lang="ar" dir="rtl">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>Argon Dashboard 2 Tailwind by Creative Tim</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{asset('build/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('build/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href={{asset('build/assets/css/argon-dashboard-tailwind.css')}} rel="stylesheet" />
  </head>
@endsection

  <body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500  min-h-75"></div>

    <!-- sidenav  -->
    @section('sidebar')
    <aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 translate-x-full bg-white border-0 shadow-none dark:shadow-none dark:bg-slate-850 xl:mr-4 max-w-64 ease-nav-brand z-990 rounded-2xl xl:right-0 xl:translate-x-0" aria-expanded="false">

      <div class="h-19">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-md whitespace-nowrap text-slate-700" href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" target="_blank">
          <span class="mr-1 font-semibold transition-all duration-200 dark:text-white ease-nav-brand">Dashboard</span>
        </a>
      </div>

      <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

      <div class="items-center block w-auto max-h-screen  grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-md ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80" href="{{route('admin.main')}}">
              <div class="ml-2 flex h-10 w-10 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">

                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"><g id="clarityControlLunLine0" fill="#75c2f6"><path d="M8 24.59a25.5 25.5 0 0 0 2.75.59l1.21-1.41a24.13 24.13 0 0 1-4-.83Z"/><path d="M6 27.53V10.3c2.9 1.43 8.34 1.88 12 1.88s9.1-.45 12-1.88v5.11c-.91.82-5 2.13-12 2.13a34.81 34.81 0 0 1-10-1.21V18a40.86 40.86 0 0 0 10 1.16c3.46 0 9.13-.45 12-1.91v3.23h2V7.93c0-3.35-8.8-4.25-14-4.25S4 4.58 4 7.93v19.6c0 2 3.17 3.14 6.83 3.72l-2.45-2.57C7 28.28 6.13 27.84 6 27.53ZM18 5.68c7.15 0 11.53 1.44 12 2.25c-.46.81-4.84 2.25-12 2.25S6.31 8.69 6 8c.31-.82 4.71-2.32 12-2.32Z"/><path d="M32.09 22H15.46l-5.41 6.31L15.49 34h16.6a2 2 0 0 0 2-2v-8.07a2 2 0 0 0-2-1.93Zm0 10H16.34l-3.59-3.77L16.38 24h15.71v8Z"/><path d="M16.11 27a1 1 0 1 0 1 1a1 1 0 0 0-1-1Z"/></g></svg>

              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease text-black">لوحة التحكم</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80" href="{{route('doctors.list')}}">
              <div class="ml-2 flex h-10 w-10 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <svg width="256px" height="256px" viewBox="0 0 15 15" version="1.1" id="doctor" xmlns="http://www.w3.org/2000/svg" fill="#2e9cf0"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5.5,7C4.1193,7,3,5.8807,3,4.5l0,0v-2C3,2.2239,3.2239,2,3.5,2H4c0.2761,0,0.5-0.2239,0.5-0.5S4.2761,1,4,1H3.5
                  C2.6716,1,2,1.6716,2,2.5v2c0.0013,1.1466,0.5658,2.2195,1.51,2.87l0,0C4.4131,8.1662,4.9514,9.297,5,10.5C5,12.433,6.567,14,8.5,14
                  s3.5-1.567,3.5-3.5V9.93c1.0695-0.2761,1.7126-1.367,1.4365-2.4365C13.1603,6.424,12.0695,5.7809,11,6.057
                  C9.9305,6.3332,9.2874,7.424,9.5635,8.4935C9.7454,9.198,10.2955,9.7481,11,9.93v0.57c0,1.3807-1.1193,2.5-2.5,2.5S6,11.8807,6,10.5
                  c0.0511-1.2045,0.5932-2.3356,1.5-3.13l0,0C8.4404,6.7172,9.001,5.6448,9,4.5v-2C9,1.6716,8.3284,1,7.5,1H7
                  C6.7239,1,6.5,1.2239,6.5,1.5S6.7239,2,7,2h0.5C7.7761,2,8,2.2239,8,2.5v2l0,0C8,5.8807,6.8807,7,5.5,7 M11.5,9
                  c-0.5523,0-1-0.4477-1-1s0.4477-1,1-1s1,0.4477,1,1S12.0523,9,11.5,9z"></path> </g></svg>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease text-black">ألأطباء</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80" href="{{route('hospitals.list')}}">
              <div class="ml-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
                
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"><path fill="#CCD6DD" d="M24 10a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8zM0 14v20a2 2 0 0 0 2 2h32a2 2 0 0 0 2-2V14H0z"/><path fill="#99AAB5" d="M18 12H2a2 2 0 0 0-2 2h20a2 2 0 0 0-2-2z"/><path fill="#99AAB5" d="M34 12H18a2 2 0 0 0-2 2h20a2 2 0 0 0-2-2z"/><path fill="#55ACEE" d="M2 22h32v4H2zm0-6h32v4H2zm0 12h32v4H2z"/><path fill="#E1E8ED" d="M8 12h20v24H8z"/><path fill="#55ACEE" d="M10 20h16v4H10zm0-6h16v4H10zm0 12h16v4H10z"/><path fill="#3B88C3" d="M13 32h10v4H13z"/><path fill="#DD2E44" d="M22 4h-3V1h-2v3h-3v2h3v3h2V6h3z"/><path fill="#99AAB5" d="M26 10H10a2 2 0 0 0-2 2h20a2 2 0 0 0-2-2z"/></svg>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease text-black">المستشفيات</span>
            </a>
          </li>
          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80" href="{{route('diseases.list')}}">
              <div class="ml-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
                <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease text-black">الامراض</span>
            </a>
          </li>
          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80" href="{{route('notifications.list')}}">
              <div class="ml-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
                <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease text-black">الابلاغات</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80" href="{{route('add.doctor')}}">
              <div class="ml-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="#75c2f6" d="m16 12l-1.4-6.7c-.2-.7-.9-1.3-1.7-1.3H11V2.8c0-1-.8-1.8-1.8-1.8H6.8C5.8 1 5 1.8 5 2.8V4H3.1c-.8 0-1.5.6-1.7 1.3L0 12c-.2 1 .6 2 1.7 2h12.5c1.2 0 2-1 1.8-2zM6 2.8c0-.4.4-.8.8-.8h2.4c.4 0 .8.4.8.8V4H6V2.8zm5 7.2H9v2H7v-2H5V8h2V6h2v2h2v2z"/></svg>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease text-black">أضافة طبيب</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80" href="{{route('add.hospital')}}">
              <div class="ml-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><path fill="#75c2f6" d="M37 1c-.55 0-1 .45-1 1v14c0 .55-.45 1-1 1H15c-.55 0-1-.45-1-1V2c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v46c0 .55.45 1 1 1h9c.55 0 1-.45 1-1V32c0-.55.45-1 1-1h20c.55 0 1 .45 1 1v16c0 .55.45 1 1 1h9c.55 0 1-.45 1-1V2c0-.55-.45-1-1-1h-9z"/></svg>

              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease text-black">أضافة مستشفى</span>
            </a>
          </li>
          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80" href="{{route('add.diseases')}}">
              <div class="ml-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
          
                <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><path fill="#75c2f6" d="M236.4 61.4L227 75.5c-21.3 32-59.4 48.5-97.3 42.1l-59.6-9.9C33.4 101.6 0 129.9.1 167.1c0 15.9 6.4 31.2 17.6 42.5l29.2 29.2c11 11 17.2 25.9 17.2 41.5c0 15.8-6.4 30.9-17.7 42l-13.1 12.8C22.2 345.9 16 360.7 16 376.2c0 36.8 34.1 64.2 70.1 56.2l62.3-13.8c7.7-1.7 15.7-2.6 23.6-2.6h10c27.2 0 53.7 9.3 75 26.3l30.8 24.7c10.5 8.4 23.6 13 37 13c32.7 0 59.3-26.5 59.3-59.3v-25.2c0-34.9 21.4-66.2 53.9-78.8l36.9-14.3c22.4-8.7 37.2-30.3 37.2-54.3c0-28.1-20.1-52.3-47.8-57.3l-28-5.1c-36.5-6.7-65.4-34.5-73.6-70.7l-7.1-31.5C348.9 53.4 322.1 32 291.3 32c-22 0-42.6 11-54.9 29.4zM160 192a32 32 0 1 1 0 64a32 32 0 1 1 0-64zm128 16a16 16 0 1 1 32 0a16 16 0 1 1-32 0zm0 80a32 32 0 1 1 0 64a32 32 0 1 1 0-64z"/></svg>

              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease text-black">أضافة امراض</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    @endsection


