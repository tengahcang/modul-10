<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand mb-0 h1" href="{{ route('home') }}"><i class="bi-hexagon-fill me-2"></i> Data Master </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item col-2 col-md-auto">
                        <a class="nav-link" href="{{ route('employees.index') }}">Employee List</a>
                    </li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a class="btn btn-outline-light my-2 ms-md-auto" href="{{ route('profile') }}"><i class="bi-person-circle me-1"></i>My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Detail Employee</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <h5>{{ $employee->firstname }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <h5>{{ $employee->lastname }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <h5>{{ $employee->email }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="age" class="form-label">Age</label>
                        <h5>{{ $employee->age }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="position" class="form-label">Position</label>
                        <h5>{{ $employee->position_name }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a class="btn btn-outline-dark btn-lg mt-3" href="{{ route('employees.index') }}"><i class="bi-arrow-left-circle me-2"></i>Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
