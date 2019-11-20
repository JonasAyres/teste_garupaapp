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

<div class="container" style="width:400px; align: justify; padding-top:15%;">
    <form action="curtir" method="post">
            @csrf
    <input type="hidden" name="user" value="{{ $user->name}}">
    <button type="submit" name="curtir" class="btn btn-primary" value="curtir"style="border-radius: 20px;">Curtir</button>
    <button type="submit" name="curtir" class="btn btn-danger" value="nao curtir" style="border-radius: 20px;">Não curtir</button>
    </form>
    <br>
    <div>
            <br>
        <p>Numero total de curtidas:<div id='curtidas'>{{ $likes }}</div></p>
        <br>
        <p>Numero total de não curtidas:<div id='naocurtidas'>{{ $naolikes }}</div></p>
    </div>

</div>
</body>
</html>
