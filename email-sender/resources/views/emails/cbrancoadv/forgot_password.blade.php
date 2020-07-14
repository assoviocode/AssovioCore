@extends('emails.cbrancoadv.template')

@section('banner')
	<img align="center" alt="Capa" src="https://brancoadvogadosassociados.com.br/public/assets/email/img/default.jpg" width="564" style="max-width:564px; padding-bottom: 0; display: inline !important; vertical-align: bottom; margin-bottom: 10px;" class="mcnImage">
@stop

@section('content')
    <h3>Redefinição de Senha</h3>
    <p>Olá {{ $clientName }}, você astá recebendo esse email porque houve uma solicitação na sua conta. Para redefinir sua senha clique no botão abaixo.</p>
@stop

@section('button')
	<a class="mcnButton " title="Site" href="https://cliente.brancoadvogadosassociados.com.br/app/change-password/{{ $token }}" target="_blank" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Clique aqui para Redefinir Senha</a>
@stop


