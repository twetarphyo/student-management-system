<meta charset="utf-8">
  <script type="text/javascript" src="js/jquery.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/my.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <div class="navbar navbar-light shadow-sm" style="background-color: #e3f2fd;">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center link">
            <strong style="color:brown;">Student registeration form</strong>
          </a>
          @if(Auth::check())
            <a href="#" class="navbar-brand d-flex">
            <strong style="padding-left: 700px; color:brown;">{{ Auth::User()->name}}</strong>
          </a>
          @endif

        </div>
      </div>
