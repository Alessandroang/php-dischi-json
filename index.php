<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Font-awesome 6.4.2 -->
     <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Custom style -->
    <link rel="stylesheet" href="./style.css" />
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Vue 3 app - Options API -->
    <script src="./data/main.js" type="text/javascript" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Php Dischi-Json</title>
</head>
<body>
<header class="navbar navbar-dark bg-dark fixed-top justify-content-around">
        <a class="navbar-brand" href="#">
          
            <img src="./data/spotify-logo-png-10069.png" alt="Logo" >
        </a>
        <div class="navbar-text text-center">
          <h1>Spotifly</h1>
        </div>

    </header>

    <div id="app" class="container">
        <div class="row">
            <div v-for="(disco, index) in dischi" :key="index" class="col-md-4 mt-3">
                <div class="card album-container">
                    <div class="card-container">
                        <img :src="disco.poster" class="card-img-top" alt="disco.poster">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{disco.title}}</h5>
                        <h5>{{disco.author}}</h5>
                        <h6>{{disco.year}}</h6>
                        <h6>{{disco.genre}}</h6>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</body>
</html>