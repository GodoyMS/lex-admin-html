<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>Administración empresas</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Popper -->
    <script src="https://cdn.tailwindcss.com"></script>



</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-[#f8f6fa] text-slate-500">

    <?php include '../../layout/sidebar.php' ?>

    <!-- <main class="ease-soft-in-out xl:ml-[240px] 2xl:ml-[290px] relative h-full max-h-screen rounded-xl transition-all duration-200"> -->

    <main class="ease-soft-in-out xl:ml-[240px] 2xl:ml-[290px]  relative h-full max-h-screen rounded-xl transition-all duration-200">
    <!-- Navbar -->

        <?php include '../../layout/navbar.php' ?>

        <div class="ml-10 pr-10 ">
            <div class=" p-6 mt-6 bg-white rounded-2xl w-full ">

                <div class="flex justify-end mb-4">

                    <div class="flex flex-col justify-center w-full md:w-auto">
                        <button data-modal-target="nueva-empresa-modal" data-modal-toggle="nueva-empresa-modal"
                            type="button"
                            class="text-white w-full  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">
                            Agregar empresa
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                            <tr>
                                <th scope="col" class="px-4 py-3 whitespace-nowrap">Empresa</th>
                                <th scope="col" class="px-4 py-3 whitespace-nowrap">Abreviatura</th>
                                <th scope="col" class="px-4 py-3 whitespace-nowrap">Direccion</th>

                                <th scope="col" class="px-4 py-3 whitespace-nowrap">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b odd:bg-gray-50 even:bg-white">
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">
                                    Santiago Consultores
                                </th>
                                <td class="px-4 py-3">SCON</td>
                                <td class="px-4 py-3">-</td>



                                <td class="px-4 py-3 flex items-center gap-2 justify-start">





                                    <div id="tooltip-editar-empresa" role="tooltip"
                                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                                        Editar empresa

                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                    <button data-tooltip-style="light" data-tooltip-target="tooltip-editar-empresa"
                                        data-modal-target="edit-empresa-modal" data-modal-toggle="edit-empresa-modal"
                                        class=" bg-blue-50   whitespace-nowrap gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                        type="button">

                                        <svg class=" h-5 w-5 " stroke="currentColor" fill="currentColor"
                                            stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Edit">
                                                <g>
                                                    <path d="M3.548,20.938h16.9a.5.5,0,0,0,0-1H3.548a.5.5,0,0,0,0,1Z">
                                                    </path>
                                                    <path
                                                        d="M9.71,17.18a2.587,2.587,0,0,0,1.12-.65l9.54-9.54a1.75,1.75,0,0,0,0-2.47l-.94-.93a1.788,1.788,0,0,0-2.47,0L7.42,13.12a2.473,2.473,0,0,0-.64,1.12L6.04,17a.737.737,0,0,0,.19.72.767.767,0,0,0,.53.22Zm.41-1.36a1.468,1.468,0,0,1-.67.39l-.97.26-1-1,.26-.97a1.521,1.521,0,0,1,.39-.67l.38-.37,1.99,1.99Zm1.09-1.08L9.22,12.75l6.73-6.73,1.99,1.99Zm8.45-8.45L18.65,7.3,16.66,5.31l1.01-1.02a.748.748,0,0,1,1.06,0l.93.94A.754.754,0,0,1,19.66,6.29Z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>






                                    <div id="tooltip-eliminar-lectura" role="tooltip"
                                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                                        Eliminar lectura
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                    <button data-tooltip-style="light" data-tooltip-target="tooltip-eliminar-lectura"
                                        class=" bg-red-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-red-600 hover:bg-red-100 hover:text-red-700 transition duration-300 focus:outline-none  "
                                        type="button">


                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                            stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
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

            <div id="nueva-empresa-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden  fixed top-0 right-0 left-0 z-[60] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <form class="relative p-4 w-full max-w-xl   max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded shadow-2xl ">
                        <div>
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                                <h3 class="text-xl font-semibold text-gray-900 ">
                                    Nueva empresa
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                    data-modal-hide="nueva-empresa-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">

                                <div class="mb-5">
                                    <label for="empresa" class="block mb-2 text-sm font-medium text-gray-900 ">
                                        Empresa
                                    </label>
                                    <input type="text" id="empresa"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="abrev" class="block mb-2 text-sm font-medium text-gray-900 ">
                                        Abreviatura
                                    </label>
                                    <input type="text" id="abrev"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900 ">
                                        Dirección
                                    </label>
                                    <input type="text" id="direccion"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        required />
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-center items-center p-4 md:p-5 border-t border-gray-50 bg-white rounded-b ">
                            <button type="submit"
                                class="max-w-xs w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Guardar
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div id="edit-empresa-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden  fixed top-0 right-0 left-0 z-[60] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <form class="relative p-4 w-full max-w-2xl   max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded shadow-2xl ">
                        <div>
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                                <h3 class="text-xl font-semibold text-gray-900 ">
                                    Editar empresa
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                    data-modal-hide="edit-empresa-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">

                                <div class="mb-5">
                                    <label for="empresa" class="block mb-2 text-sm font-medium text-gray-900 ">
                                        Empresa
                                    </label>
                                    <input type="text" id="empresa"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="abrev" class="block mb-2 text-sm font-medium text-gray-900 ">
                                        Abreviatura
                                    </label>
                                    <input type="text" id="abrev"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900 ">
                                        Dirección
                                    </label>
                                    <input type="text" id="direccion"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        required />
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-center items-center p-4 md:p-5 border-t border-gray-50 bg-white rounded-b ">
                            <button type="submit"
                                class="max-w-xs w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Guardar
                            </button>
                        </div>
                    </div>
                </form>
            </div>






    </main>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>


</body>


</html>