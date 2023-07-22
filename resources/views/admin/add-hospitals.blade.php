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
<html lang="en">
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

      <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
        <!-- Navbar -->
      
    
        <main class="mt-0 transition-all duration-200 ease-in-out">
          <section class="min-h-screen">
            <div class="bg-top relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-cover min-h-50-screen rounded-xl bg-[url('https://images.unsplash.com/photo-1689709116173-00a9c7fe54cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80.jpg')]">
              <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-zinc-800 to-zinc-700 opacity-60"></span>
              <div class="container z-10">
              </div>
            </div>
            <div class="container">
              <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
                <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                  <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border">
                    <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                      <h5>Add Hospital</h5>
                    </div>
                    <div class="flex flex-wrap px-3 -mx-3 sm:px-6 xl:px-12">
                      <div class="w-3/12 max-w-full px-1 ml-auto flex-0">
 
                      </div>
                      <div class="w-3/12 max-w-full px-1 flex-0">

                      </div>
                      <div class="w-3/12 max-w-full px-1 mr-auto flex-0">
     
                      </div>
                    </div>
                    <div class="flex-auto p-6">
                      <form role="form text-left" method="POST" action="{{route('add.hospital')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                          <input type="text" name="name" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Name" />
                        </div>
                        <div class="mb-4">
                          <input type="email" name="contact_email" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="contact_email"/>
                        </div>
                        <div class="mb-4">
                          <input type="text" name="contact_number" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="contact_numbe"/>
                        </div>
                        <div class="mb-4">
                          <input type="text" name="website" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="website" aria-label="Phone"/>
                        </div>
                        <div class="mb-4">
                          <input type="text" name="address" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Address" aria-label="Address"/>
                        </div>
                        
                        <div>
                          <x-input-label for="image" :value="__('image')" />
                          <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus autocomplete="image" />
                          <x-input-error :messages="$errors->get('image')" class="mt-2" />
                      </div>
                      
                        <div class="text-center">
                          <button type="submit"class="inline-block w-full px-5 py-2.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:-translate-y-px hover:shadow-xs leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-zinc-800 to-zinc-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Add</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
          <footer class="py-12">
            <div class="container">

              <div class="flex flex-wrap -mx-3">
                <div class="w-8/12 max-w-full px-3 mx-auto mt-1 text-center flex-0">
                </div>
              </div>
            </div>
          </footer>
          <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
        </main>
      </body>
      <!-- plugin for scrollbar  -->
      <script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
      <!-- main script file  -->
      <script src="../assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
    </html>
    