<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
  <title>Index</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

  <!-- Popper -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://cdn.tailwindcss.com"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  </head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-[#f8f6fa] text-slate-500">
 
  <?php include '../layout/sidebar.php' ?>


  <main class="ease-soft-in-out xl:ml-[290px] relative h-full max-h-screen rounded-xl transition-all duration-200">
    <!-- Navbar -->
     
    <?php include '../layout/navbar.php' ?>

    <div class="ml-10 pr-10">
      <div class=" flex flex-col md:grid grid-cols-3 gap-8">
        <div class=" w-full p-6 bg-white  rounded-2xl  ">
          <div>
            <h3 class="mb-4 text-xl font-semibold tracking-tight text-blue-700 ">Usuarios con licencia</h3>
          </div>
          <div class="w-full flex gap-4">
            <div class="flex flex-col justify-center">
              <div class=" rounded-full bg-blue-500 bg-opacity-10 p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class=" text-blue-700 w-8 h-8" viewBox="0 0 24 24">
                  <g fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87m-3-12a4 4 0 0 1 0 7.75" />
                  </g>
                </svg>
              </div>
            </div>
            <div class=" flex flex-col w-full justify-center">
              <div class="gap-2">
                <p class=" font-black text-blue-700 text-5xl"> 139</p>
              </div>
            </div>
          </div>

          <p class=" mt-2 text-gray-600">
            Licencias por vencer en los próximos 10 días: (0)
          </p>   
        </div>
        <div class=" w-full p-6 bg-white  rounded-2xl  ">
          <div>
            <h3 class="mb-4 text-xl font-semibold tracking-tight text-green-700 ">Ventas realizadas</h3>
          </div>
          <div class="w-full flex gap-4">
            <div class="flex flex-col justify-center">
              <div class=" rounded-full bg-green-500 bg-opacity-10 p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class=" text-green-700 w-8 h-8" viewBox="0 0 24 24">
                  <g fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87m-3-12a4 4 0 0 1 0 7.75" />
                  </g>
                </svg>
              </div>
            </div>
            <div class=" flex flex-col w-full justify-center">
              <div class="gap-2">
                <p class=" font-black text-green-700 text-5xl"> 52</p>
              </div>
            </div>
          </div>

          <a href="#" class="  text-gray-600 hover:underline">
            <p class="mt-2">
              Mostrar lista de usuarios activos
            </p>
          </a>          
        </div>

        <div class=" w-full p-6 bg-white  rounded-2xl  ">
          <div>
            <h3 class="mb-4 text-xl font-semibold tracking-tight text-orange-700 ">Terminaron la clase</h3>
          </div>
          <div class="w-full flex gap-4">
            <div class="flex flex-col justify-center">
              <div class=" rounded-full bg-orange-500 bg-opacity-10 p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class=" text-orange-700 w-8 h-8" viewBox="0 0 24 24">
                  <g fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87m-3-12a4 4 0 0 1 0 7.75" />
                  </g>
                </svg>
              </div>
            </div>
            <div class=" flex flex-col w-full justify-center">
              <div class="gap-2">
                <p class=" font-black text-orange-700 text-5xl"> 52</p>
              </div>
            </div>
          </div>

          <a href="#" class="  text-gray-600 hover:underline">
            <p class="mt-2">
              Mostrar lista de usuarios
            </p>
          </a>          
        </div>        
      </div>

      <div class=" p-6 mt-6 bg-white rounded-2xl w-full ">
        <div class="mb-4">
          <h2 class="font-black text-black text-2xl text-center">COMPARATIVO DE VENTAS</h2>
</div>

        <canvas class="w-full max-h-[400px]" id="graficoVentas"></canvas>

        </div>
    </div>

  </main>


  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

<script>
    let myChart = null;
    const ctx = document.getElementById('graficoVentas').getContext('2d');
    myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Ene', 'Feb', 'Mar','Abr' ,'May', 'Jun', 'Jul', 'Ago', 'Sept', 'Oct', 'Nov', 'Dic'],
            datasets: [{
                label: 'MGP ',
                // data: response.data[0].dataPoints.map((e) => e.y),
                data: [15, 22, 15, 53, 85,21,94,8,120,82,12,48],
                borderColor: 'rgb(51, 153, 255)',
                backgroundColor: 'rgba(51, 153, 255, 0.1)',
                fill: true,
                tension: 0.1
            },
            {
                label: 'OTR',
                data: [5, 78, 45, 13, 65,91,194,81,120,86,18,26],
                borderColor: 'rgb(249, 115, 22)',
                backgroundColor: 'rgba(249, 115, 22, 0.1)',
                fill: true,
                tension: 0.1
            },
          
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