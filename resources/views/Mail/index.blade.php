<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <h5>{{ $mensagem }}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <span><b>Saldo Disponível:</b> {{ $saldo_disponivel }}</span>
        </div>
        <div class="col-md-6">
            <span><b>Data da Transação:</b> {{ $data_transacao }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <span><b>Tipo da Transação:</b> {{ $tipo_transacao }}</span>
        </div>
        <div class="col-md-6">
            <span><b>Valor da Transação:</b> {{ $valor_transacao }}</span>
        </div>
    </div>
</body>

</html>
