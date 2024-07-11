<div class="px-3 mb-4">
  <nav
    class="relative bg-white p-2 rounded-2xl mt-4 flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
      <div class="flex justify-start gap-2 items-center block xl:hidden">
        <div>
          <button
            class=" p-2 rounded-full text-blue-700 bg-blue-500 bg-opacity-10 hover:bg-opacity-20 transition duration-300"
            type="button" data-drawer-target="drawer-menu" data-drawer-show="drawer-menu" aria-controls="drawer-menu">
            <svg class="w-6 h-6" stroke="currentColor" fill="currentColor" stroke-width="0"
              viewBox="0 0 512 512" " xmlns=" http://www.w3.org/2000/svg">
              <path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="48"
                d="M88 152h336M88 256h336M88 360h336"></path>
            </svg>
          </button>
        </div>
        <h1 class=" font-black text-2xl 2xl:text-3xl  text-black">
          Empresas
        </h1>
      </div>
      <div class="flex items-center mt-2 grow  justify-end">

        <ul class=" md:ml-auto flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
          <!-- online builder btn  -->
          <!-- <li class="flex items-center">
                <a class="inline-block px-8 py-2 mb-0 mr-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 ease-soft-in hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500 active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
              </li> -->
          <li class="flex items-center">
            <a href="./pages/sign-in.html"
              class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500">
              <i class="fa fa-user sm:mr-1"></i>
              <span class="hidden sm:inline">Sign In</span>
            </a>
          </li>
          <li class="flex items-center pl-4 ">
            <a href="#" class="block p-0 text-sm transition-all ease-nav-brand text-slate-500" sidenav-trigger>

            </a><svg xmlns="http://www.w3.org/2000/svg" class=" cursor-pointer  w-6 h-6" viewBox="0 0 24 24">
              <g fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2">
                <path d="M14 8V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-2" />
                <path d="M9 12h12l-3-3m0 6l3-3" />
              </g>
            </svg>
          </li>


        </ul>
      </div>
    </div>
  </nav>
</div>



<!--Drawer menu-->

