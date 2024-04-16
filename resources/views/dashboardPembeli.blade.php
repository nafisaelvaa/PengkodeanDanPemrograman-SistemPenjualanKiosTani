<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Home</title>
</head>

<body>
    <!--navbar-->
    @include ('layout.headerPembeli')
    <!--end navbar-->

    <!--start carousel-->
    @include ('layout.carousel')
    <!--end carousel-->

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

    <!-- Project Section -->
    <div class="w3-container w3-padding-32" id="product">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Products</h3>
    </div>
    <div class="w3-row-padding">
      <!-- Apel -->
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Apel</div>
          <img src="cdn/imgg/apel.jpg" alt="House" style="width:100%">
          <p>Buah apel memberikan dampak baik pada tubuh mulai dari kulit hingga dagingnya.
            Anda dapat merasakan tubuh menjadi lebih sehat setelah mengonsumsi apel secara rutin.
            Apel kaya akan kandungan antioksidan, flavonoid, dan serat makanan.
            Kandungan tersebut membantu untuk mengurangi risiko kanker, diabetes, hingga jantung.
          </p>
        </div>
        <a class="btn btn-success" href="{{ url('addCart') }}">Add To Chart</a>
      </div>

      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Brokoli</div>
          <img src="cdn/imgg/brocoli.png" alt="House" style="width:100%">
          <p>Brokoli sangat populer akan sumber yang kaya vitamin C. Brokoli mengandung 89,2 mg
            atau sekitar 150% per 100 g (RDA). Vitamin-C adalah anti-oksidan dan modulatorkekebalan
            tubuh alami yang kuat, berguna membantu untuk melawan virus penyebab flu.
          </p>
        </div>
        <a class="btn btn-success" href="{{ url('addCart') }}">Add To Chart</a>
      </div>

      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Buncis</div>
          <img src="cdn/imgg/buncis.png" alt="House" style="width:100%">
          <p>Kandungan serat dan antioksidan pada buncis bermanfaat untuk menjaga kesehatan
            jantung dan pembuluh darah. Penelitian menunjukkan bahwa orang yang rutin mengonsumsi makanan sehat,
            termasuk buncis dan kacang-kacangan, berisiko lebih rendah untuk mengalami penyakit jantung dan pembuluh darah.
          </p>
        </div>
        <a class="btn btn-success" href="{{ url('addCart') }}">Add To Chart</a>
      </div>

      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Cabai</div>
          <img src="cdn/imgg/cabe.jpg" alt="House" style="width:100%">
          <p>Cabai mengandung vitamin B6,asam folat, potassium dan betakaroten yang dapat mencegah anda dari
            serangan penyakit jantung. Biasanya serangan jantung disebabkan oleh tekanan darah yang tinggi,
            adapun manfaat cabai rawit dapat menjaga tekanan darah dalam tubuh tetap stabil, dengan begitu jantung bekerja optimal.
          </p>
        </div>
        <a class="btn btn-success" href="{{ url('addCart') }}">Add To Chart</a>
      </div>
    </div>

    <div class="w3-row-padding">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Jeruk</div>
          <img src="cdn/imgg/jeruk.png" alt="House" style="width:99%">
          <p>Buah jeruk dikenal sebagai salah satu buah dengan kandungan vitamin C yang tinggi. Padahal, 
            selain vitamin C, buah ini juga mengandung beragam gizi lain, seperti vitamin A, karbohidrat, 
            serat, protein, kalsium, zat besi, magnesium, fosfor, kalium, folat, serta kolin.
          </p>
        </div>
        <a class="btn btn-success" href="{{ url('addCart') }}">Add To Chart</a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Melon</div>
          <img src="cdn/imgg/melon.jpg" alt="House" style="width:99%">
          <p>Melon mengandung vitamin B1 yang berperan dalam metabolisme karbohidrat untuk menghasilkan 
            energi secara optimal. Melon juga kaya vitamin B2, yaitu riboflavin dan niasin yang berperan 
            menjaga kesehatan kulit, mata, saraf, dan pencernaan. Kadar air melon bisa 95% sehingga memberikan efek menyejukan.
          </p>
        </div>
        <a class="btn btn-success" href="{{ url('addCart') }}">Add To Chart</a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Buah Naga</div>
          <img src="cdn/imgg/naga.jpg" alt="House" style="width:99%">
          <p>Buah naga dapat digunakan sebagai bahan kosmetik dan kesehatan dengan fungsi meningkatkan 
            penglihatan dan mencegah hipertensi, meningkatkan kekebalan tubuh dan mencegah kanker. 
            Buah naga dapat disajikan sebagai sayur yang lezat, memiliki gizi tinggi, segar, kaya vitamin C.
          </p>
        </div>
        <a class="btn btn-success" href="{{ url('addCart') }}">Add To Chart</a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Nanas</div>
          <img src="cdn/imgg/nanas.jpg" alt="House" style="width:99%">
          <p>Buah nanas memiliki kandungan antioksidan, yaitu vitamin C, yang memiliki khasiat 
            untuk membantu meningkatkan daya tahan tubuh, khususnya dari berbagai penyakit.
          </p>
        </div>
        <a class="btn btn-success" href="{{ url('addCart') }}">Add To Chart</a>
      </div>
    </div>

    <div class="w3-row-padding">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Semangka</div>
          <img src="cdn/imgg/semangka.jpg" alt="House" style="width:99%">
          <p>Semangka mengandung vitamin A, vitamin C, dan antioksidan likopen. 
            Ketiga nutrisi tersebut diketahui dapat meningkatkan kesehatan mata serta 
            mencegah risiko menurunnya kemampuan penglihatan karena faktor usia, seperti katarak dan degenerasi makula.
          </p>
        </div>
        <a class="btn btn-success" href="{{ url('addCart') }}">Add To Chart</a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Stoberi</div>
          <img src="cdn/imgg/stoberi.jpg" alt="House" style="width:99%">
          <p>Selain baik untuk meningkatkan kesehatan jantung, mata, 
            dan imunitas tubuh, kandungan vitamin C dan antioksidan pada 
            buah strawberry juga efektif untuk mengurangi risiko pertumbuhan sel kanker pada tubuh.
          </p>
        </div>
        <a class="btn btn-success" href="{{ url('addCart') }}">Add To Chart</a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Timun</div>
          <img src="cdn/imgg/timun.jpg" alt="House" style="width:99%">
          <p>Timun kaya akan sumber air serta mengandung vitamin C. 
            Segala kandungan nutrisi tersebut sangat baik untuk menutrisi kulit, 
            sehingga timun bisa membantu melembabkan kulit dan mencegah penuaan dini. 
            Mentimun juga mengandung sulfur dan silikon untuk pertumbuhan rambut sehat.
          </p>
        </div>
        <a class="btn btn-success" href="{{ url('addCart') }}">Add To Chart</a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Tomat</div>
          <img src="cdn/imgg/tomat.jpg" alt="House" style="width:99%">
          <p>Kandungan yang terdapat dalam buah tomat yaitu Beta Karoten, 
            Likopen, dan Lutein merupakan antioksidan dan memiliki manfaat 
            untuk melindungi mata. Kandungan vitamin C pada buah tomat juga 
            memiliki peranan penting dalam pembentukan Kolagen dalam tubuh.
          </p>
        </div>
        <a class="btn btn-success" href="{{ url('addCart') }}">Add To Chart</a>
      </div>
    </div>

    <!-- About Section -->
    <div class="w3-container w3-padding-32" id="about">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
      <img margin="center" src="{{ asset('cdn/imgg/logo.png') }}" class="d-block w-600" alt="..." width="800" height="800">
      <p>Focusing on the B2B Industry with a technology-supported food ecosystem,
        Kios Tani strives to create a food market with stable prices and aims to improve
        the quality life of local producers. Together with Kios Tani, we will be FEEDING THE NATION!
        Kios Tani has worked with hundreds of local farmers and dozens of raw material
        suppliers to provide all the culinary business needs of our thousands of customers. Want to be a part of Kios Tani?
      </p>
    </div>

    <!-- Article -->
    <div class="w3-container w3-padding-32" id="article">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Article</h3>
      <a href="http://repository.pertanian.go.id/" target="_blank">
        <p><button class="w3-button w3-light-grey w3-block">Artikelan Terbaru</button></p>
      </a>
    </div>

    <!-- Review -->
    <div class="w3-container w3-padding-32" id="review">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Review</h3>
        <div class="card-body">
          <table class="table table-bordered table-hover datatable">
            <thead>
              <tr>
                <th>Nama Pembeli</th>
                <th>Komentar</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($ReviewCust as $data)
              <tr>
                <td>{{ $data->namaPembeli }}</td>
                <td>{{ $data->komentar }}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
    </div>

    <!--footer-->
    @include ('layout.footer')
    <!--end footer-->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>