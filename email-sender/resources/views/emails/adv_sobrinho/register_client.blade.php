@extends('emails.adv_sobrinho.template')

@section('banner')
	<img align="center" title="Grupo Sobrinho Advogados" alt="Capa" src="{{$client->getUrlSite()}}/public/assets/img/email/default.jpg" width="564" style="max-width:564px; padding-bottom: 0; display: inline !important; vertical-align: bottom; margin-bottom: 10px;" class="mcnImage">
@stop

@section('content')
	<tr>
      <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
        <h3>BEM VINDO!</h3>
        <p>Olá {{$consumerName}}, agradecemos por utilizar nossos serviços. Clique no botão abaixo e confirme seu cadastro.</p>
      </td>
    </tr>
@stop

@section('button')
    <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Verdana, Geneva, sans-serif; font-size: 14px; padding: 15px 30px;">
    	<a class="mcnButton " title="Site" href={{$linkButton}} target="_blank" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Confirmar Cadastro</a>
    </td>
@stop