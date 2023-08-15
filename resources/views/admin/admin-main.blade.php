
<!DOCTYPE html>

<html lang="en">
    @include('admin.layout')
    @yield('header')

  <body class="m-0 font-sans text-base antialiased font-normal  leading-default bg-gray-50 text-slate-500">

      @yield('sidebar')

 

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:mr-68 rounded-xl">
        <!-- Navbar -->
        <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="false">
          <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
            <nav>
              <!-- breadcrumb -->
              <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                <li class="text-sm leading-normal">
                  <a class="text-white opacity-50" href="javascript:;">Admin</a>
                </li>
                <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">Dashboard</li>
              </ol>
              <h6 class="mb-0 font-bold text-white capitalize">Dashboard</h6>
            </nav>
  
            <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
              <div class="flex items-center md:ml-auto md:pr-4">
                <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
                  <span class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                    <i class="fas fa-search"></i>
                  </span>
                  <input type="text" class="pl-9 text-sm focus:shadow-primary-outline ease w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300   bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
                </div>
              </div>
              <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                <!-- online builder btn  -->
                <!-- <li class="flex items-center">
                  <a class="inline-block px-8 py-2 mb-0 mr-4 text-xs font-bold text-center text-blue-500 uppercase align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer leading-pro hover:-translate-y-px active:shadow-xs hover:border-blue-500 active:bg-blue-500 active:hover:text-blue-500 hover:text-blue-500 tracking-tight-rem hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
                </li> -->
                <li class="flex items-center">
                  <a href="../pages/sign-in.html" class="block px-0 py-2 text-sm font-semibold text-white transition-all ease-nav-brand">
                    <i class="fa fa-user sm:mr-1"></i>
                    <span class="hidden sm:inline"></span>
                  </a>
                </li>
                <li class="flex items-center pl-4 xl:hidden">
                  <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" sidenav-trigger>
                    <div class="w-4.5 overflow-hidden">
                      <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                      <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                      <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                    </div>
                  </a>
                </li>
                <li class="flex items-center px-4">
                  <a href="javascript:;" class="p-0 text-sm text-white transition-all ease-nav-brand">
                    <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
                    <!-- fixed-plugin-button-nav  -->
                  </a>
                </li>
  
                <!-- notifications -->
  
                <li class="relative flex items-center pr-2">
                  <p class="hidden transform-dropdown-show"></p>
                  <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" dropdown-trigger aria-expanded="false">
                    <i class="cursor-pointer fa fa-bell"></i>
                  </a>
  
                  <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease lg:shadow-3xl duration-250 min-w-44 before:sm:right-8 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                    <!-- add show class on dropdown open js -->
                    <li class="relative mb-2">
                      <a class=" ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                        <div class="flex py-1">
                          <div class="my-auto">
                            <img src="../assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white h-9 w-9 max-w-none rounded-xl" />
                          </div>
                          <div class="flex flex-col justify-center">
                            <h6 class="mb-1 text-sm font-normal leading-normal "><span class="font-semibold">New message</span> from Laur</h6>
                            <p class="mb-0 text-xs leading-tight text-slate-400 ">
                              <i class="mr-1 fa fa-clock"></i>
                              13 minutes ago
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
  
                    <li class="relative mb-2">
                      <a class=" ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" href="javascript:;">
                        <div class="flex py-1">
                          <div class="my-auto">
                            <img src="../assets/img/small-logos/logo-spotify.svg" class="inline-flex items-center justify-center mr-4 text-sm text-white bg-gradient-to-tl from-zinc-800 to-zinc-700 h-9 w-9 max-w-none rounded-xl" />
                          </div>
                          <div class="flex flex-col justify-center">
                            <h6 class="mb-1 text-sm font-normal leading-normal "><span class="font-semibold">New album</span> by Travis Scott</h6>
                            <p class="mb-0 text-xs leading-tight text-slate-400 ">
                              <i class="mr-1 fa fa-clock"></i>
                              1 day
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
  
                    <li class="relative">
                      <a class=" ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" href="javascript:;">
                        <div class="flex py-1">
                          <div class="inline-flex items-center justify-center my-auto mr-4 text-sm text-white transition-all duration-200 ease-nav-brand bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <title>credit-card</title>
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                  <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(453.000000, 454.000000)">
                                      <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                      <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </div>
                          <div class="flex flex-col justify-center">
                            <h6 class="mb-1 text-sm font-normal leading-normal ">Payment successfully completed</h6>
                            <p class="mb-0 text-xs leading-tight text-slate-400 /80">
                              <i class="mr-1 fa fa-clock"></i>
                              2 days
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
  
        <!-- end Navbar -->
  
        <!-- cards -->
        <div class="w-full px-12 py-12 mx-auto">
          <!-- row 1 -->
          <div class="flex flex-wrap -mx-3">
            <!-- card1 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
              <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl  bg-clip-border">
                <div class="flex-auto p-4">
                  <div class="flex flex-row -mx-3">
                    <div class="px-3 text-left basis-1/3">
                      <div class="inline-block w-12 h-12 flex justify-center items-center text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 512 512"><path fill="#fff" d="M236.4 61.4L227 75.5c-21.3 32-59.4 48.5-97.3 42.1l-59.6-9.9C33.4 101.6 0 129.9.1 167.1c0 15.9 6.4 31.2 17.6 42.5l29.2 29.2c11 11 17.2 25.9 17.2 41.5c0 15.8-6.4 30.9-17.7 42l-13.1 12.8C22.2 345.9 16 360.7 16 376.2c0 36.8 34.1 64.2 70.1 56.2l62.3-13.8c7.7-1.7 15.7-2.6 23.6-2.6h10c27.2 0 53.7 9.3 75 26.3l30.8 24.7c10.5 8.4 23.6 13 37 13c32.7 0 59.3-26.5 59.3-59.3v-25.2c0-34.9 21.4-66.2 53.9-78.8l36.9-14.3c22.4-8.7 37.2-30.3 37.2-54.3c0-28.1-20.1-52.3-47.8-57.3l-28-5.1c-36.5-6.7-65.4-34.5-73.6-70.7l-7.1-31.5C348.9 53.4 322.1 32 291.3 32c-22 0-42.6 11-54.9 29.4zM160 192a32 32 0 1 1 0 64a32 32 0 1 1 0-64zm128 16a16 16 0 1 1 32 0a16 16 0 1 1-32 0zm0 80a32 32 0 1 1 0 64a32 32 0 1 1 0-64z"/></svg>                      </div>
                    </div>
                    <div class="flex-none w-2/3 max-w-full px-3">
                      <div>
                        <p class="mb-0 font-sans text-md font-semibold leading-normal uppercase ">عدد الأمراض</p>
                        <h5 class="mb-2 font-bold">{{$diseases->count()}}</h5>
                        <p class="mb-0 ">
                          <span class="text-sm font-bold leading-normal text-emerald-500">         </span>
                        </p>
                      </div>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
  
            <!-- card2 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
              <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl  rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                  <div class="flex flex-row -mx-3">
                    <div class="px-3 text-left basis-1/3">
                      <div class="flex justify-center items-center inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                        <svg width="26px" height="26px" viewBox="0 0 15 15" version="1.1" id="doctor" xmlns="http://www.w3.org/2000/svg" fill="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5.5,7C4.1193,7,3,5.8807,3,4.5l0,0v-2C3,2.2239,3.2239,2,3.5,2H4c0.2761,0,0.5-0.2239,0.5-0.5S4.2761,1,4,1H3.5
                          C2.6716,1,2,1.6716,2,2.5v2c0.0013,1.1466,0.5658,2.2195,1.51,2.87l0,0C4.4131,8.1662,4.9514,9.297,5,10.5C5,12.433,6.567,14,8.5,14
                          s3.5-1.567,3.5-3.5V9.93c1.0695-0.2761,1.7126-1.367,1.4365-2.4365C13.1603,6.424,12.0695,5.7809,11,6.057
                          C9.9305,6.3332,9.2874,7.424,9.5635,8.4935C9.7454,9.198,10.2955,9.7481,11,9.93v0.57c0,1.3807-1.1193,2.5-2.5,2.5S6,11.8807,6,10.5
                          c0.0511-1.2045,0.5932-2.3356,1.5-3.13l0,0C8.4404,6.7172,9.001,5.6448,9,4.5v-2C9,1.6716,8.3284,1,7.5,1H7
                          C6.7239,1,6.5,1.2239,6.5,1.5S6.7239,2,7,2h0.5C7.7761,2,8,2.2239,8,2.5v2l0,0C8,5.8807,6.8807,7,5.5,7 M11.5,9
                          c-0.5523,0-1-0.4477-1-1s0.4477-1,1-1s1,0.4477,1,1S12.0523,9,11.5,9z"></path> </g></svg>                      </div>
                    </div>
                    <div class="flex-none w-2/3 max-w-full px-3">
                      <div>
                        <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase ">عدد الاطباء</p>
                        <h5 class="mb-2 font-bold ">
                          {{$doctors->count()}}
                        </h5>
                        <p class="mb-0 ">
                          <span class="text-sm font-bold leading-normal text-emerald-500"></span>
                        </p>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- card3 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
              <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl  rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                  <div class="flex flex-row -mx-3">
                    <div class="px-3 text-left basis-1/3">
                      <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                        <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                      </div>
                    </div>
                    <div class="flex-none w-2/3 max-w-full px-3">
                      <div>
                        <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase ">عدد المستشفيات</p>
                        <h5 class="mb-2 font-bold ">
                          {{$hospitals->count()}}
                        </h5>
                        <p class="mb-0 ">
                          <span class="text-sm font-bold leading-normal text-red-600"></span>
                          
                        </p>
                      </div>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
  
            <!-- card4 -->
            <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
              <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl  rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                  <div class="flex flex-row -mx-3">
                    <div class="px-3 text-left basis-1/3">
                      <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                        <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                      </div>
                    </div>
                    <div class="flex-none w-2/3 max-w-full px-3">
                      <div>
                        <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase ">عدد المستخدمين</p>
                        <h5 class="mb-2 font-bold ">
                          {{$users->count()}}
                        </h5>
                        <p class="mb-0 ">
                          <span class="text-sm font-bold leading-normal text-emerald-500"></span>
                         
                        </p>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
    

  
                <!-- Control buttons -->
                <button btn-next class="absolute z-10 w-10 h-10 p-2 text-lg text-white border-none opacity-50 cursor-pointer hover:opacity-100 far fa-chevron-right active:scale-110 top-6 right-4"></button>
                <button btn-prev class="absolute z-10 w-10 h-10 p-2 text-lg text-white border-none opacity-50 cursor-pointer hover:opacity-100 far fa-chevron-left active:scale-110 top-6 right-16"></button>
              </div>
            </div>
          </div>
  
          <!-- cards row 3 -->
  
          <div class="flex flex-wrap mt-6 mx-4">
            <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
              <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl  border-black-125 rounded-2xl bg-clip-border">
                <div class="p-4 pb-0 mb-0 rounded-t-4">
                  <div class="flex justify-between">
                    <h6 class="mb-2 ">الطلبات</h6>
                  </div>
                </div>
                <div class="overflow-x-auto">
                  <table class="items-center w-full mb-4 align-top border-collapse border-gray-200 ">
                    <tbody>
                      @foreach ($doctors as $doctor )
                      @if ($doctor->accepted == 0)
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap ">
                          <div class="flex items-center px-2 py-1">
              
                            <div class="ml-6">
                              <p class="mb-0 text-xs font-semibold leading-tight ">Name</p>
                              <h6 class="mb-0 text-sm leading-normal ">{{$doctor->first_name}} {{$doctor->last_name}}</h6>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap ">
                          <div class="text-center">
                            <p class="mb-0 text-xs font-semibold leading-tight ">Type</p>
                            <h6 class="mb-0 text-sm leading-normal ">Doctor</h6>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="text-center">
                            <p class="mb-0 text-xs font-semibold leading-tight">time:</p>
                            <h6 class="mb-0 text-sm leading-normal ">{{\Carbon\Carbon::parse($doctor->created_at)->ago()}}</h6>
                          </div>
                        </td>
                       
                      
                       
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b  whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-orange-700 to-red-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">
                            <form class="h-full" action="{{route('accept.doctor', $doctor->id)}}" method="POST">
                              @csrf
                            <button type="submit" class="mb-0 text-xs bg-gradient-to-tl from-orange-700 to-red-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white max-h-[20px] ">قبول</p>
                            </form>
                          </span>

                            </div>
                        </td>
                      </tr>
                      @endif
                      @endforeach
                      @foreach ($hospitals as $hospital )
                      @if ($hospital->accepted == 0)
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap">
                          <div class="flex items-center px-2 py-1">
              
                            <div class="ml-6">
                              <p class="mb-0 text-xs font-semibold leading-tight ">Name</p>
                              <h6 class="mb-0 text-sm leading-normal ">{{$hospital->name}}</h6>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap ">
                          <div class="text-center">
                            <p class="mb-0 text-xs font-semibold leading-tight ">Type</p>
                            <h6 class="mb-0 text-sm leading-normal ">Hospital</h6>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap ">
                          <div class="text-center">
                            <p class="mb-0 text-xs font-semibold leading-tight ">time:</p>
                            <h6 class="mb-0 text-sm leading-normal ">{{\Carbon\Carbon::parse($hospital->created_at)->ago()}}</h6>
                          </div>
                        </td>
                       
                      
                       
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b  whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-orange-700 to-red-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">
                            <form class="h-full" action="{{route('accept.hospital', $hospital->id)}}" method="POST">
                              @csrf
                            <button type="submit" class="mb-0 text-xs bg-gradient-to-tl from-orange-700 to-red-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white max-h-[20px] ">قبول</p>
                            </form>
                          </span>

                            </div>
                        </td>
                      </tr>
                      @endif
                      @endforeach
                      @foreach ($diseases as $disease )
                      @if ($disease->accepted == 0)
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap ">
                          <div class="flex items-center px-2 py-1">
              
                            <div class="ml-6">
                              <p class="mb-0 text-xs font-semibold leading-tight ">Name</p>
                              <h6 class="mb-0 text-sm leading-normal ">{{$disease->disease_name}} </h6>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap ">
                          <div class="text-center">
                            <p class="mb-0 text-xs font-semibold leading-tight ">Type</p>
                            <h6 class="mb-0 text-sm leading-normal ">disease</h6>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="text-center">
                            <p class="mb-0 text-xs font-semibold leading-tight ">time:</p>
                            <h6 class="mb-0 text-sm leading-normal ">{{\Carbon\Carbon::parse($disease->created_at)->ago()}}
                            </h6>
                          </div>
                        </td>
                       
                      
                       
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b  whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-orange-700 to-red-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">
                            <form class="h-full" action="{{route('accept.disease', $disease->id)}}" method="POST">
                              @csrf
                            <button type="submit" class="mb-0 text-xs bg-gradient-to-tl from-orange-700 to-red-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white max-h-[20px] ">قبول</p>
                            </form>
                          </span>

                            </div>
                        </td>
                      </tr>
                      @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 mt-0 lg:w-5/12 lg:flex-none">
              <div class="border-black/12.5 shadow-xl  relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="p-4 pb-0 rounded-t-4">
                  <h6 class="mb-0 "> المسؤولين</h6>
                </div>
                <div class="flex-auto p-4">
                  <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                    @foreach ($admins as $admin )
                    <li class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                      <div class="flex items-center">
                        <div class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 ">
                          <i class="text-white ni ni-mobile-button relative top-0.75 text-xxs"></i>
                        </div>
                        <div class="flex flex-col">
                          <h6 class="mb-1 text-sm leading-normal text-slate-700 ">{{$admin->first_name}} {{$admin->last_name}}</h6>
                          <span class="text-xs leading-tight ">{{$admin->role==1?'Admin':''}}</span>
                        </div>
                      </div>
                      <div class="flex">
                        <button class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all "><i class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200" aria-hidden="true"></i></button>
                      </div>
                   
                      
                   
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
  
        
        </div>
        <footer class="pt-4 mt-[25vh]">
          <div class="w-full px-6 mx-auto">
            <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
              <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                  ©
                  <script>
                    document.write(new Date().getFullYear() + ",");
                  </script>
                  made with <i class="fa fa-heart"></i> by
                  <a href="#" class="font-semibold text-slate-700 " target="_blank">students 4th Team</a>
                  for a healthy web.
                </div>
              </div>
              {{-- <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">Creative Tim</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">License</a>
                  </li>
                </ul>
              </div> --}}
            </div>
          </div>
        </footer>
    </body>
    <!-- plugin for charts  -->
    <script src="{{asset('build/assets/js/charts.js')}}" async></script>
    <script src="{{asset('build/assets/js/plugins/Chart.extension.js')}}" async></script>
    <script src="{{asset('build/assets/js/plugins/chartjs.min.js')}}" async></script>
    <!-- plugin for scrollbar  -->
    <script src="{{asset('build/assets/js/plugins/perfect-scrollbar.min.js')}}" async></script>
    <!-- main script file  -->
    <script src="{{asset('build/assets/js/argon-dashboard-tailwind.js?v=1.0.1')}}" async></script>
  </html>
  