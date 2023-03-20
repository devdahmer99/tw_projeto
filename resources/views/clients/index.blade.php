<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
                         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
             <title>Clientes</title>
</head>
<body>
<table class="table container">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Observacao</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($clients as $client)
    <tr>
      <th scope="row">{{$client->id}}</th>
      <td>{{$client->nome}}</td>
      <td>{{$client->endereco}}</td>
      <td>{{$client->observacao}}</td>
      <td>
        <a href="#" class="btn btn-primary">Editar</a>
        <a href="#" class="btn btn-danger">Excluir</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>