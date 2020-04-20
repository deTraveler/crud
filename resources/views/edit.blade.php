<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Document</title>

</head>
<body>
    <div class="container bg-white">
        <h2>Edit</h2>
        <a href="/user" class="btn btn-light">Back</a>
        @foreach ($users as $user)
        <form action="/user/update" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" class="form-control" placeholder="Age" maxlength="3" required value="{{ $user->age }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="address" rows="3" class="form-control" placeholder="Address">{{ $user->address }}</textarea>
            </div>
            <input type="submit" value="Save" class="btn btn-primary">
        </form>
        @endforeach
    </div>
</body>
</html>
