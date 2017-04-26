<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Condensed" rel="stylesheet">
        <style media="screen">
          html {
            font-family: 'Lato', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-align: center;
            color: #2c3e50;
            margin-top: 60px;
          }

          h1,
          h2,
          h3,
          h5 {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 150%;
          }
          p {
              font-size: 20px;
          }
          div {
              margin-bottom: 25px;
          }
          .btn-gwb {
            background: red; /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(right, #392, #ddd604); /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(right, #392, #ddd604); /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(right, #392, #ddd604); /* For Firefox 3.6 to 15 */
            background: linear-gradient(to right, #392, #ddd604); /* Standard syntax */
            color: #ffffff;
            border-style: none;
          }
        </style>

        <title>Colorado Erectors</title>
    </head>
    <body>
        <div id=app>
          {{-- <router-link to="/" tag="li" active-class="active" exact><a>Home</a></router-link>
          <router-link to="/gallery" tag="li" active-class="active"><a>Gallery</a></router-link>
          <router-link to="/about" tag="li" active-class="active"><a>About</a></router-link>
          <router-link to="/contact" tag="li" active-class="active"><a>Contact</a></router-link> --}}
          {{-- <navigation></navigation>
          <router-view></router-view> --}}
          <app></app>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
