<div>
	<h4>Contato pelo Site</h4>
	<p>Nome: {{$contact->name}}</p>
	<p>E-mail: {{$contact->email}}</p>
	<p>Telefone: {{$contact->phone}}</p>
	<p>Assunto: {{$contact->subject}}</p>
	<p>Mensagem: {{$contact->message}}</p>
	
	<p>Mensagem: {{$contact->client->name}}</p>
	<p>Mensagem: {{$contact->client->urlSite}}</p>
	<p>Mensagem: {{$contact->client->urlLogo}}</p>
</div>