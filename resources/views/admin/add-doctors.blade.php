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
    @include('admin.layout')
    @yield('header')

      <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
        <!-- Navbar -->
      @yield('sidebar')
    
        <main class="mt-0 transition-all duration-200 ease-in-out">
          <section class="max-h-[90vh]">
            <div class="bg-top relative flex items-start overflow-hidden h-[35vh]">
              <span class="absolute top-0 left-0 w-full h-full"></span>
              <div class="container z-10">
            </div>
            </div>
            <div class="container">
              <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
                <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                  <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border">
                    <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                      <h5>Add Doctor</h5>
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
                      <form role="form text-left" method="POST" action="{{route('add.doctor')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                          <input type="text" name="first_name" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="First Name" aria-label="Name" aria-describedby="email-addon" />
                        </div>
                        <div class="mb-4">
                          <input type="text" name="last_name"  class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Last Name" aria-label="Name" aria-describedby="email-addon" />
                        </div>
                        <div class="mb-4">
                          <input type="email" name="email" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Email" aria-label="Email" aria-describedby="email-addon" />
                        </div>
                        <div class="mb-4">
                          <input type="text" name="phone" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Phone Number" aria-label="Phone" aria-describedby="password-addon" />
                        </div>
                        <div class="mb-4">
                          <div class="mb-4">
                            <select name="specialization" id="specialization">
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
                          </div>
                        </div>
                        <div class="mb-4">
                          <input type="text" name="address"  class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="العنوان" aria-label="العنوان" aria-describedby="password-addon" />
                        </div>
                    
                        <div class="mb-4">
                          <input type="text" name="hospital"  class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="ينتمي الى مستشفى" aria-label="ينتمي الى مستشفى" aria-describedby="password-addon" />
                        </div>
                    
                        <div>
                          <x-input-label for="image" :value="__('image')" />
                          <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus autocomplete="image" />
                          <x-input-error :messages="$errors->get('image')" class="mt-2" />
                      </div>
                      
                        <div class="text-center">
                          <button type="submit" class="inline-block w-full px-5 py-2.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:-translate-y-px hover:shadow-xs leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-zinc-800 to-zinc-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Add</button>
                        </div>
                      </form>
                    </div>
                  </div>

                  @if(session()->has('message'))
                      <div class="flex bg-green-100 w-full mt-10 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
                        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <div>
                            <span class="font-medium">Success!</span> {{ session()->get('message') }}.
                        </div>
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
    