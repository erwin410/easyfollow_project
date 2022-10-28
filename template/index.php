<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <!-- Google Font Link for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
          crossorigin="anonymous"
    >

    <link rel="stylesheet" href="css/calendar.css">

    <!-- JS only -->
    <script src="./js/script.js" defer></script>
</head>
<body>

    <header>
        <nav class="navbar navbar-dark bg-primary">
            <a href="#" class="navbar-brand p-3">EasyFollow</a>
        </nav>
    </header>


    <main class="body">

        <div class="wrapper">

            <header>
                <p class="current-date"></p>
                <div class="icons">
                    <span id="prev" class="material-symbols-outlined">chevron_left</span>
                    <span id="next" class="material-symbols-outlined">chevron_right</span>        
                </div>               
            </header>
            
            <div class="calendar">
                
                <ul class="weeks">
                    <li>Sun</li>
                    <li>Mon</li>
                    <li>Tue</li>
                    <li>Wed</li>
                    <li>Thu</li>
                    <li>Fri</li>
                    <li>Sat</li>
                </ul>
                
                <ul class="days"></ul>
            </div>
        </div>
    </main>       

</body>
</html>