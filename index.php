<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Prueba 1 Desarrollo Web</title>
    <style>
    
    body {
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        color: #fff;
    } 
    </style>

</head>

<body>
    <h1 class="text-center">Login Nitido</h1>
    <div class="container">
      <form action="validar.php" name="login" method="post" enctype="application/x-www-form-urlencoded" >
        <div class="mb-3 row">
            <label for="inputUser" class="col-sm-2 col-form-label">user</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="user" id="user">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" id="pass">
            </div>
          </div>
          <div class="col-auto d-flex justify-content-center">
            <button type="submit" class="btn btn-secondary mb-3">Enter my bro</button>
          </div>
          </form>
    </div>

</body>
</html>