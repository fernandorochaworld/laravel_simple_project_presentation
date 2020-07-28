<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
		@forelse ($users as $user)
				<li>{{ $user->name }}</li>
		@empty
				<p>No users</p>
		@endforelse
    </body>
</html>