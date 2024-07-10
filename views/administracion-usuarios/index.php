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


  <main class="ease-soft-in-out xl:ml-[290px] relative h-full max-h-screen rounded-xl transition-all duration-200">
    <!-- Navbar -->
     
    <?php include '../../layout/navbar.php' ?>

    <div class="ml-10 pr-10">
      <div class=" p-6 mt-6 bg-white rounded-2xl w-full ">


      <div class="mb-4 border-b border-gray-200 dark:border-gray-200">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-200 dark:border-blue-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Registrar usuario</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 " id="dashboard-styled-tab" data-tabs-target="#styled-users" type="button" role="tab" aria-controls="users" aria-selected="false">Registro masivo</button>
            </li>
           
        </ul>
       </div>
        <div id="default-styled-tab-content">
            <div class="hidden p-4 rounded-lg  " id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">

              <form class=" w-full gap-2 flex flex-col gap-8 lg:grid lg:grid-cols-2 mx-auto">
                <div>
                  <div class="mb-5">
                    <label for="names" class="block mb-2 text-sm font-medium text-gray-900 ">Nombres(*)</label>
                    <input type="text" required id="names" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Nombres" required />
                  </div>
                  <div class="mb-5">
                    <label for="surname" class="block mb-2 text-sm font-medium text-gray-900 ">Apellidos (*)</label>
                    <input type="text" required id="surname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Sandobal Espinoza" required />
                  </div>
                  <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Correo (*)</label>
                    <input type="email" required id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@example.com" required />
                  </div>

                  <div class="mb-5">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 ">Direccion</label>
                    <input type="text"  id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Av. Las Palmeras 134"  />
                  </div>
                  <div class="mb-5">
                    <label for="job" class="block mb-2 text-sm font-medium text-gray-900 ">Ocupacion</label>
                    <input type="text"  id="job" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Lic. Educación"  />
                  </div>

                  <div class="mb-5">
                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900 ">Empresa</label>
                    <select id="company" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                      <option value="Santiago Consultores">Santiago Consultores</option>
                      <option value="Diario el Nacional">Diario el Nacional</option>

                    </select>
                  </div>
                </div>
                <div>
                <div class="mb-5">
                    <label for="codTransaccion" class="block mb-2 text-sm font-medium text-gray-900 ">Código de transacción (*)</label>
                    <select id="codTransaccion" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                      <option value="160518 - CAJAMARCA">160518 - CAJAMARCA</option>
                      <option value="BECA ">BECA</option>

                    </select>
                  </div>
                  <div class="mb-5">
                    <label for="restriccion" min="0" class="block mb-2 text-sm font-medium text-gray-900 ">Restricción hasta la clase (*)</label>
                    <input type="number" required id="restriccion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
                  </div>
                  <div class="mb-5">
                    <label for="usuario" class="block mb-2 text-sm font-medium text-gray-900 ">Usuario (*)</label>
                    <input type="text" required id="usuario" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="User123" required />
                  </div>

                  <div class="flex items-center mb-4">
                      <input id="enviarMail" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-xl focus:ring-blue-500  focus:ring-2 ">
                      <label for="enviarMail" class="ms-2 text-sm rounded-lg font-medium text-gray-900 ">Enviar mail a usuario</label>
                  </div>

                  <div class="mb-5">
                    <label for="copiarA" class="block mb-2 text-sm font-medium text-gray-900 ">Copiar a (*) </label>
                    <textarea  required rows="5" id="copiarA" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Ingrese correos separados por coma" required ></textarea>
                  </div>

                  <div class="   flex justify-center">
                    <button type="submit" 
                    class="text-white max-w-md bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full  px-5 py-2.5 text-center ">
                    Guardar
                    </button>
                  </div>
              
                
                </div>          
              </form>




          </div>
            <div class="hidden p-4 rounded-lg  " id="styled-users" role="tabpanel" aria-labelledby="dashboard-tab">
              <div class="flex flex-col gap-6 lg:grid lg:grid-cols-2 gap-8">
                <div class="bg-gray-50  p-4 rounded-2xl">

                    <div class="flex gap-2 items-center justify-end flex-wrap">
                    <button class="bg-blue-500 hover:bg-blue-600 transition duration-300  text-sm rounded-xl font-semibold py-2 px-4 flex justify-center gap-2 items-center text-white">
                    Descargar plantilla

                    <svg class=" w-5 h-5" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"   xmlns="http://www.w3.org/2000/svg"><path d="M4 4m0 1a1 1 0 0 1 1 -1h14a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1z"></path><path d="M4 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path><path d="M14 12l6 0"></path><path d="M14 16l6 0"></path><path d="M14 20l6 0"></path></svg>
                  </button>
                  <button class="bg-blue-500 hover:bg-blue-600 transition duration-300  text-sm rounded-xl font-semibold py-2 px-4 flex justify-center gap-2 items-center text-white">
                    Descargar empresas

                    <svg class="w-5 h-5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"><path d="M19 2H9c-1.103 0-2 .897-2 2v6H5c-1.103 0-2 .897-2 2v9a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4c0-1.103-.897-2-2-2zM5 12h6v8H5v-8zm14 8h-6v-8c0-1.103-.897-2-2-2H9V4h10v16z"></path><path d="M11 6h2v2h-2zm4 0h2v2h-2zm0 4.031h2V12h-2zM15 14h2v2h-2zm-8 .001h2v2H7z"></path></svg>
                  </button>
                  </div>
                  

                  <div class="p-4 mt-4">
                    <p class=" text-black text-sm font-light">Considerar ingresar "-" como valor de celda, si no hay data en alguno de los campos.
                    </p>
                    <p class=" mt-2 text-black text-sm font-light">Descargar la lista de empresas para identificar el código(s) de empresa a usar dentro de la plantilla.

                    </p>
                  </div>

                  <div class="mt-5">
                  <label class="block mb-2 text-sm font-medium text-gray-600" for="file_input">Archivo de carga</label>
                  <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none " aria-describedby="file_input_help" id="file_input" type="file">
                  </div>

                </div>
                </div>
                


            

          </div>
        
        </div>
        
        
    </div>

  </main>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>


</body>


</html>