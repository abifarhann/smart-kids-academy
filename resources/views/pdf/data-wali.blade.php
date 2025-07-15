<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Wali Murid</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 20px;
            background-image: url('data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/logo/logo-unfix.png'))) }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .overlay {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #000;
            padding: 6px;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
        }

        .info {
            font-size: 13px;
            margin-top: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="overlay">
        <div class="header">
            <h2>DATA WALI MURID</h2>
            <h3>SMARTKIDS ACADEMY</h3>
            <p>Jl Pendidikan No 11 Gedeg Mojokerto, GG Cinta II Beratwetan Mojokerto</p>
            <p>No Telp: +62 877-2109-9337 | Instagram : smartkidsacademy__</p>
        </div>

        <p class="info"><strong>Tanggal Cetak:</strong> {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Wali</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>No. Telepon</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataWali as $index => $wali)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td style="text-align: left;">{{ $wali->name }}</td>
                        <td>{{ $wali->email ?? '-' }}</td>
                        <td>{{ $wali->username}}</td>
                        <td>{{ $wali->phone ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Tidak ada data wali murid.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div style="margin-top: 80px; width: 100%; text-align: right; font-size: 13px;">
            <p>Mojokerto, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
            <p><strong>Admin Akademik SKA</strong></p>
            <br><br><br>
            <p>__________________________</p>
        </div>
    </div>
</body>

</html>
