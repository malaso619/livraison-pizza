



<h1>Pour voir toutes les roles d'un utilisateur</h1>

	<h1>{{ $role->name }}</h1>
	<p>{{ $role->role->ROLE }}</p>

<hr>


<br>
<br>
<br>
<br>

<h3>Nous allons voir tout ce que utilise le role id 3 </h3>



{{--@foreach($user as $users)
	{{ $users->anarana }}
	<hr>
@endforeach   Mandea io --}}


@foreach($user2->users as $use)
	<p>{{ $user2->ROLE }}</p>
	<p>{{ $use->name }}</p>
	<hr>
@endforeach



<hr>
<br>
<br>
<br>
<h1>Acceder dans la table pivot</h1>

@foreach( $piz->ingredients as $ingredient)
		{{ $ingredient->INGREDIENTS}}

@endforeach



<h1>Get les coefficent </h1>

@foreach ($testes as $val)

	{{ $val->NUMCOMMANDE }}
	{{ $val->tarif->COEFFICIENT }}
	<hr>
@endforeach










