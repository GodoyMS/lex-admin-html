<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>Administración lecturas</title>
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

                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 mb-4">
                    <div class="w-full md:w-1/2 ">
                        <form class="flex">

                            <select id="clase"
                                class="bg-gray-50 border max-w-[120px] border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option selected>Clase</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <select id="lectura"
                                class="bg-gray-50 border max-w-[160px] border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option selected>Tipo de lectura</option>
                                <option value="COMP">COMP</option>
                                <option value="EBL">EBL</option>
                                <option value="EBV">EBV</option>
                            </select>

                            <div class="relative max-w-xs w-full">
                                <input type="search" id="search-dropdown"
                                    class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg rounded-s-gray-100 rounded-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                    placeholder="Nombre de la lectura" required />
                                <button type="submit"
                                    class="absolute top-0 end-0 p-2.5 h-full text-sm font-medium text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 "><svg
                                        class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg></button>
                            </div>
                        </form>
                    </div>
                    <div class="flex flex-col justify-center w-full md:w-auto">
                        <button data-modal-target="nueva-lectura-modal" data-modal-toggle="nueva-lectura-modal"
                            type="button"
                            class="text-white w-full  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Nueva
                            lectura</button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                            <tr>
                                <th scope="col" class="px-4 py-3 whitespace-nowrap">Clase</th>
                                <th scope="col" class="px-4 py-3 whitespace-nowrap">Título</th>
                                <th scope="col" class="px-4 py-3 whitespace-nowrap">Tipo de lectura</th>
                                <th scope="col" class="px-4 py-3 whitespace-nowrap">Tipo de contenido </th>
                                <th scope="col" class="px-4 py-3 whitespace-nowrap">Cantidad de lineas </th>
                                <th scope="col" class="px-4 py-3 whitespace-nowrap">Tiempo exposicion por pregunta (seg)
                                </th>
                                <th scope="col" class="px-4 py-3 whitespace-nowrap">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b odd:bg-gray-50 even:bg-white">
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">
                                    Clase 0
                                </th>
                                <td class="px-4 py-3">Prisioneros en un mundo feliz</td>
                                <td class="px-4 py-3">LI </td>
                                <td class="px-4 py-3">Lectura</td>
                                <td class="px-4 py-3">65</td>
                                <td class="px-4 py-3">0</td>


                                <td class="px-4 py-3 flex items-center gap-2 justify-start">



                                    <div id="tooltip-agregar-contenido" role="tooltip"
                                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                                        Agregar contenido
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>

                                    <button data-tooltip-style="light" data-tooltip-target="tooltip-agregar-contenido"
                                        data-modal-target="contenido-lectura-modal"
                                        data-modal-toggle="contenido-lectura-modal"
                                        class=" bg-blue-50 whitespace-nowrap  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-green-600 hover:bg-green-100 hover:text-green-700 transition duration-300  focus:outline-none  "
                                        type="button">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 512 512" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M464 64H192c-8.8 0-16 7.7-16 16.5V112H74c-23.1 0-42 18.9-42 42v207.5c0 47.6 39 86.5 86 86.5h279.7c45.1 0 82.3-36.9 82.3-82V80c0-8.8-7.2-16-16-16zm-288 80v192h-42V163.2c0-6.8-.8-13.3-3.3-19.2H176zm-17 255.4C148 410 133.2 416 118.5 416c-14.5 0-28.1-5.7-38.5-16-10.3-10.3-16-24-16-38.5V163.2c0-10.6 8.4-19.2 19-19.2s19 8.6 19 19.2V352c0 8.8 7.2 16 16 16h57.5c-1.5 11.6-7.2 22.6-16.5 31.4zM448 366c0 13.3-5.4 25.8-14.9 35.3-9.5 9.5-22.2 14.7-35.4 14.7H187.3c12.8-14.9 20.7-33.9 20.7-54.5V97h240v269z">
                                            </path>
                                            <path
                                                d="M248 136h160v56H248zM248 224h160v32H248zM248 288h160v32H248zM408 352H248s0 32-8 32h148.7c19.3 0 19.3-21 19.3-32z">
                                            </path>
                                        </svg>
                                    </button>


                                    <div id="tooltip-editar-lectura" role="tooltip"
                                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                                        Editar lectura

                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                    <button data-tooltip-style="light" data-tooltip-target="tooltip-editar-lectura"
                                        data-modal-target="edit-lectura-modal" data-modal-toggle="edit-lectura-modal"
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



                                    <div id="tooltip-agregar-preguntas" role="tooltip"
                                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                                        Agregar preguntas
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                    <button data-tooltip-style="light" data-tooltip-target="tooltip-agregar-preguntas"
                                        data-modal-target="agregar-preguntas-modal"
                                        data-modal-toggle="agregar-preguntas-modal"
                                        class=" bg-blue-50   whitespace-nowrap gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-violet-600 hover:bg-violet-100 hover:text-violet-700 transition duration-300  focus:outline-none  "
                                        type="button">

                                        <svg class=" w-5 h-5" stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z">
                                            </path>
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


            <!-- Agregar preguntas -->


            <div id="agregar-preguntas-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <form class="relative p-4 w-full max-w-4xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow ">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                            <h3 class="text-xl font-semibold text-gray-900 ">
                                Agregar preguntas
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="agregar-preguntas-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <div class="flex justify-end mb-4">
                                <button type="button"
                                    class="text-white max-w-xs  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Agregar
                                    pregunta

                                </button>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500 ">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                                        <tr>
                                            <th scope="col" class="px-4 py-3 whitespace-nowrap">Nùmero</th>
                                            <th scope="col" class="px-4 py-3 whitespace-nowrap">Pregunta</th>
                                            <th scope="col" class="px-4 py-3 whitespace-nowrap">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b odd:bg-gray-50 even:bg-white">
                                            <th scope="row"
                                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">
                                                Clase 0
                                            </th>
                                            <td class="px-4 py-3">LI </td>
                                            <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                                <div id="tooltip-respuestas" role="tooltip"
                                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                                                    Ir a respuestas
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                                <button data-tooltip-style="light"
                                                    data-tooltip-target="tooltip-respuestas"
                                                    data-modal-target="respuestas-modal"
                                                    data-modal-toggle="respuestas-modal"
                                                    class=" bg-blue-50   whitespace-nowrap gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                                    type="button">

                                                    <svg class=" w-5 h-5" stroke="currentColor" fill="currentColor"
                                                        stroke-width="0" viewBox="0 0 512 512"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <div id="tooltip-eliminar-pregunta" role="tooltip"
                                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                                                    Eliminar pregunta
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                                <button data-tooltip-style="light"
                                                    data-tooltip-target="tooltip-eliminar-pregunta"
                                                    class=" bg-red-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-red-600 hover:bg-red-100 hover:text-red-700 transition duration-300 focus:outline-none  "
                                                    type="button">
                                                    <svg stroke="currentColor" fill="none" stroke-width="2"
                                                        viewBox="0 0 24 24" stroke-linecap="round"
                                                        stroke-linejoin="round" class="w-5 h-5"
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
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                </form>
            </div>

            <div id="respuestas-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden  fixed top-0 right-0 left-0 z-[60] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <form class="relative p-4 w-full max-w-2xl   max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded shadow-2xl ">
                        <div>
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                                <h3 class="text-xl font-semibold text-gray-900 ">
                                    Registro de preguntas
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                    data-modal-hide="respuestas-modal">
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



                                <div class="flex justify-between gap-4 mb-6">
                                    <div class=" flex-1">
                                        <p class="font-semibold text-gray-800 text-lg">
                                            1. Según el texto, la novela 1984 trata sobre

                                        </p>

                                    </div>
                                    <button type="button"
                                        class="text-white max-w-xs  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Agregar
                                        respuesta

                                    </button>
                                </div>

                                <div class="overflow-x-auto">
                                    <table class="w-full text-sm text-left text-gray-500 ">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                                            <tr>
                                                <th scope="col" class="px-4 py-3 whitespace-nowrap">Nùmero</th>
                                                <th scope="col" class="px-4 py-3 whitespace-nowrap">Respuesta</th>
                                                <th scope="col" class="px-4 py-3 whitespace-nowrap">Correcto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b odd:bg-gray-50 even:bg-white">
                                                <th scope="row"
                                                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">
                                                    <input min="0" type="number" id="numero1"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                                        required />
                                                </th>
                                                <td class="px-4 py-3"> <input min="0" type="text" id="respuesta1"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                                        required />
                                                 </td>
                                                <td class="px-4 py-3 flex ">

                                                    <input id="correcto-1" type="radio" value=""
                                                        name="correcto"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">

                                                </td>
                                            </tr>
                                            <tr class="border-b odd:bg-gray-50 even:bg-white">
                                                <th scope="row"
                                                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">
                                                    <input min="0" type="number" id="numero2"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                                        required />
                                                </th>
                                                <td class="px-4 py-3"> <input min="0" type="text" id="respuesta2"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                                        required />
                                                    
                                                 </td>
                                                <td class="px-4 py-3 flex ">

                                                    <input id="correcto-2" type="radio" value=""
                                                        name="correcto"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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

            <!-- Fin agregar preguntas -->



            <div id="contenido-lectura-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <form class="relative p-4 w-full max-w-4xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow ">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                            <h3 class="text-xl font-semibold text-gray-900 ">
                                Contenido de lectura
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="contenido-lectura-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <div class="flex justify-end mb-4">
                                <button data-modal-target="nuevo-parrafo-modal" data-modal-toggle="nuevo-parrafo-modal"
                                    type="button"
                                    class="text-white max-w-xs  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Nuevo
                                    párrafo
                                </button>

                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500 ">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                                        <tr>
                                            <th scope="col" class="px-4 py-3 whitespace-nowrap">N° Párrafo</th>
                                            <th scope="col" class="px-4 py-3 whitespace-nowrap">Contenido</th>
                                            <th scope="col" class="px-4 py-3 whitespace-nowrap">Palabras</th>
                                            <th scope="col" class="px-4 py-3 whitespace-nowrap">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b odd:bg-gray-50 even:bg-white">
                                            <th scope="row"
                                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">
                                                Clase 0
                                            </th>
                                            <td class="px-4 py-3">Prisioneros en un mundo feliz</td>
                                            <td class="px-4 py-3">LI </td>
                                            <td class="px-4 py-3 flex items-center gap-2 justify-start">
                                                <div id="tooltip-editar-parrafo" role="tooltip"
                                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                                                    Editar párrafo
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                                <button data-tooltip-style="light"
                                                    data-tooltip-target="tooltip-editar-parrafo"
                                                    data-modal-target="edit-parrafo-modal"
                                                    data-modal-toggle="edit-parrafo-modal"
                                                    class=" bg-blue-50   whitespace-nowrap gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-blue-600 hover:bg-blue-100 hover:text-blue-700 transition duration-300ç  focus:outline-none  "
                                                    type="button">

                                                    <svg class=" h-5 w-5 " stroke="currentColor" fill="currentColor"
                                                        stroke-width="0" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g id="Edit">
                                                            <g>
                                                                <path
                                                                    d="M3.548,20.938h16.9a.5.5,0,0,0,0-1H3.548a.5.5,0,0,0,0,1Z">
                                                                </path>
                                                                <path
                                                                    d="M9.71,17.18a2.587,2.587,0,0,0,1.12-.65l9.54-9.54a1.75,1.75,0,0,0,0-2.47l-.94-.93a1.788,1.788,0,0,0-2.47,0L7.42,13.12a2.473,2.473,0,0,0-.64,1.12L6.04,17a.737.737,0,0,0,.19.72.767.767,0,0,0,.53.22Zm.41-1.36a1.468,1.468,0,0,1-.67.39l-.97.26-1-1,.26-.97a1.521,1.521,0,0,1,.39-.67l.38-.37,1.99,1.99Zm1.09-1.08L9.22,12.75l6.73-6.73,1.99,1.99Zm8.45-8.45L18.65,7.3,16.66,5.31l1.01-1.02a.748.748,0,0,1,1.06,0l.93.94A.754.754,0,0,1,19.66,6.29Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </button>
                                                <div id="tooltip-eliminar-parrafo" role="tooltip"
                                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                                                    Eliminar párrafo
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                                <button data-tooltip-style="light"
                                                    data-tooltip-target="tooltip-eliminar-parrafo"
                                                    class=" bg-red-50  gap-2 border  rounded-md px-2 py-1 inline-flex items-center text-sm font-medium text-center text-red-600 hover:bg-red-100 hover:text-red-700 transition duration-300 focus:outline-none  "
                                                    type="button">
                                                    <svg stroke="currentColor" fill="none" stroke-width="2"
                                                        viewBox="0 0 24 24" stroke-linecap="round"
                                                        stroke-linejoin="round" class="w-5 h-5"
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
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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

                </form>
            </div>

            <div id="edit-parrafo-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden  fixed top-0 right-0 left-0 z-[60] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <form class="relative p-4 w-full max-w-2xl   max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded shadow-2xl ">
                        <div>
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                                <h3 class="text-xl font-semibold text-gray-900 ">
                                    Editar párrafo
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                    data-modal-hide="edit-parrafo-modal">
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
                                <div class="flex flex-col md:gap-6 gap-0 md:grid md:grid-cols-2">
                                    <div class="mb-5">
                                        <label for="numPaginaEditParrafo"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">
                                            N° Página
                                        </label>
                                        <input min="0" type="number" id="numPaginaEditParrafo"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                            required />
                                    </div>
                                    <div class="mb-5">
                                        <label for="numParrafoEditParrafo"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">
                                            N° Párrafo
                                        </label>
                                        <input min="0" type="number" id="numParrafoEditParrafo"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                            required />
                                    </div>

                                    <div class="mb-5">
                                        <label for="numPalabrasEditParrafo"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">
                                            N° Palabras
                                        </label>
                                        <input min="0" type="number" id="numPalabrasEditParrafo"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                            required />
                                    </div>
                                    <div class="mb-5">
                                        <label for="numLineasPaginaEditParrafo"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">
                                            N° Lineas por página
                                        </label>
                                        <input min="0" type="number" id="numLineasPaginaEditParrafo"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                            required />
                                    </div>

                                    <div class=" col-span-2 mb-5 ">
                                        <label for="textoEditParrafo"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">
                                            Texto
                                        </label>
                                        <textarea id="textoEditParrafo" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                            placeholder="Párrafo"></textarea>


                                    </div>
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


            <div id="nuevo-parrafo-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden  fixed top-0 right-0 left-0 z-[60] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <form class="relative p-4 w-full max-w-2xl   max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded shadow-2xl ">
                        <div>
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                                <h3 class="text-xl font-semibold text-gray-900 ">
                                    Nuevo párrafo
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                    data-modal-hide="nuevo-parrafo-modal">
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

                                <div class="flex flex-col md:gap-6 gap-0 md:grid md:grid-cols-2">
                                    <div class="mb-5">
                                        <label for="numPaginaNuevoParrafo"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">
                                            N° Página
                                        </label>
                                        <input min="0" type="number" id="numPaginaNuevoParrafo"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                            required />
                                    </div>
                                    <div class="mb-5">
                                        <label for="numParrafoNuevoParrafo"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">
                                            N° Párrafo
                                        </label>
                                        <input min="0" type="number" id="numParrafoNuevoParrafo"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                            required />
                                    </div>

                                    <div class="mb-5">
                                        <label for="numPalabrasNuevoParrafo"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">
                                            N° Palabras
                                        </label>
                                        <input min="0" type="number" id="numPalabrasNuevoParrafo"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                            required />
                                    </div>
                                    <div class="mb-5">
                                        <label for="numLineasPaginaNuevoParrafo"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">
                                            N° Lineas por página
                                        </label>
                                        <input min="0" type="number" id="numLineasPaginaNuevoParrafo"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                            required />
                                    </div>

                                    <div class=" col-span-2 mb-5 ">
                                        <label for="textoNuevoParrafo"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">
                                            Texto
                                        </label>
                                        <textarea id="textoNuevoParrafo" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                            placeholder="Nuevo párrafo"></textarea>


                                    </div>
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


            <div id="edit-lectura-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <form class="relative p-4 w-full max-w-3xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-t-lg shadow ">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                            <h3 class="text-xl font-semibold text-gray-900 ">
                                Editar lectura
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="edit-lectura-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">

                            <div class="mb-5">
                                <label for="titulo" min="0"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Título</label>
                                <input type="text" id="titulo"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                    required />
                            </div>

                            <div class="mb-5">
                                <label for="sesion" class="block mb-2 text-sm font-medium text-gray-900">Sesión</label>
                                <select id="sesion"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option value="0">Clase 0</option>
                                    <option value="1">Sesion 01</option>
                                    <option value="2">Sesion 02</option>
                                    <option value="3">Sesion 03</option>
                                </select>
                            </div>

                            <div class="flex flex-col md:gap-6 gap-0 md:grid md:grid-cols-2">
                                <div class="mb-5">
                                    <label for="tipolectura" min="0"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Tipo lectura
                                    </label>
                                    <input type="text" id="tipolectura"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="tipocontenido" class="block mb-2 text-sm font-medium text-gray-900">Tipo
                                        de contenido</label>
                                    <select id="tipocontenido"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                        <option value="Lectura">Lectura</option>
                                        <option value="Visual">Visual</option>
                                        <option value="Puntaje">Puntaje</option>
                                        <option value="Relajación">Relajación</option>
                                    </select>
                                </div>

                            </div>

                            <div class="flex flex-col md:gap-6 gap-0 md:grid md:grid-cols-2">
                                <div class="mb-5">
                                    <label for="numLineas" min="0"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Nùmero de lineas
                                    </label>
                                    <input type="number" id="numLineas"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="tiempoExposcionLectura"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tiempo exposicion por pregunta (s)
                                        </label>
                                    <input type="number" id="tiempoExposcionLectura"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        required />
                                </div>

                            </div>


                        </div>
                    </div>
                    <div
                        class="flex justify-center items-center p-4 md:p-5 border-t border-gray-50 bg-white rounded-b ">
                        <button type="submit"
                            class="max-w-xs w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Guardar
                        </button>

                    </div>
                </form>
            </div>

            <div id="nueva-lectura-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <form class="relative p-4 w-full max-w-3xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-t-lg shadow ">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                            <h3 class="text-xl font-semibold text-gray-900 ">
                                Nueva lectura
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="nueva-lectura-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">

                            <div class="mb-5">
                                <label for="titulo" min="0"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Título</label>
                                <input type="text" id="titulo"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                    required />
                            </div>

                            <div class="mb-5">
                                <label for="sesion" class="block mb-2 text-sm font-medium text-gray-900">Sesión</label>
                                <select id="sesion"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option value="0">Clase 0</option>
                                    <option value="1">Sesion 01</option>
                                    <option value="2">Sesion 02</option>
                                    <option value="3">Sesion 03</option>
                                </select>
                            </div>

                            <div class="flex flex-col md:gap-6 gap-0 md:grid md:grid-cols-2">
                                <div class="mb-5">
                                    <label for="tipolectura" min="0"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Tipo lectura
                                    </label>
                                    <input type="text" id="tipolectura"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="tipocontenido" class="block mb-2 text-sm font-medium text-gray-900">Tipo
                                        de contenido</label>
                                    <select id="tipocontenido"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                        <option value="Lectura">Lectura</option>
                                        <option value="Visual">Visual</option>
                                        <option value="Puntaje">Puntaje</option>
                                        <option value="Relajación">Relajación</option>
                                    </select>
                                </div>

                            </div>

                            <div class="flex flex-col md:gap-6 gap-0 md:grid md:grid-cols-2">
                                <div class="mb-5">
                                    <label for="lineas-exposicion" min="0"
                                        class="block mb-2 text-sm font-medium text-gray-900 ">Lineas de exposición
                                    </label>
                                    <input type="number" id="lineas-exposicion"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="tiempo-exposicion"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tiempo exposición por
                                        pregunta
                                        (seg)</label>
                                    <input type="number" id="tiempo-exposicion"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                        required />
                                </div>

                            </div>


                        </div>
                    </div>
                    <div
                        class="flex justify-center items-center p-4 md:p-5 border-t border-gray-50 bg-white rounded-b ">
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