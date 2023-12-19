<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <!-- CSS only --> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<div></div>
<title>Login</title>
</head>
<body >
    <div class="container py-5" >
        <div class="w-50 center border rounded px-3 py-3 mx-auto card shadow" >
        <h1 class="text-center">Login</h1>
        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item )
                <li>{{ $item }}</li>

                @endforeach
            </ul>
        </div>

        @endif --}}
        <form action="" method="POST" >
            @csrf
            <div class="mt-4">

                <div class="mb-3 ">
                    <label for="email" class="form-label"><h5>Email</h5></label>
                    <input type="email" value="{{ old('email') }}" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"><h5>Password</h5></label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3 ">
                    {{-- <label for="role" class="form-label"><h5>Role</h5></label>
                    <select name="role" id="role" >
                        <option value="admin">Admin</option>
                        <option value="guru">Guru</option>
                        <option value="siswa">Siswa</option>

                    </select>
                </div> --}}
            </div>
            <div class="mb-3">


            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>
