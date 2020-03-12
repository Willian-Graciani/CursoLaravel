@extends('Layouts.LayoutFull')

@push('css')

@endpush
@section('conteudo')
    <div style="border:groove; padding:20px; border-color:#2dce89;">
        <form action="/action_page.php">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" placeholder="Digite seu nome" id="nome">
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" placeholder="Digite seu cpf" id="cpf" maxlength="14" onkeypress="$(this).mask('000.000.000-00');">
        </div>
        <div class="form-group">
            <label for="end">Endereço:</label>
            <input type="text" class="form-control" placeholder="Digite seu endereço" id="end">
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success" style="">Enviar</button>
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