<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Login Pembeli</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-md-center"
            style="width: 700px; background-color: white; margin-top: 100px; margin-left: 200px; border-radius: 25px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="col-md-8">
                <h1 class="text-center text-success" style="margin-top: 60px; margin-bottom: 60px;">Login</h1>
                <form action="{{url('loginPembeliAction')}}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="inputAddress">Username</label>
                        <input type="text" class="form-control" name="name" id="inputNama" placeholder="Masukan Nama Anda">
                    </div>
                    <div class="form-group">
                        <label for="inputNoTelepon">No Telepon</label>
                        <input type="text" class="form-control" name="phonenumber" id="inputNoTelepon" placeholder="Masukan No Telepon Anda">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Masukan Password Anda">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <span class="text-center" style="font-size: 14px;"></span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" style="margin-bottom: 60px; ">Lanjutkan</button>
                    <a class="btn btn-danger" href="{{ url('/') }}" style="margin-bottom: 60px"> Back</a>
                </form>
            </div>
        </div>
    </body>
</html>