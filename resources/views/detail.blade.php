<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Detail</title>
</head>
<style>
    body{
        background-image: url('{{ asset('img/bg.jpg') }}');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<body >
    <div class="container mt-4" style="width: 100%;">
        <h1 style="color: white ;text-align: center;">Detail</h1>
        <div class="row" style="opacity: 80%;">
           
            <div class="col-9">
            <form action="">
                <div class="card">
                    <div class="card-body" style="align-items: center">
                        <center>
                        <h2>{{$des->nama}}</h2>
                        <img src="{{ asset($des->foto) }}"  class="card-img-top" alt="..." style="height: 300px; width: auto;">
                        </center>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-3">
                <form action="">
                    <div class="card">
                        <div class="card-body"style="height: 300px; width: auto;">
                            <h4>Keterangan</h4> 
                            <h6>Alamat</h6>
                            <p>{{$des->alamat}}</p>
                            <a href="{{$des->wiki}}" class="btn btn-primary">Lihat di WikiPedia</a>
                            <h6>Gmaps</h6>
                            <iframe src="{{ $des->maps }}" width="200px" height="100px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row" style="opacity: 80%;">
            <div class="col mt-2">
                <form action="">
                    <div class="card">
                        <div class="card-body">
                            <h4>Deskripsi</h4> 
                            <p>"{{$des->deskripsi}}"</p> 

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>