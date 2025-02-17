<!doctype html>
<html lang="en">
  <head>
    <title>News</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <style>

body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td { 
    margin:0;
    padding:0;
}
table {
    border-collapse:collapse;
    border-spacing:0;
}
fieldset,img { 
    border:0;
}
address,caption,cite,code,dfn,em,strong,th,var {
    font-style:normal;
    font-weight:normal;
}
ol,ul {
    list-style:none;
}
caption,th {
    text-align:left;
}
h1,h2,h3,h4,h5,h6 {
    font-size:100%;
    font-weight:normal;
}
q:before,q:after {
    content:'';
}
abbr,acronym { border:0;}</style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="about">About us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacts">Contacts</a>
      </li>
      <li class="nav-item">
        @can('article')
        <a class="nav-link" href="/article">Articles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/article/create">Create Article</a>
      </li>
      @endcan
      <div class="navbar-nav d-flex justify-content-end">
        @guest
        <li class="nav-item">
            <a href="/auth/create" class="nav-link">SignUp</a>
        </li>
        <li class="nav-item">
            <a href="/auth/login" class="nav-link">SignIn</a>
        </li>
        @endguest
        @auth
        <li class="nav-item">
            <a href="/auth/logout" class="nav-link">Logout</a>
        </li>
        @endauth
    </div>
    </ul>
  </div>

</nav>
  </header>
  <main>
    <div class="container">
        @yield('content')
    </div>
  </main>
  <footer>
    <h1>Кулешов Даниил Алексеевич</h1>
    <h2>221-321</h2>
  </footer>
</html>