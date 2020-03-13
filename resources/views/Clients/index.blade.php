@extends('Layouts.LayoutFull')

@push('css')

@endpush

@section('conteudo')


<a href="{{route('client.create')}}" type="button" class="btn btn-outline-dark btn-lg btn-block">Adicionar</a>
<br>
<table class="table table-striped" style="text-align: center;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">CPF</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    @foreach($clients as $client)
    <tr>
      <th scope="row">{{$client->id}}</th>
      <td>{{$client->cpf}}</td>
      <td>{{$client->name}}</td>
      <td>{{$client->name}}</td>
        <td>
        <a href=""  type="button" class="btn btn-outline-success">Editar</a>
        <a href=""  type="button" class="btn btn-outline-danger">Excluir</a>
        </td>
    </tr>
    @endforeach

  </tbody>
</table>
@endsection

@push('scripts')
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
@endpush