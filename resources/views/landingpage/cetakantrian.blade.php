<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            text-align: center;
            margin-bottom: 0;
            margin-top: 0;
        }

        hr {
            margin: 0.4rem 0;
        }

        @page {
            size: 150mm;
            /* Adjust the width based on the paper roll width */
            margin: 0;
        }

        body {
            margin: 10mm;
            /* Add any necessary margins */
        }
    </style>
</head>

<body>
    <div id="pdf-content">
        <p>Mal Pelayanan Publik Kota Balikpapan</p>
        <hr>
        <h2>NOMOR ANTRIAN</h2>
        <h1>{{ $antrianTerakhir->noantrian }}</h1>
        <img height="180px" src="{{ $antrianTerakhir->qrcode }}" alt="QR Code" />
        <h3>Loket Layanan</h3>
        <h2>{{ $antrianTerakhir->nama_loket }}</h2>
        <h4>{{ $antrianTerakhir->tgl }}</h4>
        <hr>
        <p>Jl Ruhui Rahayu 1. RT.08 NO.9<br> Sepinggan Baru, Balikpapan Selatan </p>
    </div>
</body>

</html>
