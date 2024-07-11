<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>Avance Usuario</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-[#f8f6fa] text-slate-500">

    <?php include '../../layout/sidebar.php' ?>


    <main class="ease-soft-in-out xl:ml-[240px] 2xl:ml-[290px] relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->

        <?php include '../../layout/navbar.php' ?>

        <div class="ml-10 pr-10">
            <div class="mx-auto w-full">
                <div class="bg-white  relative shadow-md sm:rounded-lg overflow-hidden">
                    <div
                        class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-1/2">
                            <div class="flex">

                                <select id="countries"
                                    class="bg-gray-50 border max-w-[120px] border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option selected>Empresas</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                </select>

                                <div class="relative max-w-xs w-full">
                                    <input type="search" id="search-dropdown"
                                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg rounded-s-gray-100 rounded-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                        placeholder="Buscar por nombre o apellido" required />
                                    <button type="submit"
                                        class="absolute top-0 end-0 p-2.5 h-full text-sm font-medium text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 "><svg
                                            class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg></button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <div class="flex gap-2">
                                <button data-modal-target="filters-modal" data-modal-toggle="filters-modal"
                                    type="button"
                                    class=" flex-1 lg:flex-0 flex items-center justify-center text-white bg-primary-700 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2  focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        class="h-4 w-4 mr-2 text-white" viewbox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Filtros
                                </button>

                            </div>
                            <div
                                class="flex justify-center gap-2 items-center rounded-xl p-2 bg-blue-600 bg-opacity-10">
                                <button class=" hover:bg-blue-200 rounded-xl p-1">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" class="text-blue-600 w-5 h-5"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linejoin="round" stroke-width="32"
                                            d="M384 368h24a40.12 40.12 0 0 0 40-40V168a40.12 40.12 0 0 0-40-40H104a40.12 40.12 0 0 0-40 40v160a40.12 40.12 0 0 0 40 40h24">
                                        </path>
                                        <rect width="256" height="208" x="128" y="240" fill="none"
                                            stroke-linejoin="round" stroke-width="32" rx="24.32" ry="24.32"></rect>
                                        <path fill="none" stroke-linejoin="round" stroke-width="32"
                                            d="M384 128v-24a40.12 40.12 0 0 0-40-40H168a40.12 40.12 0 0 0-40 40v24">
                                        </path>
                                        <circle cx="392" cy="184" r="24"></circle>
                                    </svg>
                                </button>
                                <button class=" hover:bg-blue-200 rounded-xl p-1">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                        class="text-blue-600 w-5 h-5" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path
                                            d="M19.35 10.04A7.49 7.49 0 0 0 12 4C9.11 4 6.6 5.64 5.35 8.04A5.994 5.994 0 0 0 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM19 18H6c-2.21 0-4-1.79-4-4 0-2.05 1.53-3.76 3.56-3.97l1.07-.11.5-.95A5.469 5.469 0 0 1 12 6c2.62 0 4.88 1.86 5.39 4.43l.3 1.5 1.53.11A2.98 2.98 0 0 1 22 15c0 1.65-1.35 3-3 3zm-5.55-8h-2.9v3H8l4 4 4-4h-2.55z">
                                        </path>
                                    </svg>
                                </button>

                            </div>


                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                                <tr>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Usuario</th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Nombre</th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Apellidos</th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Empresa</th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">VIP</th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">VFP</th>

                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Sesión</th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Clase Max.</th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Vigencia</th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Fecha de Reg.</th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Fecha de cierre</th>

                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Acciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">Apple
                                        iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">Softbelt</td>
                                    <td class="px-4 py-3">152</td>
                                    <td class="px-4 py-3">5</td>
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">Activo (90 dias)</td>
                                    <td class="px-4 py-3">15/06/2023</td>
                                    <td class="px-4 py-3">15/08/2023</td>
                                    <td class="px-4 py-3">152</td>

                                    <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                        <button data-modal-target="details-modal" data-modal-toggle="details-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Detalles
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" class=" w-5 h-5 "
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                                </path>
                                            </svg>
                                        </button>

                                        <button data-modal-target="details-class-modal"
                                            data-modal-toggle="details-class-modal"
                                            class=" bg-blue-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                            type="button">
                                            Avance
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 5h8"></path>
                                                <path d="M13 9h5"></path>
                                                <path d="M13 15h8"></path>
                                                <path d="M13 19h5"></path>
                                                <path
                                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                                <path
                                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                                </path>
                                            </svg>
                                        </button>

                                    </td>
                                </tr>



                            </tbody>
                        </table>
                    </div>
                    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
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


    </main>

    <!-- modals -->

    <div id="filters-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-t-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Filtros
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                        data-modal-hide="filters-modal">
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
                    <div class="mb-6">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900">Usuario</label>
                        <input type="text" id="usuario" name="usuario"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>

                    <div class=" ">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900">Seleccionar
                            rango de fecha</label>
                        <div data-date-format="dd/mm/yyyy" class=" flex " data-date="22/07/2013"
                            class="input-group input-large flex justify-center gap-2">
                            <input style="border-radius:8px !important" type="date" name="from"
                                class="form-control dpd1 flex-1">
                            <span class=" rounded-lg p-2.5 ">Hasta</span>
                            <input style="border-radius:8px !important" type="date" name="to"
                                class="form-control dpd2 flex-1">
                        </div>
                    </div>

                </div>
            </div>
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 bg-white rounded-b ">
                <button data-modal-hide="filters-modal" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Cerrar
                </button>

            </div>
        </div>
    </div>
    <div id="details-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-7xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-t-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Detalle de avance
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                        data-modal-hide="details-modal">
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
                        <div class=" flex flex-row gap-8 justify-start items-center flex-wrap">
                            <div class="user-identity">
                                <h4 class=" font-bold text-4xl text-slate-800"><strong id="nombre">John Doe</strong>
                                </h4>
                                <p class=" font-bold text-3xl text-slate-600"> <strong id="apellidos">Riaxe Systems
                                        Pvt</strong> </p>
                            </div>
                        </div>

                        <div id="containerGraficoAvUser" class=" w-full mt-10">
                            <div class=" flex">
                                <div class="-rotate-90 flex flex-col justify-center text-blue-600 font-bold text-2xl ">

                                    PUNTAJE
                                </div>
                                <div class=" w-full flex-1 flex flex-col gap-2">
                                    <canvas class=" h-full w-full" id="graficoAvUser"></canvas>
                                    <div class=" text-blue-600 flex justify-center  font-bold text-2xl ">
                                        SESIÓN
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="noAvUser">

                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 bg-white rounded-b ">
                <button data-modal-hide="details-modal" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Cerrar
                </button>

            </div>
        </div>
    </div>
    <div id="details-class-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-t-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Detalle de avance por clase
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                        data-modal-hide="details-class-modal">
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

                        <div class="flex mb-4 md:grid md:grid-cols-12 flex-col gap-2">
                            <div class="  md:col-span-8 flex flex-row gap-8 justify-start items-center flex-wrap">
                                <div class="user-identity">
                                    <h4 class=" font-bold text-4xl text-slate-800"><strong id="nombre">John Doe</strong>
                                    </h4>
                                    <p class=" font-bold text-3xl text-slate-600"> <strong id="apellidos">Riaxe Systems
                                            Pvt</strong> </p>
                                </div>
                            </div>
                            <div class=" col-span-4">
                                <label for="countries"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Selecciona una
                                    sesión
                                </label>
                                <select id="sesion"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option selected>Todos</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>


                        </div>

                        <div class="mb-4 border-b border-gray-200 ">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
                                data-tabs-toggle="#default-styled-tab-content"
                                data-tabs-active-classes="text-blue-600 hover:text-blue-600 dark:text-blue-500 0 border-blue-600 dark:border-blue-500"
                                data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                                role="tablist">
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="ejercicios-styled-tab"
                                        data-tabs-target="#styled-ejercicios" type="button" role="tab"
                                        aria-controls="ejercicios" aria-selected="false">Ejercicios</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                                        id="lecturas-styled-tab" data-tabs-target="#styled-lecturas" type="button"
                                        role="tab" aria-controls="lecturas" aria-selected="false">Lecturas</button>
                                </li>

                            </ul>
                        </div>
                        <div id="default-styled-tab-content">
                            <div class="hidden  rounded-lg bg-gray-50 " id="styled-ejercicios" role="tabpanel"
                                aria-labelledby="ejercicios-tab">


                                <div class="relative overflow-x-auto sm:rounded-lg">
                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    Sesión
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Velocidad
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Puntaje
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Ejercicio
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Fecha
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                    1
                                                </th>
                                                <td class="px-6 py-4">
                                                    0
                                                </td>
                                                <td class="px-6 py-4">
                                                    124
                                                </td>
                                                <td class="px-6 py-4">
                                                    Ejercicio visual
                                                </td>
                                                <td class="px-6 py-4">
                                                    7/2/2024 12:19:26 PM
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="hidden rounded-lg bg-gray-50 " id="styled-lecturas" role="tabpanel"
                                aria-labelledby="lecturas-tab">
                                <div class="relative overflow-x-auto sm:rounded-lg">
                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    Sesión
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Velocidad
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Comprensión %
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Ejercicio
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Fecha
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                    1
                                                </th>
                                                <td class="px-6 py-4">
                                                    0
                                                </td>
                                                <td class="px-6 py-4">
                                                    124 %
                                                </td>
                                                <td class="px-6 py-4">
                                                    Ejercicio visual
                                                </td>
                                                <td class="px-6 py-4">
                                                    7/2/2024 12:19:26 PM
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 bg-white rounded-b ">
                <button data-modal-hide="details-class-modal" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Cerrar
                </button>

            </div>
        </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

    <script>
        let myChart = null;
        const ctx = document.getElementById('graficoAvUser').getContext('2d');
        myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['SESIÓN 1', 'SESIÓN 2', 'SESIÓN 3', 'SESIÓN 4', 'SESIÓN 5', 'SESIÓN 6', 'SESIÓN 7', 'SESIÓN 8', 'SESIÓN 9', 'SESIÓN 10', 'SESIÓN 11', 'SESIÓN 12', 'SESIÓN 13', 'SESIÓN 14', 'SESIÓN 15', 'SESIÓN 16', 'SESIÓN 17', 'SESIÓN 18', 'SESIÓN 19', 'SESIÓN 20'],
                datasets: [{
                    label: 'Velocidad alcanzada',
                    // data: response.data[0].dataPoints.map((e) => e.y),
                    data: [132, 732, 213, 123, 312],
                    borderColor: 'rgb(51, 153, 255)',
                    backgroundColor: 'rgba(29, 78, 216, 0.5)',
                    fill: true,
                    tension: 0.1
                }
                    //, {
                    //label: 'Velocidad esperada',
                    //data: [150, 160, 170, 180, 190, 200, 210, 220, 230, 240, 250, 260, 270, 280, 290, 300, 310, 320, 330, 340],
                    //borderColor: 'rgb(249, 115, 22)',
                    //backgroundColor: 'rgba(249, 115, 22, 0.5)',
                    //borderDash: [10, 5],
                    //fill: false,
                    //tension: 0.1
                    //}
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        labels: {
                            color: "rgba(0, 0, 255, 0.9)"
                        }
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        ticks: {
                            color: "rgba(0, 0, 0, 0.9)"
                        },
                        grid: {
                            color: 'rgba(255,255,255,1)',
                        },
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0,0.08)',
                        },
                        ticks: {
                            color: "rgba(0, 0, 0, 0.9)"
                        }

                    }
                }
            }
        });
    </script>

</body>
<!-- plugin for charts  -->
<script src="./assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>

</html>