<!doctype html>
<html lang="en">
  <head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Hello, world!</title>

  </head>
<body>
    <div class="container bg-white">
        <table class="table table-striped table-dark table-hover">
            <caption>List of users</caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->address }}</td>
                        <td colspan="1"><a href="/user/edit/{{ $user->id }}" class="btn btn-primary">Edit</a>
                            <a href="/user/delete/{{ $user->id }}" class="btn btn-primary">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/" class="btn btn-light border float-md-left">Back to welcome screen</a>
        <a href="/user/create" class="btn btn-primary float-md-right">Add new user</a>
    </div>
</body>
</html>
