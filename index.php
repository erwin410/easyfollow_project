<?php
include('connexions.php');
// var_dump($db);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="info.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>



</head>

<body>
    <h1>application</h1>
    <div class="time-container"></div>
    <a href="login.php">login</a>
    <a href="requete.php">requete</a>
    <input type="button" onclick="api()">infos</input>
    <a href="api.php">api</a>
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
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4 "></td>
                            <td class="w-1/3 text-left py-3 px-4">Smith</td>
                            <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                            <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div id="nb_heure"></div>

</body>
<script>
    function nb_heure() {
        var url = "http://localhost/easyfollow/requete.php";
        fetch(url)

            .then((res) => res.json())
            .then((out) => {
                console.table(out);
                const text = JSON.stringify(out);
                const obj = JSON.parse(text);
                console.log(obj[0].requete);

                document.getElementById("nb_heure").innerHTML = obj[0].requete;

            }); }
        nb_heure()
</script>

</html>