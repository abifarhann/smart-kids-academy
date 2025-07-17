<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Mentor</title>
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

        th,
        td {
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
            <h2>DATA MENTOR</h2>
            <h3>SMARTKIDS ACADEMY</h3>
            <p>Jl Pendidikan No 11 Gedeg Mojokerto, GG Cinta II Beratwetan Mojokerto</p>
            <p>No Telp: +62 877-2109-9337 | Instagram : smartkidsacademy__</p>
        </div>

        <p class="info"><strong>Tanggal Cetak:</strong> {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tgl Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Telepon</th>
                    <th>Tingkat Pendidikan</th>
                    <th>Jurusan</th>
                    <th>Asal Sekolah</th>
                    <th>Status Pendidikan</th>
                    <th>Program Ajar</th>
                    <th>Status Ajar</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataMentor as $index => $mentor)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td style="text-align: left;">{{ $mentor->nama }}</td>
                        <td>{{ \Carbon\Carbon::parse($mentor->tgl_lahir)->format('d-m-Y') }}</td>
                        <td>{{ $mentor->tempat_lahir }}</td>
                        <td style="text-align: left;">{{ $mentor->alamat }}</td>
                        <td>{{ $mentor->jenis_kelamin }}</td>
                        <td>{{ $mentor->phone }}</td>
                        <td>{{ $mentor->tingkatPendidikan->nama ?? '-' }}</td>
                        <td>{{ $mentor->jurusan }}</td>
                        <td>{{ $mentor->asal_sekolah }}</td>
                        <td>{{ $mentor->status_pendidikan }}</td>
                        <td>
                            @if ($mentor->program->isNotEmpty())
                                {{ $mentor->program->pluck('nama_program')->implode(', ') }}
                            @else
                                -
                            @endif
                        </td>
                        <td>{{ $mentor->status === 1 ? 'Aktif' : 'Nonaktif' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="13">Tidak ada data mentor.</td>
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
