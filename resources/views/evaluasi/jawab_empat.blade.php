<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="card">
        <div class="card-header">
          <p>Jawaban</p>
        </div>
        <div class="card-body">
           <ol>
            <li> Kompetisi : {{$tkro['nama']}} <br> </li>
            <li> Ketua Kompetisi : {{$tkro['kajur']}} <br></li>
            <li> Jumlah Kelas : {{$tkro['kelas']}} <br></li>
        </ol>
        </div>
      </div>
    <script src="/js/bootsrap.bundle.min.js"></script>
</body>
</html>