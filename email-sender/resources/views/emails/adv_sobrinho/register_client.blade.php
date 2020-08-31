@extends('emails.adv_sobrinho.template')

@section('banner')
	
@stop

@section('content')
	<p>Url do site: {{$client->getUrlSite()}}</p>
    <p>Email: Novo Registro</p>
    <p>Cliente: {{$consumerName}}</p>
    <p>Link: {{$linkButton}}</p>
@stop

@section('button')
	
@stop