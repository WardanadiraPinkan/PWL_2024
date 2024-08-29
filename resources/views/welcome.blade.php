<?php
// Sample data - replace with actual data retrieval logic
$ktpData = [
    'provinsi' => 'JAWA TIMUR',
    'kota' => 'KOTA BLITAR',
    'nik' => '3572007001040002',
    'nama' => 'WARDANADIRA PINKAN DWIYUWANDA',
    'tempat_lahir' => 'BLITAR',
    'tanggal_lahir' => '30-01-2004',
    'jenis_kelamin' => 'PEREMPUAN',
    'golongan_darah' => 'A',
    'alamat' => 'JL. ANGKASAWAN NO.108',
    'rt_rw' => '001/002',
    'kelurahan' => 'SANANWETAN',
    'kecamatan' => 'SANANWETAN',
    'agama' => 'ISLAM',
    'status_perkawinan' => 'BELUM KAWIN',
    'pekerjaan' => 'MAHASISWA',
    'kewarganegaraan' => 'WNI',
    'berlaku_hingga' => 'SEUMUR HIDUP'
];

// Function to generate KTP HTML
function generateKTP($data) {
    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kartu Tanda Penduduk</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                margin: 0;
                padding: 20px;
            }
            .ktp-card {
                width: 850px;
                height: 540px;
                background-image: url("KTP 2.jpg");
                background-size: cover;
                border: 1px solid #000;
                margin: 0 auto;
                padding: 20px;
                box-sizing: border-box;
                position: relative;
            }
            .header {
                text-align: center;
                margin-bottom: 20px;
            }
            .title {
                font-size: 18px;
                font-weight: bold;
                margin: 5px 0;
            }
            .content {
                display: flex;
            }
            .left-column {
                width: 65%;
            }
            .right-column {
                width: 35%;
            }
            .field {
                margin-bottom: 5px;
            }
            .label {
                font-weight: bold;
                display: inline-block;
                width: 150px;
            }
            .photo-placeholder {
                width: 200px;
                height: 250px;
                border: 1px solid #000;
                margin-top: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .signature {
                position: absolute;
                bottom: 20px;
                right: 20px;
                text-align: center;
            }
            .signature img {
                width: 150px;
                height: auto;
            }
        </style>
    </head>
    <body>
        <div class="ktp-card">
            <div class="header">
                <div class="title">PROVINSI ' . $data['provinsi'] . '</div>
                <div class="title">' . $data['kota'] . '</div>
            </div>
            <div class="content">
                <div class="left-column">
                    <div class="field"><span class="label">NIK</span><span>: ' . $data['nik'] . '</span></div>
                    <div class="field"><span class="label">Nama</span><span>: ' . $data['nama'] . '</span></div>
                    <div class="field"><span class="label">Tempat/Tgl Lahir</span><span>: ' . $data['tempat_lahir'] . ', ' . $data['tanggal_lahir'] . '</span></div>
                    <div class="field"><span class="label">Jenis Kelamin</span><span>: ' . $data['jenis_kelamin'] . '</span></div>
                    <div class="field"><span class="label">Gol. Darah</span><span>: ' . $data['golongan_darah'] . '</span></div>
                    <div class="field"><span class="label">Alamat</span><span>: ' . $data['alamat'] . '</span></div>
                    <div class="field"><span class="label">RT/RW</span><span>: ' . $data['rt_rw'] . '</span></div>
                    <div class="field"><span class="label">Kel/Desa</span><span>: ' . $data['kelurahan'] . '</span></div>
                    <div class="field"><span class="label">Kecamatan</span><span>: ' . $data['kecamatan'] . '</span></div>
                    <div class="field"><span class="label">Agama</span><span>: ' . $data['agama'] . '</span></div>
                    <div class="field"><span class="label">Status Perkawinan</span><span>: ' . $data['status_perkawinan'] . '</span></div>
                    <div class="field"><span class="label">Pekerjaan</span><span>: ' . $data['pekerjaan'] . '</span></div>
                    <div class="field"><span class="label">Kewarganegaraan</span><span>: ' . $data['kewarganegaraan'] . '</span></div>
                    <div class="field"><span class="label">Berlaku Hingga</span><span>: ' . $data['berlaku_hingga'] . '</span></div>
                </div>
                <div class="right-column">
                    <div class="photo-placeholder">
                        <img src="foto.jpg" alt="Foto KTP">
                    </div>
                </div>
            </div>
            <div class="signature">
                <img src="TTD.png" alt="Tanda Tangan">
            </div>
        </div>
    </body>
    </html>';

    return $html;
}

// Generate and output the KTP HTML
echo generateKTP($ktpData);