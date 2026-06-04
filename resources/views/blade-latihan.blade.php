<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Blade Laravel</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 30px;
        }

        .container{
            max-width: 900px;
            margin: auto;
        }

        h1{
            margin-bottom: 30px;
        }

        .card{
            background: white;
            padding: 25px;
            margin-bottom: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .success{
            color: green;
            font-weight: bold;
        }

        .primary{
            color: blue;
            font-weight: bold;
        }

        .warning{
            color: orange;
            font-weight: bold;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table, th, td{
            border: 1px solid #ddd;
        }

        th{
            background-color: #1E3A5F;
            color: white;
        }

        th, td{
            padding: 12px;
            text-align: left;
        }

        ul{
            padding-left: 20px;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>🚀 Latihan Blade Laravel</h1>

    <div class="card">
        <h2>1. Menampilkan Data</h2>

        <p>Nama: {{ $nama }}</p>

        <p>
            Nama Huruf Besar:
            {{ strtoupper($nama) }}
        </p>
    </div>

    <div class="card">
        <h2>2. Kondisional IF</h2>

        @if ($ipk >= 3.5)
            <p class="success">Cumlaude</p>

        @elseif ($ipk >= 3.0)
            <p class="primary">Sangat Memuaskan</p>

        @else
            <p class="warning">Memuaskan</p>
        @endif
    </div>

    <div class="card">
        <h2>3. Switch Status</h2>

        <p>Status:

        @switch($statusMahasiswa)

            @case('aktif')
                Mahasiswa Aktif
                @break

            @case('cuti')
                Mahasiswa Cuti
                @break

            @case('lulus')
                Mahasiswa Lulus
                @break

            @default
                Tidak Diketahui

        @endswitch

        </p>
    </div>

    <div class="card">
        <h2>4. Data Mahasiswa</h2>

        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>IPK</th>
            </tr>

            @foreach ($mahasiswas as $mahasiswa)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mahasiswa['nama'] }}</td>
                <td>{{ $mahasiswa['nim'] }}</td>
                <td>{{ $mahasiswa['ipk'] }}</td>
            </tr>
            @endforeach

        </table>
    </div>

    <div class="card">
        <h2>5. Perulangan FOR</h2>

        <ul>
            @for ($i = 1; $i <= 5; $i++)
                <li>Item ke-{{ $i }}</li>
            @endfor
        </ul>
    </div>

</div>

</body>
</html>
```
