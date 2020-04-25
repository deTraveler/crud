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
    <div class="container bg-white col-4">
        <h2>Create</h2>
        <a href="/user" class="btn btn-light mb-3">Back</a>
        <form action="/user/store" method="post">
            @csrf
            <div class="row">
                <div class="form-group col-8">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-5">
                    <label for="gender">Address</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="">Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-3">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" class="form-control" placeholder="Age" max="99" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-10">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" rows="3" class="form-control" placeholder="Address" required></textarea>
                </div>
            </div>
            <input type="submit" value="Create" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
