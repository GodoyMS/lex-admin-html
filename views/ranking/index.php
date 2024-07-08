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
 
  <?php include '../../layout/sidebar.php' ?>


  <main class="ease-soft-in-out xl:ml-[290px] relative h-full max-h-screen rounded-xl transition-all duration-200">
    <!-- Navbar -->
     
    <?php include '../../layout/navbar.php' ?>

    <div class="ml-10 pr-10">
  

      <div class=" p-6 mt-6 bg-white rounded-2xl w-full ">
        <div class="flex justify-end gap-4 items-center">

        <div>
             <label for="top" class="block mb-2 text-sm font-medium text-gray-900 ">Top</label>
             <select id="top" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
              </select>
            </div>
            <div>
             <label for="transac" class="block mb-2 text-sm font-medium text-gray-900 ">Empresa</label>
             <select id="transac" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                <option value="Todos">Todos</option>
                <option value="10">Cajamarca</option>
                <option value="Beca">Beca</option>
                <option value="COEM">COEM</option>

              </select>
            </div>
            <div>
             <label for="transac" class="block mb-2 text-sm font-medium text-gray-900 ">Tipo</label>
             <select id="transac" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                <option value="Todos">Velocidad final</option>
                <option value="10">Velocidad inicial</option>
        

              </select>
            </div>
        </div>
        <div class="mb-4 mt-2 lg:mt-1">

          <h2 class="font-black text-black text-2xl text-center">RANKING DE VIP</h2>
          <h2 class="font-bold text-blue-800 text-black text-xl text-center">Velocidad inicial</h2>
            </div>

        <canvas class="w-full h-full max-h-[400px] md:max-h-[450px] xl:max-h-[500px] 2xl:max-h-[600px]" id="graficoVentas"></canvas>

        </div>
    </div>

  </main>


  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

<script>
    let myChart = null;
    const ctx = document.getElementById('graficoVentas').getContext('2d');
    myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Daniel', 'Jose Alberto', 'Rafael','Pedro' ,'Usuario1', 'Xiomara', 'Fi123', 'Eduardo', 'Roberto', 'Ruben',],
            datasets: [{
                axis: 'y',
                label: 'VIP',
                data: [360, 320,310,294,258,249,222,210,190,176],
                fill: false,
                backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(255, 159, 64, 0.5)',
                'rgba(255, 205, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(201, 203, 207, 0.5)',
                'rgba(12, 160, 71, 0.5)',
                'rgba(160, 31, 12, 0.5)',

                ],
                borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
                'rgb(12, 160, 71)',
                'rgb(160, 31, 12)',

                ],
                borderWidth: 1
  }]
        },
        options: {
                indexAxis: 'y',
                responsive: true,
                plugins: {
                    legend: {
                        display: false  // Hide the legend labels
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