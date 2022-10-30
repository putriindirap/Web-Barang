<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Details Item</title>
</head>

<body>
    <div class="row justify-content-center ">
        <div class="col-md-6">
            <div class="card border">
                <div class="card-header bg-info"><h2>Details Barang</h2></div>
                <div class="card-body">
                    <div> <img src="{{asset('fotoitem.png')}}" alt="Foto Produk"> </div>
            
                    <div><b>Nama Barang : {{$itemDetail->Nama_Barang}}</b></div>
                    <div><b>Details Barang</b></div>
                    <div>{{$itemDetail->Details}}</div>                    
                    <div><b>Stok :</b> {{$itemDetail->Stok}}</div>
                    <div><b>Terjual :</b> {{$itemDetail->Terjual}}</div>
                    <div> <a href="" class="btn btn-warning">Beli {{$itemDetail->Harga}}</a></div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>