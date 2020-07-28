<html>
    <head>
        <title>{{env('APP_NAME')}} - {{$subdomain}}</title>
    </head>
    <body>

			<h1>{{$subdomain}} - APP</h1>
			<h3>My users</h3>

			@forelse ($users as $user)
					<li>{{ $user->name }}</li>
			@empty
					<p>No users</p>
			@endforelse
			
    </body>
</html>