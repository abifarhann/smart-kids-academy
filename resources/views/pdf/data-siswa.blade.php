<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 11px;
            margin: 0;
            padding: 20px;
            background-image: url('data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/logo/logo-unfix.png'))) }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .overlay {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h2,
        .header h3 {
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
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

        td {
            font-size: 10px;
        }

        .info {
            font-size: 12px;
            margin-top: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="overlay">
        <div class="header">
            <h2>DATA SISWA</h2>
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
                    <th>Tempat, Tgl Lahir</th>
                    <th>Alamat</th>
                    <th>Jk</th>
                    <th>Wali</th>
                    <th>Tgl Masuk</th>
                    <th>WA</th>
                    <th>Jenjang</th>
                    <th>Asal Sekolah</th>
                    <th>Kelas</th>
                    <th>Program</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataSiswa as $index => $siswa)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td style="text-align: left;">{{ $siswa->nama }}</td>
                        <td>{{ $siswa->tempat_lahir }}, {{ \Carbon\Carbon::parse($siswa->tgl_lahir)->format('d-m-Y') }}
                        </td>
                        <td style="text-align: left;">{{ $siswa->alamat }}</td>
                        <td>{{ $siswa->jenis_kelamin }}</td>
                        <td>{{ $siswa->wali->name ?? '-' }}</td>
                        <td>{{ \Carbon\Carbon::parse($siswa->tgl_mulai)->format('d-m-Y') }}</td>
                        <td>{{ $siswa->phone }}</td>
                        <td>{{ $siswa->tingkatPendidikan->nama ?? '-' }}</td>
                        <td>{{ $siswa->asal_sekolah }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>{{ $siswa->program->nama_program ?? '-' }}</td>
                        <td>{{ $siswa->status == 1 ? 'Aktif' : 'Nonaktif' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="13">Tidak ada data siswa.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div style="margin-top: 80px; width: 100%; text-align: right; font-size: 12px;">
            <p>Mojokerto, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
            <p><strong>Admin Akademik SKA</strong></p>
            <br><br><br>
            <p>__________________________</p>
        </div>
    </div>
</body>

</html>
