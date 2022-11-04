<?php
include('connexions.php');
// var_dump($db);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.11/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.11/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.11/dist/js/uikit-icons.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="info.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>



</head>

<body>
<?php
    // Initialiser la session
    session_start();
    // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
    if (!isset($_SESSION["email"])) {
        header("Location: login.php");
        exit();
    }
    ?>
<div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>
                                <a href="calendrier.html" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
                                <a class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" href="#modal-sections" uk-toggle>mes informations</a>
                            </div>
                        </div>
                        <div>
                            <a href="logout.php"><input type="button" class="block uppercase mx-auto shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded" value="Logout"></a>

                        </div>
                    </div>
                    
                 
</div>
</div>

<!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>
                    <a href="calendrier.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
                    

                </div>
                <div class="border-t border-gray-700 pt-4 pb-3">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                            <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                        </div>
                        <button type="button" class="ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-3 space-y-1 px-2">
                        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>

                        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>

                        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
                    </div>
                </div>
            </div>
        </nav>
        <div id="modal-sections" uk-modal>
                <div class="uk-modal-dialog">
                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <div class="uk-modal-header">
                        <h2 class="uk-modal-title">Mes information</h2>
                    </div>
                    <div class="uk-modal-body">
                        <div>mon pseudo :<span id="u"></span> </div>
                        <div>email : <span id="o"></span> </div>

                    </div>
                    <div class="uk-modal-footer uk-text-right">
                        <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>

                    </div>
                </div>
            </div>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
            </div>

        </header>

        <main>


            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <div class="md:px-32 py-8 w-full">
                    <div class="shadow overflow-hidden rounded border-b border-gray-200">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nom</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">nombre d'heure</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">travail</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">gain</td>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                </tbody>
                            </table>
                            <div id="name" class="time-container"></div>
                            
                        </div>
                    </div>

                    <div class="flex justify-between p-5 m-5 bg-gray-100 rounded-lg ">
                        
                        
                        
                        <p>gain totale : <span id="nb_gain"></span> euros </p>
                        <p> heure de travail total : <span id="nb_heure"></span> heure</p>
                        
                    </div>

                

                <div class="flex justify-between">
                    <a href="api.php">donnée json</a>
                    <a href="requete.php"> nbheure json </a>
                    <a href="gain.php"> gain json</a>
                    <a href="info.php">info</a>
                 
                </div>



            </div>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <div class="md:px-32 py-8 w-full">
                    <div class="shadow overflow-hidden rounded border-b border-gray-200">
                        <div class="shadow-lg rounded-lg overflow-hidden">
                            <div class="py-3 px-5 bg-gray-50">heure de travail mensuel</div>
                                <canvas class="p-10" id="chartBar"></canvas>
                            </div>
                        </div>
                        <div class="shadow overflow-hidden rounded border-b border-gray-200 m-5">
                        <div class="shadow-lg rounded-lg overflow-hidden">
                            <div class="py-3 px-5 bg-gray-50">gain mensuel</div>
                                <canvas class="p-10" id="gainBar"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Required chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js" >
                </script>

                <!-- Chart bar -->
                <script>
                    const labelsBarChart = [
                        "January",
                        "February",
                        "March",
                        "April",
                        "May",
                        "June",
                    ];
                    const dataBarChart = {
                        labels: labelsBarChart,
                        datasets: [{
                            label: "heure de travail par mois",
                            backgroundColor: "hsl(252, 82.9%, 67.8%)",
                            borderColor: "hsl(252, 82.9%, 67.8%)",
                            data: [0, 10, 5, 2, 20, 30, 45],
                        }, ],
                    };

                    const configBarChart = {
                        type: "bar",
                        data: dataBarChart,
                        options: {},
                    };

                    var chartBar = new Chart(
                        document.getElementById("chartBar"),
                        configBarChart
                    );
                    // script gain 

                    const BarChart = [
                        "January",
                        "February",
                        "March",
                        "April",
                        "May",
                        "June",
                    ];
                    const dataBarCharte = {
                        labels: BarChart,
                        datasets: [{
                            label: "gain totaux par mois",
                            backgroundColor: "hsl(252, 82.9%, 67.8%)",
                            borderColor: "hsl(252, 82.9%, 67.8%)",
                            data: [12, 12, 0, 11, 0, 0, 12],
                        }, ],
                    };

                    const configBarCharte = {
                        type: "bar",
                        data: dataBarCharte,
                        options: {},
                    };

                    var chartBar = new Chart(
                        document.getElementById("gainBar"),
                        configBarCharte
                    );
                </script>
        </main>
    </div>



</body>
<script src="info.js">

</script>
<script>
    function nbheure() {
  var url = "http://localhost/easyfollow/requete.php";
  fetch(url)
  
    .then((res) => res.json())
    .then((out) => {
      console.table(out);
      const text = JSON.stringify(out);
      const obj = JSON.parse(text);
       console.log(obj[0].requete);
 
      document.getElementById("nb_heure").innerHTML = obj[0].requete;
    });
}
function nbgain() {
  var url = "http://localhost/easyfollow/gain.php";
  fetch(url)
  
    .then((res) => res.json())
    .then((out) => {
      console.table(out);
      const text = JSON.stringify(out);
      const obj = JSON.parse(text);
       console.log(obj[0].gain);
 
      document.getElementById("nb_gain").innerHTML = obj[0].gain;
    });
}

function buttonClickGET() {
        var url = "http://localhost/easyfollow/api.php";
      
        fetch(url)
          .then((res) => res.json())
          .then((out) => {
      
            console.table(out);
      
            const text = JSON.stringify(out);
            const obj = JSON.parse(text);
      
            console.table(obj);
      
            let textFromJSON = obj;
            textFromJSON.forEach(mafonction);
      
          })
      }
      
        function mafonction(data) {
          let container2 = document.createElement("tr");
          let newP2 = document.createElement("td");
          let newP3 = document.createElement("td");
          let newP4 = document.createElement("td");
          let newP5 = document.createElement("td");
          let newContent2 = document.createTextNode(data.nom);
          let newContent3 = document.createTextNode(data.nb_heure);
          let newContent4 = document.createTextNode(data.name);
          let newContent5 = document.createTextNode(data.gain);
          newP2.className = "w-1/3 text-left py-3 px-4";
          newP3.className = "w-1/3 text-left py-3 px-4";
          newP4.className = "w-1/3 text-left py-3 px-4";
          newP5.className = "w-1/3 text-left py-3 px-4";
          newP2.appendChild(newContent2);
          newP3.appendChild(newContent3);
          newP4.appendChild(newContent4);
          newP5.appendChild(newContent5);
          container2.appendChild(newP2);
          container2.appendChild(newP3);
          container2.appendChild(newP4);
          container2.appendChild(newP5);
          document.getElementsByClassName("time-container")[0].appendChild(container2);
      
      }
      function infos() {
        var url = "http://localhost/easyfollow/info.php";
        fetch(url)

            .then((res) => res.json())
            .then((out) => {
                console.table(out);
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                console.log(obj[0].nom);
                console.log(obj[0].email);

                document.getElementById("u").innerHTML = obj[0].nom;
                document.getElementById("o").innerHTML = obj[0].email;
            });
    }
    buttonClickGET();
    nbheure();
    nbgain();
    infos();
</script>
</html>
    