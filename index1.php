<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
</div>
<div class="container">
 
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CSA-BACOLOD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">YEAR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">COURSE</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SCHEDULE
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">SECTION</a></li>
            <li><a class="dropdown-item" href="#">ROOM NO.</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">SUBJECT CODE</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">TEACHERS</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">SEARCH</button>
      </form>
    </div>
  </div>
</nav>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">ID NUMBER</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="23-01-0837">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">FIRSTNAME</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Mae Ann</textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">LASTNAME</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Pacquiao</textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">BIRTHDATE</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">April 5,2001</textarea>
</div>
<div class="mb-5">
  <button class="btn btn-success" type="submit" name="add_student" value= "Add student">Add student</button>


</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>