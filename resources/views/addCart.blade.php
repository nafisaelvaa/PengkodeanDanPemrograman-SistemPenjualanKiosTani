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
                    <form action="{{ url('addCartAction') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputNamaProduk">Nama Produk & Harga /kg</label>
                                        <select class="form-control  @error('checkoutProduk') is-invalid @enderror" name="checkoutProduk" id="inputNamaProduk">
                                            <option selected value="">Select a Value</option>
                                            <option>Apel        (23.000)/kg</option>
                                            <option>Brokoli     (30.000)/kg</option>
                                            <option>Buncis      (15.000)/kg</option>
                                            <option>Cabai       (33.000)/kg</option>
                                            <option>Jeruk       (19.000)/kg</option>
                                            <option>Melon       (15.000)/kg</option>
                                            <option>Buah Naga   (45.000)/kg</option>
                                            <option>Nanas       (20.000)/kg</option>
                                            <option>Semangka    (11.000)/kg</option>
                                            <option>Stoberi     (38.500)/kg</option>
                                            <option>Timun       (12.000)/kg</option>
                                            <option>Tomat       (25.000)/kg</option>
                                        </select>
                                        @error('checkoutProduk')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputHarga" class="form-label">Quantity (Kg)</label>
                                        <input type="text" name="checkoutQuantity"
                                            class="form-control  @error('harga') is-invalid @enderror" id="inputHarga"
                                            placeholder="Masukkan Quantity">
                                        @error('harga')
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
                            <button type="submit" class="btn btn-success">Checkout</button>
                            <a class="btn btn-danger" href="{{ url('dashboardPembeli') }}">Back</a>
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