<div id="drawer-menu"
  class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 "
  tabindex="-1" aria-labelledby="drawer-label">
  <h5 id="drawer-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 ">
    <svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
      viewBox="0 0 20 20">
      <path
        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>Info
  </h5>
  <button type="button" data-drawer-hide="drawer-menu" aria-controls="drawer-menu"
    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
    </svg>
    <span class="sr-only">Close menu</span>
  </button>

  <div>

    <div
      class="items-center bg-white rounded-bl-2xl  rounded-tr-0  block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">

      <ul class="flex flex-col pl-0 mb-0">
        <li class="  w-full">
          <a href="#" class=" w-full group transition duration-300 cursor-pointer flex gap-0 bg-white ">
            <div class=" pt-2 pr-4  flex flex-col items-start justify-center bg-[#f8f6fa]  rounded-tr-[30px]">
              <div
                class="p-2 flex justify-center items-center h-9 w-9 bg-blue-500 group-hover:bg-blue-600  text-white  rounded-full">
                Co
              </div>
            </div>
            <div class=" flex-1 w-full flex flex-col justify-center px-2">
              <div
                class="  p-1 transition duration-300 group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-blue-600   col-span-9 w-full gap-2 flex justify-start items-center rounded-full">
                <div class="transition duration-300 group-hover:bg-blue-600 group-hover:bg-opacity-90 p-2 rounded-full">

                  <svg xmlns="http://www.w3.org/2000/svg"
                    class="text-black group-hover:text-white  duration-500  w-6 h-6 group-hover:h-7 group-hover:w-7 transition-all "
                    viewBox="0 0 15 15">
                    <path fill="currentColor" fillRule="evenodd"
                      d="M2.8 1h-.05c-.229 0-.426 0-.6.041A1.5 1.5 0 0 0 1.04 2.15c-.04.174-.04.37-.04.6v2.5c0 .229 0 .426.041.6A1.5 1.5 0 0 0 2.15 6.96c.174.04.37.04.6.04h2.5c.229 0 .426 0 .6-.041A1.5 1.5 0 0 0 6.96 5.85c.04-.174.04-.37.04-.6v-2.5c0-.229 0-.426-.041-.6A1.5 1.5 0 0 0 5.85 1.04C5.676 1 5.48 1 5.25 1H5.2zm-.417 1.014c.043-.01.11-.014.417-.014h2.4c.308 0 .374.003.417.014a.5.5 0 0 1 .37.37c.01.042.013.108.013.416v2.4c0 .308-.003.374-.014.417a.5.5 0 0 1-.37.37C5.575 5.996 5.509 6 5.2 6H2.8c-.308 0-.374-.003-.417-.014a.5.5 0 0 1-.37-.37C2.004 5.575 2 5.509 2 5.2V2.8c0-.308.003-.374.014-.417a.5.5 0 0 1 .37-.37M9.8 1h-.05c-.229 0-.426 0-.6.041A1.5 1.5 0 0 0 8.04 2.15c-.04.174-.04.37-.04.6v2.5c0 .229 0 .426.041.6A1.5 1.5 0 0 0 9.15 6.96c.174.04.37.04.6.04h2.5c.229 0 .426 0 .6-.041a1.5 1.5 0 0 0 1.11-1.109c.04-.174.04-.37.04-.6v-2.5c0-.229 0-.426-.041-.6a1.5 1.5 0 0 0-1.109-1.11c-.174-.04-.37-.04-.6-.04h-.05zm-.417 1.014c.043-.01.11-.014.417-.014h2.4c.308 0 .374.003.417.014a.5.5 0 0 1 .37.37c.01.042.013.108.013.416v2.4c0 .308-.004.374-.014.417a.5.5 0 0 1-.37.37c-.042.01-.108.013-.416.013H9.8c-.308 0-.374-.003-.417-.014a.5.5 0 0 1-.37-.37C9.004 5.575 9 5.509 9 5.2V2.8c0-.308.003-.374.014-.417a.5.5 0 0 1 .37-.37M2.75 8h2.5c.229 0 .426 0 .6.041A1.5 1.5 0 0 1 6.96 9.15c.04.174.04.37.04.6v2.5c0 .229 0 .426-.041.6a1.5 1.5 0 0 1-1.109 1.11c-.174.04-.37.04-.6.04h-2.5c-.229 0-.426 0-.6-.041a1.5 1.5 0 0 1-1.11-1.109c-.04-.174-.04-.37-.04-.6v-2.5c0-.229 0-.426.041-.6A1.5 1.5 0 0 1 2.15 8.04c.174-.04.37-.04.6-.04m.05 1c-.308 0-.374.003-.417.014a.5.5 0 0 0-.37.37C2.004 9.425 2 9.491 2 9.8v2.4c0 .308.003.374.014.417a.5.5 0 0 0 .37.37c.042.01.108.013.416.013h2.4c.308 0 .374-.004.417-.014a.5.5 0 0 0 .37-.37c.01-.042.013-.108.013-.416V9.8c0-.308-.003-.374-.014-.417a.5.5 0 0 0-.37-.37C5.575 9.004 5.509 9 5.2 9zm7-1h-.05c-.229 0-.426 0-.6.041A1.5 1.5 0 0 0 8.04 9.15c-.04.174-.04.37-.04.6v2.5c0 .229 0 .426.041.6a1.5 1.5 0 0 0 1.109 1.11c.174.041.371.041.6.041h2.5c.229 0 .426 0 .6-.041a1.5 1.5 0 0 0 1.109-1.109c.041-.174.041-.371.041-.6V9.75c0-.229 0-.426-.041-.6a1.5 1.5 0 0 0-1.109-1.11c-.174-.04-.37-.04-.6-.04h-.05zm-.417 1.014c.043-.01.11-.014.417-.014h2.4c.308 0 .374.003.417.014a.5.5 0 0 1 .37.37c.01.042.013.108.013.416v2.4c0 .308-.004.374-.014.417a.5.5 0 0 1-.37.37c-.042.01-.108.013-.416.013H9.8c-.308 0-.374-.004-.417-.014a.5.5 0 0 1-.37-.37C9.004 12.575 9 12.509 9 12.2V9.8c0-.308.003-.374.014-.417a.5.5 0 0 1 .37-.37"
                      clipRule="evenodd" />
                  </svg>
                </div>
                <div>
                  <span class=" text-base font-semibold group-hover:text-white text-black">
                    Consolidado
                  </span>
                </div>
              </div>
            </div>

          </a>

        </li>
        <li class="  w-full">
          <a class="group transition duration-300 cursor-pointer flex gap-0 bg-white  w-full" href="usuarios">

            <div class="  pr-4  flex flex-col items-start justify-center bg-[#f8f6fa]  ">
              <div
                class="p-2 flex justify-center items-center h-9 w-9   aspect-square bg-green-600  group-hover:bg-green-500  text-white  rounded-full">
                Us
              </div>
            </div>
            <div class=" flex-1 w-full flex flex-col justify-center px-2">
              <div
                class="  p-1 transition duration-300 group-hover:bg-gradient-to-r group-hover:from-green-400 group-hover:to-green-600  col-span-9 w-full gap-2 flex justify-start items-center rounded-full">
                <div
                  class="transition duration-300 group-hover:bg-green-600 group-hover:bg-opacity-90 p-2 rounded-full">

                  <svg xmlns="http://www.w3.org/2000/svg"
                    class=" text-black group-hover:text-white  duration-500  w-6 h-6 group-hover:h-7 group-hover:w-7 transition-all  "
                    viewBox="0 0 256 256">
                    <g fill="currentColor">
                      <path
                        d="M168 144a40 40 0 1 1-40-40a40 40 0 0 1 40 40M64 56a32 32 0 1 0 32 32a32 32 0 0 0-32-32m128 0a32 32 0 1 0 32 32a32 32 0 0 0-32-32"
                        opacity=".2" />
                      <path
                        d="M244.8 150.4a8 8 0 0 1-11.2-1.6A51.6 51.6 0 0 0 192 128a8 8 0 0 1 0-16a24 24 0 1 0-23.24-30a8 8 0 1 1-15.5-4A40 40 0 1 1 219 117.51a67.94 67.94 0 0 1 27.43 21.68a8 8 0 0 1-1.63 11.21M190.92 212a8 8 0 1 1-13.85 8a57 57 0 0 0-98.15 0a8 8 0 1 1-13.84-8a72.06 72.06 0 0 1 33.74-29.92a48 48 0 1 1 58.36 0A72.06 72.06 0 0 1 190.92 212M128 176a32 32 0 1 0-32-32a32 32 0 0 0 32 32m-56-56a8 8 0 0 0-8-8a24 24 0 1 1 23.24-30a8 8 0 1 0 15.5-4A40 40 0 1 0 37 117.51a67.94 67.94 0 0 0-27.4 21.68a8 8 0 1 0 12.8 9.61A51.6 51.6 0 0 1 64 128a8 8 0 0 0 8-8" />
                    </g>
                  </svg>
                </div>
                <div>
                  <span class=" text-base font-semibold group-hover:text-white text-black">
                    Usuarios
                  </span>

                </div>
              </div>

            </div>
          </a>


        </li>
        <li class="  w-full  ">
          <a class="group transition duration-300 cursor-pointer flex gap-0 bg-white  w-full" href="avance-usuario">
            <div class="  pr-4  flex flex-col items-start justify-center bg-[#f8f6fa]   ">
              <div
                class="p-2 flex justify-center items-center h-9 w-9 aspect-square bg-orange-600  group-hover:bg-orange-500  text-white  rounded-full">
                Au
              </div>
            </div>
            <div class=" flex-1 w-full flex flex-col justify-center px-2">
              <div
                class="  p-1 transition duration-300 group-hover:bg-gradient-to-r group-hover:from-orange-400 group-hover:to-orange-600  col-span-9 w-full gap-2 flex justify-start items-center rounded-full">
                <div
                  class="transition duration-300 group-hover:bg-orange-600 group-hover:bg-opacity-90 p-2 rounded-full">


                  <svg xmlns="http://www.w3.org/2000/svg"
                    class=" text-black group-hover:text-white  duration-500  w-6 h-6 group-hover:h-7 group-hover:w-7 transition-all "
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                      d="M14.366 6.73v-1h7v1zm0 3.77v-1h7v1zm0 3.77v-1h7v1zm-6.496-.654q-.928 0-1.581-.65q-.654-.65-.654-1.577t.649-1.581t1.577-.654t1.581.65t.654 1.576t-.65 1.582q-.648.654-1.576.654m-5.235 5.23v-1.13q0-.327.163-.622t.44-.475q1.049-.598 2.2-.916q1.15-.318 2.428-.318q1.276 0 2.427.318t2.2.916q.276.179.44.475t.163.622v1.13zm1.034-1.307v.307h8.393v-.307q-.99-.558-2.052-.856t-2.144-.298t-2.145.298q-1.061.298-2.052.856m4.197-4.923q.501 0 .866-.365t.364-.866t-.364-.867t-.866-.364t-.867.364t-.364.867t.364.866t.867.365m0 5.23" />
                  </svg>
                </div>
                <div>
                  <span class=" text-base font-semibold group-hover:text-white text-black">
                    Avance usuario
                  </span>

                </div>
              </div>

            </div>
          </a>


        </li>

        <li class=" w-full  ">
          <a href="ranking" class="  group transition duration-300 cursor-pointer flex gap-0 bg-white w-full">
            <div class="  pr-4  flex flex-col items-start justify-center bg-[#f8f6fa] pb-2 rounded-br-[30px]  ">
              <div
                class="p-2 flex justify-center items-center h-9 w-9 aspect-square bg-red-600  group-hover:bg-red-500  text-white  rounded-full">
                Ra
              </div>
            </div>
            <div class=" flex-1 w-full flex flex-col justify-center px-2">
              <div
                class="  p-1 transition duration-300 group-hover:bg-gradient-to-r group-hover:from-red-400 group-hover:to-red-600  col-span-9 w-full gap-2 flex justify-start items-center rounded-full">
                <div class="transition duration-300 group-hover:bg-red-600 group-hover:bg-opacity-90 p-2 rounded-full">
                  <svg xmlns="http://www.w3.org/2000/svg"
                    class=" text-black group-hover:text-white  duration-500  w-6 h-6 group-hover:h-7 group-hover:w-7 transition-all "
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
                      strokeWidth="1.5"
                      d="M3.5 18c0-1.414 0-2.121.44-2.56C4.378 15 5.085 15 6.5 15H7c.943 0 1.414 0 1.707.293S9 16.057 9 17v5H3.5zM15 19c0-.943 0-1.414.293-1.707S16.057 17 17 17h.5c1.414 0 2.121 0 2.56.44c.44.439.44 1.146.44 2.56v2H15zM2 22h20M9 16c0-1.414 0-2.121.44-2.56C9.878 13 10.585 13 12 13s2.121 0 2.56.44c.44.439.44 1.146.44 2.56v6H9zm3.691-13.422l.704 1.42a.87.87 0 0 0 .568.423l1.276.213c.816.137 1.008.734.42 1.323l-.992 1a.88.88 0 0 0-.208.73l.284 1.238c.224.98-.292 1.359-1.152.847l-1.196-.714a.86.86 0 0 0-.792 0l-1.196.714c-.856.512-1.376.129-1.152-.847l.284-1.238a.88.88 0 0 0-.208-.73l-.991-1c-.584-.589-.396-1.186.42-1.323l1.275-.213a.87.87 0 0 0 .564-.424l.704-1.42c.384-.77 1.008-.77 1.388 0"
                      color="currentColor" />
                  </svg>
                </div>
                <div>
                  <span class=" text-base font-semibold group-hover:text-white text-black">
                    Ranking
                  </span>

                </div>
              </div>

            </div>
          </a>

        </li>

      </ul>
    </div>
    <div class="bg-white rounded-b-2xl pb-4 rounded-tl-[38px]">
      <ul>
        <li class="w-full pt-4  ">
          <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">Administración</h6>
        </li>
        <li class="mt-2 text-gray-700 w-full px-2">
          <a class=" group rounded-full hover:bg-blue-500 hover:bg-opacity-10 text-sm ease-nav-brand  flex items-center whitespace-nowrap px-2 py-2 transition-colors"
            href="/hs-admin/views/administracion-usuarios">
            <div
              class="shadow-soft-2xl mr-2 group-hover:p-2 transition duration-300 flex items-center justify-center rounded-full group-hover:bg-blue-500 group-hover:text-white  stroke-0 text-center ">

              <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                stroke-linejoin="round" class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1"></path>
                <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                <path d="M17 10h2a2 2 0 0 1 2 2v1"></path>
                <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                <path d="M3 13v-1a2 2 0 0 1 2 -2h2"></path>
              </svg>
            </div>
            <span
              class="ml-1  group-hover:text-blue-700 font-semibold  duration-300 opacity-100 pointer-events-none ease-soft">Usuarios</span>
          </a>
        </li>

        <li class="mt-0.5 text-gray-700 w-full px-2">
          <a class=" group rounded-full hover:bg-blue-500 hover:bg-opacity-10 text-sm ease-nav-brand  flex items-center whitespace-nowrap px-2 py-2 transition-colors"
            href="/hs-admin/views/administracion-clases">
            <div
              class="shadow-soft-2xl mr-2 group-hover:p-2 transition duration-300 flex items-center justify-center rounded-full group-hover:bg-blue-500 group-hover:text-white  stroke-0 text-center ">
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24"
                class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1.6367 1.6367C.7322 1.6367 0 2.369 0 3.2734v17.4532c0 .9045.7322 1.6367 1.6367 1.6367h20.7266c.9045 0 1.6367-.7322 1.6367-1.6367V3.2734c0-.9045-.7322-1.6367-1.6367-1.6367H1.6367zm.545 2.1817h19.6367v16.3632h-2.7266v-1.0898h-4.9102v1.0898h-12V3.8184zM12 8.1816c-.9046 0-1.6367.7322-1.6367 1.6368 0 .9045.7321 1.6367 1.6367 1.6367.9046 0 1.6367-.7322 1.6367-1.6367 0-.9046-.7321-1.6368-1.6367-1.6368zm-4.3633 1.9102c-.6773 0-1.2285.5493-1.2285 1.2266 0 .6772.5512 1.2265 1.2285 1.2265.6773 0 1.2266-.5493 1.2266-1.2265 0-.6773-.5493-1.2266-1.2266-1.2266zm8.7266 0c-.6773 0-1.2266.5493-1.2266 1.2266 0 .6772.5493 1.2265 1.2266 1.2265.6773 0 1.2285-.5493 1.2285-1.2265 0-.6773-.5512-1.2266-1.2285-1.2266zM12 12.5449c-1.179 0-2.4128.4012-3.1484 1.0059-.384-.1198-.8043-.1875-1.2149-.1875-1.3136 0-2.7285.695-2.7285 1.5586v.8965h14.1836v-.8965c0-.8637-1.4149-1.5586-2.7285-1.5586-.4106 0-.831.0677-1.2149.1875-.7356-.6047-1.9694-1.0059-3.1484-1.0059Z">
                </path>
              </svg>
            </div>
            <span
              class="ml-1  group-hover:text-blue-700 font-semibold  duration-300 opacity-100 pointer-events-none ease-soft">Clases</span>
          </a>
        </li>
        <li class="mt-0.5 text-gray-700 w-full px-2">
          <a class=" group rounded-full hover:bg-blue-500 hover:bg-opacity-10 text-sm ease-nav-brand  flex items-center whitespace-nowrap px-2 py-2 transition-colors"
            href="/hs-admin/views/administracion-ejercicios">
            <div
              class="shadow-soft-2xl mr-2 group-hover:p-2 transition duration-300 flex items-center justify-center rounded-full group-hover:bg-blue-500 group-hover:text-white  stroke-0 text-center ">

              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="w-5 h-5"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M248,124a56.11,56.11,0,0,0-32-50.61V72a48,48,0,0,0-88-26.49A48,48,0,0,0,40,72v1.39a56,56,0,0,0,0,101.2V176a48,48,0,0,0,88,26.49A48,48,0,0,0,216,176v-1.41A56.09,56.09,0,0,0,248,124ZM88,208a32,32,0,0,1-31.81-28.56A55.87,55.87,0,0,0,64,180h8a8,8,0,0,0,0-16H64A40,40,0,0,1,50.67,86.27,8,8,0,0,0,56,78.73V72a32,32,0,0,1,64,0v68.26A47.8,47.8,0,0,0,88,128a8,8,0,0,0,0,16,32,32,0,0,1,0,64Zm104-44h-8a8,8,0,0,0,0,16h8a55.87,55.87,0,0,0,7.81-.56A32,32,0,1,1,168,144a8,8,0,0,0,0-16,47.8,47.8,0,0,0-32,12.26V72a32,32,0,0,1,64,0v6.73a8,8,0,0,0,5.33,7.54A40,40,0,0,1,192,164Zm16-52a8,8,0,0,1-8,8h-4a36,36,0,0,1-36-36V80a8,8,0,0,1,16,0v4a20,20,0,0,0,20,20h4A8,8,0,0,1,208,112ZM60,120H56a8,8,0,0,1,0-16h4A20,20,0,0,0,80,84V80a8,8,0,0,1,16,0v4A36,36,0,0,1,60,120Z">
                </path>
              </svg>
            </div>
            <span
              class="ml-1  group-hover:text-blue-700 font-semibold  duration-300 opacity-100 pointer-events-none ease-soft">Ejercicios</span>
          </a>
        </li>
        <li class="mt-0.5 text-gray-700 w-full px-2">
          <a class=" group rounded-full hover:bg-blue-500 hover:bg-opacity-10 text-sm ease-nav-brand  flex items-center whitespace-nowrap px-2 py-2 transition-colors"
            href="/hs-admin/views/administracion-lecturas">
            <div
              class="shadow-soft-2xl mr-2 group-hover:p-2 transition duration-300 flex items-center justify-center rounded-full group-hover:bg-blue-500 group-hover:text-white  stroke-0 text-center ">
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class=" w-5 h-5"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M426.2 80.4l-170.2 32-170.2-32C64 77 48 97.3 48 118v244.5c0 20.7 16 32.6 37.8 37.6L256 432l170.2-32c21.8-5 37.8-16.9 37.8-37.6V118c0-20.7-16-41-37.8-37.6zm0 282l-151.2 32V149.9l151.2-32v244.5zm-189.2 32l-151.2-32V118L237 150v244.4z">
                </path>
              </svg>
            </div>
            <span
              class="ml-1  group-hover:text-blue-700 font-semibold duration-300 opacity-100 pointer-events-none ease-soft">Lecturas</span>
          </a>
        </li>

        </li>
        <li class="mt-0.5 text-gray-700 w-full px-2">
          <a class=" group rounded-full hover:bg-blue-500 hover:bg-opacity-10 text-sm ease-nav-brand  flex items-center whitespace-nowrap px-2 py-2 transition-colors"
            href="/hs-admin/views/administracion-empresas">
            <div
              class="shadow-soft-2xl mr-2 group-hover:p-2 transition duration-300 flex items-center justify-center rounded-full group-hover:bg-blue-500 group-hover:text-white  stroke-0 text-center ">

              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class=" w-5 h-5"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19 2H9c-1.103 0-2 .897-2 2v6H5c-1.103 0-2 .897-2 2v9a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4c0-1.103-.897-2-2-2zM5 12h6v8H5v-8zm14 8h-6v-8c0-1.103-.897-2-2-2H9V4h10v16z">
                </path>
                <path d="M11 6h2v2h-2zm4 0h2v2h-2zm0 4.031h2V12h-2zM15 14h2v2h-2zm-8 .001h2v2H7z"></path>
              </svg>
            </div>
            <span
              class="ml-1  group-hover:text-blue-700 font-semibold duration-300 opacity-100 pointer-events-none ease-soft">Empresas</span>
          </a>
        </li>


      </ul>
    </div>



  </div>


</div>