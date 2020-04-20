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
        <h2>Create</h2>
        <a href="/user" class="btn btn-light">Back</a>
        <form action="/user/store" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" class="form-control" placeholder="Age" maxlength="3" required>
            </div>
            <div class="form-groupo">
                <label for="address">Address</label>
                <textarea name="address" id="address" rows="3" class="form-control" placeholder="Address" required></textarea>
            </div>
            <input type="submit" value="Create" class="btn btn-primary">
        </form>
    </div>

</body>
</html>
