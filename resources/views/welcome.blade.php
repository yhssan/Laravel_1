<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Home</title>
</head>
<style>
    body{
        background-image: url(img/bg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<body >
    @include('template.nav')        
    
   <div class="container ">
    <h1 style="color: white; text-align: center">Home</h1>
    <div class="row ">
        @foreach ($des as $Destinasi)
        <div class="col-4">
            <div class="card" style="width: ; opacity: 80%;">
                <div class="card-body">
                <img src="{{$Destinasi->foto}}" class="card-img-top" alt="...">
                  <h5 class="card-title">{{$Destinasi->nama}}</h5>
                  <p class="card-text"></p>
                  <a href="detail/{{ $Destinasi->id }}" class="btn btn-primary">Detail</a>  
                </div>
            </div>
        </div>
            
        @endforeach
    </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>