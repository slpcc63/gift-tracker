<x-layout>
	<form method="POST" action="/login">
		@csrf
		<label for="username">Username:</label>
		<input id='username' type="text" />
		<label for="password">Password:</label>
		<input id='password' type="password" />
		<input id='submit' type="submit" value="Submit" />
	</form>
</x-layout>