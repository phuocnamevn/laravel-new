<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    </style>
    <title>Hello, I'm Phuoc</title>
    <style>
      .container{
        margin-top: 1em;
      }
    </style>
  </head>
  <body>
        @section('sidebar')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://phuoc.name.vn">PHUOC.NAME.VN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <span class="navbar-text">
              Copyright @Phuoc
            </span>
          </div>
        </div>
      </nav>
        @show
 
        <div class="container">
          <div class="row">
            <div class="col-md-5 mb-3">
              <ul class="list-group">
                <li class="list-group-item active" aria-current="true">System</li>
                <a href="/admin/user" class="list-group-item list-group-item-action">User management</a>
                <a href="/admin/role" class="list-group-item">Role management</a>
                <a href="/admin/permission" class="list-group-item">Permission management</a>
                <li class="list-group-item active" aria-current="true">Catalog</li>
                <a href="/admin/product" class="list-group-item">Product management</a>
                <a href="/admin/category" class="list-group-item">Category management</a>
              </ul>
            </div>
            @yield('content')
          </div>
        </div>
    </body>
</html>