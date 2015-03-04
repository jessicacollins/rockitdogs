
This is all users

<table border=1 >
	<tr>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Email</td>
	</tr>
		@foreach ($users as $user)
	    	<tr>
	    		<td>{{$user->username}}</td>
	    		<td>{{$user->first_name}}</td>
	    		<td>{{$user->last_name}}</td>
	    		<td>{{$user->email}}</td>
	    	</tr>
		@endforeach
</table>
