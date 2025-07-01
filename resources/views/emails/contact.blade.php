<h2>Nova kontakt poruka</h2>

<p><strong>Ime:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Poruka:</strong></p>
<p>{!! nl2br(e($data['message'])) !!}</p>
