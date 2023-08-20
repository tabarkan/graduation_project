@include('user.layouts')
@yield('header')
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
 

      <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
        <!-- Navbar -->
      
        
    
        <main class="mt-0 transition-all duration-200 ease-in-out">
          <section class="max-h-[90vh]">
            <div class="bg-top relative flex items-start overflow-hidden h-[35vh]">
              <span class="absolute top-0 left-0 w-full h-full"></span>
              <div class="container z-10">
              </div>
            </div>
            <div class="container">
              <div class="d-flex align-content-center flex-wrap margin-left-3 margin-top-48 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                  <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border">
                    <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                    </div>
                    <div class="flex flex-wrap px-3 -mx-3 sm:px-6 xl:px-12">
                      <div class="w-3/12 max-w-full px-1 ml-auto flex-0">
 
                      </div>
                      <div class="w-3/12 max-w-full px-1 flex-0">

                      </div>
                      <div class="w-3/12 max-w-full px-1 mr-auto flex-0">
     
                      </div>
                    </div>
                    <div class="flex-auto p-6 text-center" style="background-color: #B8E7E1">
                      <form role="form text-left"  method="POST" action="{{route('user.add.disease')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                          <h5 >اضافة مرض </h5>
                        </div>
                        <div class="mb-4">
                          <input type="text" name="disease_name" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder=" اسم المرض" aria-label="Name" aria-describedby="email-addon" />
                        </div>
                        <div class="mb-4">
                          <input type="text" name="disease_category" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="النوع" aria-label="Email" aria-describedby="email-addon" />
                        </div>
                        <div class="mb-4">
                          <input type="text" name="treatment" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="العلاج" aria-label="Phone" aria-describedby="password-addon" />
                        </div>
                        <div class="mb-4">
                          <input type="text" name="protection" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="الحماية من المرض" aria-label="Phone" aria-describedby="password-addon" />
                        </div>
                        <div class="mb-4">
                          <input type="text" name="symptoms" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="الاعراض" aria-label="Address" aria-describedby="password-addon" />
                        </div>
                        
           
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary" aria-label="Close">اضافة</button>
                          {{-- <button type="submit" class="inline-block w-full px-5 py-2.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:-translate-y-px hover:shadow-xs leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-zinc-800 to-zinc-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Add</button> --}}
                        </div>
                      </form>
                    </div>
                  </div>
                  @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="green" d="M13 9h-2V7h2m0 10h-2v-6h2m-1-9A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2Z"/></svg>
                                    تمت الاضافة سيتم الرفع بعد المراجعة من قبل المسؤولين , شكراً لاقتراحاتكم
                    </div>
                
              @endif  
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
    
@yield('footer')