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
      <th scope="col">Endereço</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    @foreach($clients as $client)
    <tr>
      <th scope="row">{{$client->id}}</th>
      <td>{{$client->cpf}}</td>
      <td>{{$client->name}}</td>
      <td>{{$client->email}}</td>
      <td>{{$client->endereco}}</td>
        <td>
        <a href="{{ route('client.edit', [$client->id])}}" class="btn btn-primary bt-sm text-white"> <i class=" fal fa-trash"></i>
        <span class='d-none d-md-inline'>Editar</span> 
        </a>
        <span data-url="{{route('client.destroy',[$client->id])}}" data-idClient='{{$client->id}}' class="btn btn-warning btn-sm text-white deleteButton">
            <i class="fal fa-trash"></i>
            <span class='d-none d-md-inline'> Deletar</span>
        </span>
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
    <script>
        $('.deleteButton').on('click', function (e) {
        var url = $(this).data('url');
        var idClient = $(this).data('idClient');
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            method: 'DELETE',
            url: url
        });
        $.ajax({
            data: {
                'idClient': idClient,
            },
            success: function (data) {
                console.log(data);
                if (data['status'] ?? '' == 'success') {
                    if (data['reload'] ?? '') {
                        location.reload();
                    }
                } else {
                   console.log('error');
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
      });
    </script>
@endpush