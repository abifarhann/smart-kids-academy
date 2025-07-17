<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Nilai Semester</title>
    <style>
        @page {
            margin: 30px 20px;
            background: none !important;
        }

        body {
            font-family: sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 10px;
        }

        .overlay {
            padding: 15px;
        }

        .header {
            text-align: center;
            margin-bottom: 15px;
        }

        .header h2,
        .header h3 {
            margin: 0;
        }

        .header p {
            margin: 2px 0;
            font-size: 11px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 8px;
            font-size: 11px;
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
            font-size: 12px;
            margin-bottom: 8px;
        }

        .table-container {
            page-break-inside: avoid;
            margin-bottom: 40px;
        }

        .siswa-header {
            margin-top: 15px;
            font-size: 12px;
        }

        .nilai-empty {
            text-align: center;
            font-style: italic;
            font-size: 11px;
            padding: 8px;
            border: 1px solid #ccc;
            margin-top: 5px;
        }

        .ttd {
            margin-top: 80px;
            width: 100%;
            text-align: right;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="overlay">
        <div class="header">
            <h2>DATA NILAI SEMESTER SISWA</h2>
            <h3>SMARTKIDS ACADEMY</h3>
            <p>Jl Pendidikan No 11 Gedeg Mojokerto, GG Cinta II Beratwetan Mojokerto</p>
            <p>No Telp: +62 877-2109-9337 | Instagram : smartkidsacademy__</p>
        </div>

        <p class="info"><strong>Tanggal Cetak:</strong> {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>

        @forelse($dataSiswa as $siswa)
            @php
                $groupedRaport = $siswa->raport->groupBy('group_id');
            @endphp

            @foreach ($groupedRaport as $group)
                @php
                    $firstRaport = $group->first();
                @endphp

                <div class="table-container">
                    <div class="siswa-header">
                        <strong>Nama:</strong> {{ $siswa->nama }}<br>
                        <strong>Program:</strong> {{ $siswa->program->nama_program ?? '-' }} |
                        <strong>Kelas:</strong> {{ $siswa->kelas ?? '-' }} |
                        <strong>Asal Sekolah:</strong> {{ $siswa->asal_sekolah ?? '-' }}<br>
                        <strong>Tahun Ajaran:</strong> {{ $firstRaport->tahun_ajar ?? '-' }} |
                        <strong>Semester:</strong> {{ $firstRaport->semester ?? '-' }} |
                        <strong>Bulan:</strong>
                        {{ \Carbon\Carbon::parse($firstRaport->tanggal_penilaian)->translatedFormat('F') }}
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mata Pelajaran</th>
                                <th>Nilai</th>
                                <th>Saran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($group as $index => $raport)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td style="text-align: left;">{{ $raport->mapel->nama }}</td>
                                    <td>{{ $raport->nilai }}</td>
                                    <td style="text-align: left;">{{ $raport->saran }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach

        @empty
            <p class="nilai-empty">Tidak ada data siswa ditemukan.</p>
        @endforelse

        <div class="ttd">
            <p>Mojokerto, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
            <p><strong>Admin Akademik SKA</strong></p>
            <br><br><br>
            <p>__________________________</p>
        </div>
    </div>
</body>

</html>
