<div>
	<h4>Contato pelo Site</h4>
	<p>Nome: {{$contact->name}}</p>
	<p>E-mail: {{$contact->email}}</p>
	<p>Telefone: {{$contact->phone}}</p>
	<p>Assunto: {{$contact->subject}}</p>
	<p>Mensagem: {{$contact->message}}</p>
	
	<p>Nome: {{$contact->client->name}}</p>
	<p>Site: {{$contact->client->url_site}}</p>
	<p>Logo: {{$contact->client->url_logo}}</p>
</div>