<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>

<h1>Users</h1>

@foreach ($users as $user)
    <p>
        {{ $user->name }} - {{ $user->email }}
    </p>
@endforeach

</body>
</html>