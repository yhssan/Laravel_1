<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form</title>
</head>
<style>
    body{
        background-image: url(img/bg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    
    }
</style>
<body>
    
    <div class="container" style="margin-top: 20px;  " >
        <h1 style="color: white; text-align: center;">Forms</h1>
        <form class="d-flex" action="" style=" opacity: 85%; margin-top: 5px; width: 50%; position: absolute; margin-left: 27%; margin-right: auto;">
            <div class="card" style="width: 450px; ">
                <div class="card-body" style="margin-top: 20px;">
                <input type="text" placeholder="Nama" class="form-control mb-2"><br>
                <input type="text" placeholder="Foto" class="form-control mb-2"><br>
                <textarea placeholder="Alamat" name="" id="" cols="30" rows="3" style="resize: none" class="form-control mb-2"></textarea><br>
                <input type="text" placeholder="Link" class="form-control mb-2"><br>
                <textarea placeholder="Deskripsi" name="" id="" cols="30" rows="3" style="resize: none" class="form-control "></textarea><br>
               
                <a href="dashboard" class="btn btn-secondary" style="margin-left: 1px">Kembali</a>
                <a href="dashboard" class="btn btn-primary" style="margin-left: 59%">Tambah</a>
                </div>
                </div>
            </div>
        </form>
    </div>

    
</body>
</html>