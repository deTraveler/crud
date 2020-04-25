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
        <h2>Edit</h2>
        <a href="/user" class="btn btn-light mb-3">Back</a>
        @foreach ($users as $user)
        <form action="/user/update" method="post">
            @csrf
            <div class="row">
                <div class="form-group col-8">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required value="{{ $user->name }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-5">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="">Select gender</option>
                        <option value="Male" {{ ($user->gender == 'Male') ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ ($user->gender == 'Female') ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-3">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" class="form-control" placeholder="Age" max=99 required value="{{ $user->age }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-10">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" rows="3" class="form-control" placeholder="Address" required>{{ $user->address }}</textarea>
                </div>
            </div>
            <input type="submit" value="Save" class="btn btn-primary">
        </form>
        @endforeach
    </div>
</body>
</html>
