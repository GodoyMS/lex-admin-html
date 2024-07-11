<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
  <title>Administración usuarios</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

  <!-- Popper -->
  <script src="https://cdn.tailwindcss.com"></script>



</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-[#f8f6fa] text-slate-500">

  <?php include '../../layout/sidebar.php' ?>


  <main class="ease-soft-in-out xl:ml-[240px] 2xl:ml-[290px] relative h-full max-h-screen rounded-xl transition-all duration-200">
    <!-- Navbar -->

    <?php include '../../layout/navbar.php' ?>

    <div class="ml-10 pr-10">
      <div class=" p-6 mt-6 bg-white rounded-2xl w-full ">


        <div class="mb-4 border-b border-gray-200 dark:border-gray-200">
          <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
            data-tabs-toggle="#default-styled-tab-content"
            data-tabs-active-classes="text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-200 dark:border-blue-500"
            data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
            role="tablist">
            <li class="me-2" role="presentation">
              <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab"
                data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
                aria-selected="false">Mantenimiento de ejercicios </button>
            </li>
            <li class="me-2" role="presentation">
              <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                id="dashboard-styled-tab" data-tabs-target="#styled-users" type="button" role="tab"
                aria-controls="users" aria-selected="false">Registrar contenido</button>
            </li>

          </ul>
        </div>
        <div id="default-styled-tab-content">
          <div class="hidden p-4 rounded-lg  " id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">

            <div class="flex justify-between w-full mb-2">
              <form class="max-w-md w-full ">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                <div class="relative">
                  <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                      fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                  </div>
                  <input type="search" id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                    placeholder="Buscar por nombre de ejercicio" required />
                  <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Buscar</button>
                </div>
              </form>
              <div class="flex flex-col justify-center">
                <button data-modal-target="nuevo-ejercicio-modal" data-modal-toggle="nuevo-ejercicio-modal"
                  type="button"
                  class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Agregar
                  ejercicio</button>
              </div>
            </div>
            <div class="overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                  <tr>
                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Ejercicio</th>
                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Formulario</th>
                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Abreviatura </th>
                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Contenido </th>


                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Acciones</th>

                  </tr>
                </thead>
                <tbody>
                  <tr class="border-b odd:bg-gray-50 even:bg-white">
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Amplio campo visual
                    </th>
                    <td class="px-4 py-3">frm_acv.aspx </td>
                    <td class="px-4 py-3">ACV </td>
                    <td class="px-4 py-3">Si</td>


                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                      <button data-modal-target="edit-ejercicio-modal" data-modal-toggle="edit-ejercicio-modal"
                        class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                        type="button">
                        Editar

                        <svg class=" h-5 w-5 " stroke="currentColor" fill="currentColor" stroke-width="0"
                          viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <g id="Edit">
                            <g>
                              <path d="M3.548,20.938h16.9a.5.5,0,0,0,0-1H3.548a.5.5,0,0,0,0,1Z"></path>
                              <path
                                d="M9.71,17.18a2.587,2.587,0,0,0,1.12-.65l9.54-9.54a1.75,1.75,0,0,0,0-2.47l-.94-.93a1.788,1.788,0,0,0-2.47,0L7.42,13.12a2.473,2.473,0,0,0-.64,1.12L6.04,17a.737.737,0,0,0,.19.72.767.767,0,0,0,.53.22Zm.41-1.36a1.468,1.468,0,0,1-.67.39l-.97.26-1-1,.26-.97a1.521,1.521,0,0,1,.39-.67l.38-.37,1.99,1.99Zm1.09-1.08L9.22,12.75l6.73-6.73,1.99,1.99Zm8.45-8.45L18.65,7.3,16.66,5.31l1.01-1.02a.748.748,0,0,1,1.06,0l.93.94A.754.754,0,0,1,19.66,6.29Z">
                              </path>
                            </g>
                          </g>
                        </svg>
                      </button>

                      <button
                        class=" bg-red-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-red-600 hover:bg-red-100 hover:text-red-700 transition duration-300 focus:outline-none  "
                        type="button">
                        Eliminar

                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                          stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                          xmlns="http://www.w3.org/2000/svg">
                          <polyline points="3 6 5 6 21 6"></polyline>
                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                          </path>
                          <line x1="10" y1="11" x2="10" y2="17"></line>
                          <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                      </button>

                    </td>
                  </tr>
                  <tr class="border-b odd:bg-gray-50 even:bg-white">
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Amplio campo visual
                    </th>
                    <td class="px-4 py-3">frm_acv.aspx </td>
                    <td class="px-4 py-3">ACV </td>
                    <td class="px-4 py-3">Si</td>


                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                      <button data-modal-target="edit-ejercicio-modal" data-modal-toggle="edit-ejercicio-modal"
                        class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                        type="button">
                        Editar

                        <svg class=" h-5 w-5 " stroke="currentColor" fill="currentColor" stroke-width="0"
                          viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <g id="Edit">
                            <g>
                              <path d="M3.548,20.938h16.9a.5.5,0,0,0,0-1H3.548a.5.5,0,0,0,0,1Z"></path>
                              <path
                                d="M9.71,17.18a2.587,2.587,0,0,0,1.12-.65l9.54-9.54a1.75,1.75,0,0,0,0-2.47l-.94-.93a1.788,1.788,0,0,0-2.47,0L7.42,13.12a2.473,2.473,0,0,0-.64,1.12L6.04,17a.737.737,0,0,0,.19.72.767.767,0,0,0,.53.22Zm.41-1.36a1.468,1.468,0,0,1-.67.39l-.97.26-1-1,.26-.97a1.521,1.521,0,0,1,.39-.67l.38-.37,1.99,1.99Zm1.09-1.08L9.22,12.75l6.73-6.73,1.99,1.99Zm8.45-8.45L18.65,7.3,16.66,5.31l1.01-1.02a.748.748,0,0,1,1.06,0l.93.94A.754.754,0,0,1,19.66,6.29Z">
                              </path>
                            </g>
                          </g>
                        </svg>
                      </button>

                      <button
                        class=" bg-red-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-red-600 hover:bg-red-100 hover:text-red-700 transition duration-300 focus:outline-none  "
                        type="button">
                        Eliminar

                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                          stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                          xmlns="http://www.w3.org/2000/svg">
                          <polyline points="3 6 5 6 21 6"></polyline>
                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                          </path>
                          <line x1="10" y1="11" x2="10" y2="17"></line>
                          <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                      </button>

                    </td>
                  </tr>
                  <tr class="border-b odd:bg-gray-50 even:bg-white">
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Amplio campo visual
                    </th>
                    <td class="px-4 py-3">frm_acv.aspx </td>
                    <td class="px-4 py-3">ACV </td>
                    <td class="px-4 py-3">Si</td>


                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                      <button data-modal-target="edit-ejercicio-modal" data-modal-toggle="edit-ejercicio-modal"
                        class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                        type="button">
                        Editar

                        <svg class=" h-5 w-5 " stroke="currentColor" fill="currentColor" stroke-width="0"
                          viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <g id="Edit">
                            <g>
                              <path d="M3.548,20.938h16.9a.5.5,0,0,0,0-1H3.548a.5.5,0,0,0,0,1Z"></path>
                              <path
                                d="M9.71,17.18a2.587,2.587,0,0,0,1.12-.65l9.54-9.54a1.75,1.75,0,0,0,0-2.47l-.94-.93a1.788,1.788,0,0,0-2.47,0L7.42,13.12a2.473,2.473,0,0,0-.64,1.12L6.04,17a.737.737,0,0,0,.19.72.767.767,0,0,0,.53.22Zm.41-1.36a1.468,1.468,0,0,1-.67.39l-.97.26-1-1,.26-.97a1.521,1.521,0,0,1,.39-.67l.38-.37,1.99,1.99Zm1.09-1.08L9.22,12.75l6.73-6.73,1.99,1.99Zm8.45-8.45L18.65,7.3,16.66,5.31l1.01-1.02a.748.748,0,0,1,1.06,0l.93.94A.754.754,0,0,1,19.66,6.29Z">
                              </path>
                            </g>
                          </g>
                        </svg>
                      </button>

                      <button
                        class=" bg-red-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-red-600 hover:bg-red-100 hover:text-red-700 transition duration-300 focus:outline-none  "
                        type="button">
                        Eliminar

                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                          stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                          xmlns="http://www.w3.org/2000/svg">
                          <polyline points="3 6 5 6 21 6"></polyline>
                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                          </path>
                          <line x1="10" y1="11" x2="10" y2="17"></line>
                          <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                      </button>

                    </td>
                  </tr>
                  <tr class="border-b odd:bg-gray-50 even:bg-white">
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Amplio campo visual
                    </th>
                    <td class="px-4 py-3">frm_acv.aspx </td>
                    <td class="px-4 py-3">ACV </td>
                    <td class="px-4 py-3">Si</td>


                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                      <button data-modal-target="edit-ejercicio-modal" data-modal-toggle="edit-ejercicio-modal"
                        class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                        type="button">
                        Editar

                        <svg class=" h-5 w-5 " stroke="currentColor" fill="currentColor" stroke-width="0"
                          viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <g id="Edit">
                            <g>
                              <path d="M3.548,20.938h16.9a.5.5,0,0,0,0-1H3.548a.5.5,0,0,0,0,1Z"></path>
                              <path
                                d="M9.71,17.18a2.587,2.587,0,0,0,1.12-.65l9.54-9.54a1.75,1.75,0,0,0,0-2.47l-.94-.93a1.788,1.788,0,0,0-2.47,0L7.42,13.12a2.473,2.473,0,0,0-.64,1.12L6.04,17a.737.737,0,0,0,.19.72.767.767,0,0,0,.53.22Zm.41-1.36a1.468,1.468,0,0,1-.67.39l-.97.26-1-1,.26-.97a1.521,1.521,0,0,1,.39-.67l.38-.37,1.99,1.99Zm1.09-1.08L9.22,12.75l6.73-6.73,1.99,1.99Zm8.45-8.45L18.65,7.3,16.66,5.31l1.01-1.02a.748.748,0,0,1,1.06,0l.93.94A.754.754,0,0,1,19.66,6.29Z">
                              </path>
                            </g>
                          </g>
                        </svg>
                      </button>

                      <button
                        class=" bg-red-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-red-600 hover:bg-red-100 hover:text-red-700 transition duration-300 focus:outline-none  "
                        type="button">
                        Eliminar

                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                          stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                          xmlns="http://www.w3.org/2000/svg">
                          <polyline points="3 6 5 6 21 6"></polyline>
                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                          </path>
                          <line x1="10" y1="11" x2="10" y2="17"></line>
                          <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                      </button>

                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
            <nav
              class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
              aria-label="Table navigation">
              <span class="text-sm font-normal text-gray-500 ">
                Mostrando
                <span class="font-semibold text-gray-900 ">1-10</span>
                de
                <span class="font-semibold text-gray-900 ">1000</span>
              </span>
              <ul class="inline-flex items-stretch -space-x-px">
                <li>
                  <a href="#"
                    class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">
                    <span class="sr-only">Previous</span>
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#"
                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">1</a>
                </li>
                <li>
                  <a href="#"
                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">2</a>
                </li>
                <li>
                  <a href="#" aria-current="page"
                    class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700   ">3</a>
                </li>
                <li>
                  <a href="#"
                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">...</a>
                </li>
                <li>
                  <a href="#"
                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">100</a>
                </li>
                <li>
                  <a href="#"
                    class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">
                    <span class="sr-only">Next</span>
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd" />
                    </svg>
                  </a>
                </li>
              </ul>
            </nav>




          </div>
          <div class="hidden p-4 rounded-lg  " id="styled-users" role="tabpanel" aria-labelledby="dashboard-tab">

            <div
              class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 mb-4">
              <div class="w-full md:w-1/2 ">
                <div class="flex">

                  <select id="countries"
                    class="bg-gray-50 border max-w-[120px] border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option selected>Clase</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>

                  <div class="relative max-w-xs w-full">
                    <input type="search" id="search-dropdown"
                      class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg rounded-s-gray-100 rounded-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                      placeholder="Nombre del ejercicio" required />
                    <button type="submit"
                      class="absolute top-0 end-0 p-2.5 h-full text-sm font-medium text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 "><svg
                        class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                      </svg></button>
                  </div>
                </div>
              </div>
              <div class="flex flex-col justify-center w-full md:w-auto">
                <button data-modal-target="nuevo-ejercicio-clase-modal" data-modal-toggle="nuevo-ejercicio-clase-modal"
                  type="button"
                  class="text-white w-full  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Agregar
                  ejercicio a clase</button>
              </div>
            </div>
            <div class="overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                  <tr>
                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Clase</th>

                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Ejercicio</th>
                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Abreviatura</th>
                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Tipo </th>
                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Preguntas </th>


                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Puntos Max</th>
                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Puntos Min</th>
                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Orden</th>
                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Interacciones</th>
                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Repeticiones</th>
                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Intentos</th>
                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Acciones</th>

                  </tr>
                </thead>
                <tbody>
                  <tr class="border-b odd:bg-gray-50 even:bg-white">
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Clase 0
                    </th>
                    <td class="px-4 py-3">Diagnóstico inicial </td>
                    <td class="px-4 py-3">ACV </td>
                    <td class="px-4 py-3">L</td>
                    <td class="px-4 py-3">Si</td>
                    <td class="px-4 py-3">0</td>
                    <td class="px-4 py-3">0</td>
                    <td class="px-4 py-3">1</td>
                    <td class="px-4 py-3">0</td>
                    <td class="px-4 py-3">1</td>
                    <td class="px-4 py-3">2</td>


                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                      <button data-modal-target="edit-ejercicio-modal" data-modal-toggle="edit-ejercicio-modal"
                        class=" bg-blue-50 whitespace-nowrap  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-green-600 hover:bg-green-100 hover:text-green-700 transition duration-300  focus:outline-none  "
                        type="button">
                        Editar ejercicio

                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                          class="w-5 h-5" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M464 64H192c-8.8 0-16 7.7-16 16.5V112H74c-23.1 0-42 18.9-42 42v207.5c0 47.6 39 86.5 86 86.5h279.7c45.1 0 82.3-36.9 82.3-82V80c0-8.8-7.2-16-16-16zm-288 80v192h-42V163.2c0-6.8-.8-13.3-3.3-19.2H176zm-17 255.4C148 410 133.2 416 118.5 416c-14.5 0-28.1-5.7-38.5-16-10.3-10.3-16-24-16-38.5V163.2c0-10.6 8.4-19.2 19-19.2s19 8.6 19 19.2V352c0 8.8 7.2 16 16 16h57.5c-1.5 11.6-7.2 22.6-16.5 31.4zM448 366c0 13.3-5.4 25.8-14.9 35.3-9.5 9.5-22.2 14.7-35.4 14.7H187.3c12.8-14.9 20.7-33.9 20.7-54.5V97h240v269z">
                          </path>
                          <path
                            d="M248 136h160v56H248zM248 224h160v32H248zM248 288h160v32H248zM408 352H248s0 32-8 32h148.7c19.3 0 19.3-21 19.3-32z">
                          </path>
                        </svg>
                      </button>
                      <button data-modal-target="edit-ejercicio-clase-modal"
                        data-modal-toggle="edit-ejercicio-clase-modal"
                        class=" bg-blue-50   whitespace-nowrap gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                        type="button">
                        Editar ejercicio clase

                        <svg class=" h-5 w-5 " stroke="currentColor" fill="currentColor" stroke-width="0"
                          viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <g id="Edit">
                            <g>
                              <path d="M3.548,20.938h16.9a.5.5,0,0,0,0-1H3.548a.5.5,0,0,0,0,1Z"></path>
                              <path
                                d="M9.71,17.18a2.587,2.587,0,0,0,1.12-.65l9.54-9.54a1.75,1.75,0,0,0,0-2.47l-.94-.93a1.788,1.788,0,0,0-2.47,0L7.42,13.12a2.473,2.473,0,0,0-.64,1.12L6.04,17a.737.737,0,0,0,.19.72.767.767,0,0,0,.53.22Zm.41-1.36a1.468,1.468,0,0,1-.67.39l-.97.26-1-1,.26-.97a1.521,1.521,0,0,1,.39-.67l.38-.37,1.99,1.99Zm1.09-1.08L9.22,12.75l6.73-6.73,1.99,1.99Zm8.45-8.45L18.65,7.3,16.66,5.31l1.01-1.02a.748.748,0,0,1,1.06,0l.93.94A.754.754,0,0,1,19.66,6.29Z">
                              </path>
                            </g>
                          </g>
                        </svg>
                      </button>

                      <button
                        class=" bg-red-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-red-600 hover:bg-red-100 hover:text-red-700 transition duration-300 focus:outline-none  "
                        type="button">
                        Eliminar

                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                          stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                          xmlns="http://www.w3.org/2000/svg">
                          <polyline points="3 6 5 6 21 6"></polyline>
                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                          </path>
                          <line x1="10" y1="11" x2="10" y2="17"></line>
                          <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                      </button>

                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
            <nav
              class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
              aria-label="Table navigation">
              <span class="text-sm font-normal text-gray-500 ">
                Mostrando
                <span class="font-semibold text-gray-900 ">1-10</span>
                de
                <span class="font-semibold text-gray-900 ">1000</span>
              </span>
              <ul class="inline-flex items-stretch -space-x-px">
                <li>
                  <a href="#"
                    class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">
                    <span class="sr-only">Previous</span>
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#"
                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">1</a>
                </li>
                <li>
                  <a href="#"
                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">2</a>
                </li>
                <li>
                  <a href="#" aria-current="page"
                    class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700   ">3</a>
                </li>
                <li>
                  <a href="#"
                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">...</a>
                </li>
                <li>
                  <a href="#"
                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">100</a>
                </li>
                <li>
                  <a href="#"
                    class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700  ">
                    <span class="sr-only">Next</span>
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd" />
                    </svg>
                  </a>
                </li>
              </ul>
            </nav>



          </div>

        </div>


      </div>
      <div id="nuevo-ejercicio-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <form class="relative p-4 w-full max-w-xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-t-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
              <h3 class="text-xl font-semibold text-gray-900 ">
                Nuevo ejercicio
              </h3>
              <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                data-modal-hide="nuevo-ejercicio-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
              <div class=" w-full">
                <div class="mb-5">
                  <label for="ejercicio" min="0" class="block mb-2 text-sm font-medium text-gray-900 ">Ejercicio</label>
                  <input type="text" id="ejercicio"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required />
                </div>
                <div class="mb-5">
                  <label for="formulario" min="0"
                    class="block mb-2 text-sm font-medium text-gray-900 ">Formulario</label>
                  <input type="text" id="formulario"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required />
                </div>
                <div class="mb-5">
                  <label for="abreviatura" min="0"
                    class="block mb-2 text-sm font-medium text-gray-900 ">Abreviatura</label>
                  <input type="text" id="abreviatura"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required />
                </div>
                <div class="mb-5">
                  <label for="contenido" min="0" class="block mb-2 text-sm font-medium text-gray-900 ">Contenido</label>
                  <input type="text" placeholder="Contenido" id="contenido"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required />
                </div>
                <div class="mb-5">
                  <label for="instrucciones" class="block mb-2 text-sm font-medium text-gray-900 ">Instrucciones</label>
                  <textarea required rows="5" id="instrucciones"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Instrucciones"></textarea>
                </div>

              </div>

            </div>
          </div>
          <div class="flex justify-center items-center p-4 md:p-5 border-t border-gray-50 bg-white rounded-b ">
            <button type="submit"
              class="max-w-xs w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Guardar
            </button>

          </div>
        </form>
      </div>


      <div id="edit-ejercicio-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <form class="relative p-4 w-full max-w-xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-t-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
              <h3 class="text-xl font-semibold text-gray-900 ">
                Editar ejercicio
              </h3>
              <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                data-modal-hide="edit-ejercicio-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
              <div class=" w-full">
                <div class="mb-5">
                  <label for="ejercicio" min="0" class="block mb-2 text-sm font-medium text-gray-900 ">Ejercicio</label>
                  <input type="text" id="ejercicio"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required />
                </div>
                <div class="mb-5">
                  <label for="formulario" min="0"
                    class="block mb-2 text-sm font-medium text-gray-900 ">Formulario</label>
                  <input type="text" id="formulario"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required />
                </div>
                <div class="mb-5">
                  <label for="abreviatura" min="0"
                    class="block mb-2 text-sm font-medium text-gray-900 ">Abreviatura</label>
                  <input type="text" id="abreviatura"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required />
                </div>
                <div class="mb-5">
                  <label for="contenido" min="0" class="block mb-2 text-sm font-medium text-gray-900 ">Contenido</label>
                  <input type="text" placeholder="Contenido" id="contenido"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required />
                </div>
                <div class="mb-5">
                  <label for="instrucciones" class="block mb-2 text-sm font-medium text-gray-900 ">Instrucciones</label>
                  <textarea required rows="5" id="instrucciones"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Instrucciones"></textarea>
                </div>

              </div>

            </div>
          </div>
          <div class="flex justify-center items-center p-4 md:p-5 border-t border-gray-50 bg-white rounded-b ">
            <button type="submit"
              class="max-w-xs w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Guardar
            </button>

          </div>
        </form>
      </div>


      <div id="edit-ejercicio-clase-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <form class="relative p-4 w-full max-w-xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-t-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
              <h3 class="text-xl font-semibold text-gray-900 ">
                Registro de ejercicio
              </h3>
              <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                data-modal-hide="edit-ejercicio-clase-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
              <div class=" w-full">
                <div class="flex flex-col md:gap-6 gap-0 md:grid md:grid-cols-2">
                  <div class="mb-5">
                    <label for="puntajeMaximo" min="0" class="block mb-2 text-sm font-medium text-gray-900 ">Puntaje
                      máximo</label>
                    <input type="number" id="puntajeMaximo"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                      required />
                  </div>
                  <div class="mb-5">
                    <label for="puntajeMinimo" min="0" class="block mb-2 text-sm font-medium text-gray-900 ">Puntaje
                      mínimo</label>
                    <input type="number" id="puntajeMinimo"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                      required />
                  </div>

                </div>

                <div class="mb-5">
                  <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Tipo</label>
                  <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option value="Lectura">Lectura</option>
                    <option value="Visual">Visual</option>
                    <option value="Puntaje">Puntaje</option>
                    <option value="Relajación">Relajación</option>
                  </select>
                </div>
                <div class="mb-5">
                  <div class="flex items-center">
                    <input checked id="checked-checkbox" type="checkbox" value=""
                      class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                    <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 ">Tiene
                      preguntas</label>
                  </div>
                </div>
                <hr class="mb-5" />

                <div class="flex flex-col md:gap-6 gap-0 md:grid md:grid-cols-2">
                  <div class="mb-5">
                    <label for="orden" min="0" class="block mb-2 text-sm font-medium text-gray-900 ">Orden
                    </label>
                    <input type="number" id="orden"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                      required />
                  </div>
                  <div class="mb-5">
                    <label for="interacciones" min="0"
                      class="block mb-2 text-sm font-medium text-gray-900 ">Interacciones
                    </label>
                    <input type="number" id="interacciones"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                      required />
                  </div>
                  <div class="mb-5">
                    <label for="repeticiones" min="0" class="block mb-2 text-sm font-medium text-gray-900 ">Repeticiones
                    </label>
                    <input type="number" id="repeticiones"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                      required />
                  </div>
                  <div class="mb-5">
                    <label for="intentos" min="0" class="block mb-2 text-sm font-medium text-gray-900 ">Intentos
                    </label>
                    <input type="number" id="intentos"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                      required />
                  </div>

                </div>
                <div class="mb-5">
                  <label for="instrucciones" class="block mb-2 text-sm font-medium text-gray-900 ">Instrucciones</label>
                  <textarea required rows="5" id="instrucciones"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Instrucciones"></textarea>
                </div>

              </div>

            </div>
          </div>
          <div class="flex justify-center items-center p-4 md:p-5 border-t border-gray-50 bg-white rounded-b ">
            <button type="submit"
              class="max-w-xs w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Guardar
            </button>

          </div>
        </form>
      </div>

      <div id="nuevo-ejercicio-clase-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <form class="relative p-4 w-full max-w-6xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-t-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
              <h3 class="text-xl font-semibold text-gray-900 ">
                Agregar ejercicios (s) a clase
              </h3>
              <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                data-modal-hide="nuevo-ejercicio-clase-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
              <div>
                <h2 class=" text-black font-bold text-2xl">Clase 1</h2>
              </div>
              <div class=" max-w-xs w-full">
                <form >
                  <input type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 "
                    placeholder="Nombre de ejercicio" required />
                </form>

              </div>

              <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 ">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                    <tr>
                      <th scope="col" class="px-4 py-3 whitespace-nowrap"></th>
                      <th scope="col" class="px-4 py-3 whitespace-nowrap">Ejercicio</th>
                      <th scope="col" class="px-4 py-3 whitespace-nowrap">Abreviatura</th>
                      <th scope="col" class="px-4 py-3 whitespace-nowrap">Puntos Max</th>
                      <th scope="col" class="px-4 py-3 whitespace-nowrap">Puntos Min</th>
                      <th scope="col" class="px-4 py-3 whitespace-nowrap">Orden</th>
                      <th scope="col" class="px-4 py-3 whitespace-nowrap">Interacciones</th>
                      <th scope="col" class="px-4 py-3 whitespace-nowrap">Repeticiones</th>
                      <th scope="col" class="px-4 py-3 whitespace-nowrap">Intentos</th>
                      <th scope="col" class="px-4 py-3 whitespace-nowrap">Preguntas </th>
                      <th scope="col" class="px-4 py-3 whitespace-nowrap">Tipo</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-b odd:bg-gray-50 even:bg-white">
                      <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">
                        <input id="exercise1" type="checkbox" value=""
                          class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                      </th>
                      <td class="px-4 py-3">
                        Ancho visual expansivo
                      </td>
                      <td class="px-4 py-3">AVE </td>
                      <td class="px-4 py-3">
                        <input type="number" id="exercise1-puntosmax"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="" required />

                      </td>
                      <td class="px-4 py-3">
                        <input type="number" id="exercise1-puntosMin"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="" required />

                      </td>
                      <td class="px-4 py-3">
                        <input type="number" id="exercise1-orden"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="" required />
                      </td>
                      <td class="px-4 py-3"> <input type="number" id="exercise1-interacciones"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="" required /></td>
                      <td class="px-4 py-3">
                        <input type="number" id="exercise1-repeticiones"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="" required />
                      </td>
                      <td class="px-4 py-3">
                        <input type="number" id="exercise1-intentos"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="" required />
                      </td>
                      <td class="px-4 py-3">
                        <input id="exercise1-preguntas" type="checkbox" value=""
                          class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                      </td>
                      <td class="px-4 py-3">

                        <select id="countries"
                          class="bg-gray-50 min-w-[100px] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                          <option value="Lectura">Lectura</option>
                          <option value="Visual">Visual</option>
                          <option value="Puntaje">Puntaje</option>
                          <option value="Relajacion">Relajación</option>
                        </select>
                      </td>
                    </tr>
                    <tr class="border-b odd:bg-gray-50 even:bg-white">
                      <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">
                        <input id="exercise2" type="checkbox" value=""
                          class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                      </th>
                      <td class="px-4 py-3">
                        Ancho visual móvil
                      </td>
                      <td class="px-4 py-3">AVM </td>
                      <td class="px-4 py-3">
                        <input type="number" id="exercise2-puntosmax"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="" required />

                      </td>
                      <td class="px-4 py-3">
                        <input type="number" id="exercise2-puntosMin"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="" required />

                      </td>
                      <td class="px-4 py-3">
                        <input type="number" id="exercise2-orden"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="" required />
                      </td>
                      <td class="px-4 py-3"> <input type="number" id="exercise1-interacciones"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="" required /></td>
                      <td class="px-4 py-3">
                        <input type="number" id="exercise2-repeticiones"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="" required />
                      </td>
                      <td class="px-4 py-3">
                        <input type="number" id="exercise2-intentos"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                          placeholder="" required />
                      </td>
                      <td class="px-4 py-3">
                        <input id="exercise2-preguntas" type="checkbox" value=""
                          class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                      </td>
                      <td class="px-4 py-3">

                        <select id="countries"
                          class="bg-gray-50 min-w-[100px] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                          <option value="Lectura">Lectura</option>
                          <option value="Visual">Visual</option>
                          <option value="Puntaje">Puntaje</option>
                          <option value="Relajacion">Relajación</option>
                        </select>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>


            </div>
          </div>
          <div class="flex justify-center items-center p-4 md:p-5 border-t border-gray-50 bg-white rounded-b ">
            <button type="submit"
              class="max-w-xs w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Guardar
            </button>

          </div>
        </form>
      </div>

  </main>


  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>


</body>


</html>