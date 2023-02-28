<h1>E-mail de vérification</h1>
<p>les données d'utilisateur {{ $user->name }} :</p>
<p>E-mail : {{ $user->email }}</p>
<p>Pseudo : {{ $user->username }}</p>
<p>Mot de passe : {{ $pass }}</p>
Veuillez vérifier votre e-mail avec le lien ci-dessous :
<a href="{{ route('verification_utilisateur', $token) }}">Vérifier l'email</a>