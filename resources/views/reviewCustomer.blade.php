<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Checkout</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
        <!--NAVBAR-->
        @include ('layout.headerPembeli')

        <!--body-->

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-success">
                    <form action="{{ url('ReviewAction') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="namaPembeli" class="form-label">Nama Pembeli</label>
                                        <input type="text" name="namaPembeli"
                                            class="form-control  @error('harga') is-invalid @enderror" id="namaPembeli"
                                            placeholder="Nama Pembeli">
                                        @error('namaPembeli')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputKomentar" class="form-label">komentar</label>
                                        <input type="text" name="komentar"
                                            class="form-control  @error('komentar') is-invalid @enderror" id="inputKomentar"
                                            placeholder="Masukkan Komentar Anda">
                                        @error('komentar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--button-->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a class="btn btn-danger" href="{{ url('dashboardPembeli') }}"> Back</a>
                        </div>
                        <!--end button-->
                    </form>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

        <!--end body-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>