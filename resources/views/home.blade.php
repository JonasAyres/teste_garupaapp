<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste Garupa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
<div class="container" style="width:300px; padding-top:15%;">
      <div class="login-clean">
        <form class="text-center" action="autentica" method="post">
                @csrf
          <h2 class="sr-only">Login Form</h2>
          <div class="illustration"></div>
          <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email@exemplo.com">
          </div>
          <div class="form-group">
              <input class="form-control" type="password" name="senha" placeholder="Senha"></div>
          <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(33,161,216);">Logar</button>
          </div>
        </form>
      </div>
</div>
</body>
</html>
