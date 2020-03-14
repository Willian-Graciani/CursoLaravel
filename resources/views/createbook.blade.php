@extends('Layouts.LayoutFull')

@push('css')

@endpush
@section('conteudo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
 @endif   
    <div style="border:groove; padding:20px; border-color:#2dce89;">
        <form method='POST'action="{{route('book.store')}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" required placeholder="Digite seu nome" name="name" id="name" value='{{old("name")}}'>
        </div>
        <div class="form-group">
            <label for="end">Writer:</label>
            <input type="text" class="form-control" required placeholder="Digite seu texto" id="writer" name="writer" value='{{old("writer")}}'>
        </div>
        <div class="form-group">
            <label for="end">Page Number:</label>
            <input type="integer" class="form-control" required placeholder="Digite o numero de páginas" name="page" id="page" value='{{old("page")}}'>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success" required style="">Enviar</button>
        </div>
        </form>
    </div>
@endsection

@push('scripts')
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
@endpush