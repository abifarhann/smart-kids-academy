<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Raport Bulanan</title>
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
            background-color: rgba(255, 255, 255, 0.85);
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .info .left,
        .info .right {
            width: 48%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
        }

        .section-title {
            background-color: #ccc;
            font-weight: bold;
            padding: 4px;
            margin-top: 10px;
        }

        .summary-box {
            border: 1px solid #000;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
{{-- @dd($siswa, $raports, $semester, $tahunAjar, $saran) --}}

<body>
    <div class="overlay">
        <div class="header">
            <h2>LAPORAN EVALUASI BULAN {{ strtoupper($bulan) }}</h2>
            <h3>SMARTKIDS ACADEMY</h3>
            <p>Jl Pendidikan No 11 Gedeg Mojokerto, GG Cinta II Beratwetan Mojokerto</p>
            <p>No Telp: +62 877-2109-9337 | Instagram : smartkidsacademy__</p>
        </div>
        <table
            style="width: 100%; margin-top: 20px; font-size: 14px; border: none !important; border-collapse: collapse;">
            <tr style="border: none !important;">
                <td style="width: 50%; text-align: left; border: none !important;">
                    <strong>Nama:</strong> {{ $siswa->nama }}<br>
                    <strong>Nama Wali:</strong> {{ $siswa->wali->name ?? '-' }}<br>
                    <strong>Program Bimbel:</strong> {{ $siswa->program->nama_program ?? '-' }}
                </td>
                <td style="width: 50%; text-align: left; border: none !important;">
                    <strong>Kelas:</strong> {{ $siswa->kelas ?? '-' }}<br>
                    <strong>Asal Sekolah:</strong> {{ $siswa->asal_sekolah }}<br>
                    <strong>Tahun Ajaran:</strong> {{ $tahunAjar }}<br>
                    <strong>Semester:</strong> {{ $semester }}
                </td>
            </tr>
        </table>


        <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>

        <div class="section-title">MATA PELAJARAN</div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <th>Evaluasi Bulanan</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($raports as $i => $r)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td style="text-align: left">{{ $r->mapel->nama }}</td>
                        <td>{{ $r->nilai }}</td>
                        <td>
                            @php
                                if ($r->nilai >= 85) {
                                    $grade = 'A';
                                } elseif ($r->nilai >= 70) {
                                    $grade = 'B';
                                } else {
                                    $grade = 'C';
                                }
                            @endphp
                            {{ $grade }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- <p><strong>Kehadiran:</strong> {{ $siswa->kehadiran }}/{{ $siswa->total_hari }} hari</p> --}}

        <div class="note-box">
            <div class="note">
                <strong>Keterangan Penilaian</strong>
                <p>A: >= 85 (Sangat Baik)</p>
                <p>B: >= 70 (Baik)</p>
                <p>C: <= 70 (Cukup)</p>
            </div>
            <div class="note">
                <strong>Catatan</strong>
                <p>{{ $raports->first()->catatan ?? '-' }}</p>
            </div>
            <div class="note">
                <strong>Saran untuk orang tua/wali</strong>
                <p>{{ $saran }}</p>
            </div>
        </div>

        <table
            style="width: 100%; margin-top: 80px; font-size: 14px; border: none !important; border-collapse: collapse;">
            <tr style="border: none !important;">
                <td style="width: 40%; text-align: center; border: none !important;">
                    <p>Mengetahui,</p>
                    <p><strong>Orang Tua / Wali</strong></p>
                    <br><br><br>
                    <p>__________________</p>
                </td>
                <td style="width: 20%; text-align: center; border: none !important;">

                </td>
                <td style="width: 40%; text-align: center; border: none !important;">
                    <p>Mojokerto, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
                    <p><strong>Admin Akademik</strong></p>
                    <br><br><br>
                    <p>__________________</p>
                </td>
            </tr>
        </table>

    </div>
</body>

</html>
