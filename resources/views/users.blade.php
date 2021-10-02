<html>
    <head>
        <title>Display user API</title>
    </head>
    <body>
        <h1>Display User API</h1>

        @foreach($users as $user)
        <div style="margin-bottom: 5px;">
            <p>ID: {{ $user['id'] }}</p>
            <p>First Name: {{ $user['first_name'] }}</p>
            <p>Last Name: {{ $user['last_name'] }}</p>
            <p>Email: {{ $user['email'] }}</p>
            <p>Avatar: <img width="100" src="{{ $user['avatar'] }}"/></p>
        </div>
        @endforeach

    </body>
</html>
