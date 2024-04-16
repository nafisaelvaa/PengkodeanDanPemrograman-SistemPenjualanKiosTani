<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Edit New Product</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
        <!--NAVBAR-->
        @include ('layout.header')

        <!--body-->

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-success">
                    <form action="{{ url('/product/update',$NewProduct->id) }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputNamaProduk">Nama Produk</label>
                                        <select class="form-control  @error('namaBuah') is-invalid @enderror" name="namaBuah" id="inputNamaProduk">
                                            <option selected value="{{$NewProduct->namaBuah}}">Select a Value</option>
                                            <option>Apel</option>
                                            <option>Brokoli</option>
                                            <option>Buncis</option>
                                            <option>Cabai</option>
                                            <option>Jeruk</option>
                                            <option>Melon</option>
                                            <option>Buah Naga</option>
                                            <option>Nanas</option>
                                            <option>Semangka</option>
                                            <option>Stoberi</option>
                                            <option>Timun</option>
                                            <option>Tomat</option>
                                        </select>
                                        @error('namaBuah')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputHarga" class="form-label">Harga</label>
                                        <input type="text" name="harga" value="{{$NewProduct->harga}}"
                                            class="form-control  @error('harga') is-invalid @enderror" id="inputHarga"
                                            placeholder="Masukkan Harga Produk">
                                        @error('harga')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="inputQuantity" class="form-label">Quantity (Kg)</label>
                                        <input type="number" name="quantity" value="{{$NewProduct->quantity}}"
                                            class="form-control  @error('quantity') is-invalid @enderror"
                                            id="inputQuantity" placeholder="Masukkan Quantity">
                                        @error('quantity')
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
                            <a class="btn btn-danger" href="{{ url('dashboardAdmin') }}">Back</a>
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