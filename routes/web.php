<?php
 
// File: routes/web.php
 
use Illuminate\Support\Facades\Route;
 
// ============================================================
// CONTOH 1: Route paling sederhana - return string
// ============================================================
Route::get('/halo', function () {
    return 'Halo Dunia! Ini adalah halaman pertama saya di Laravel!';
});
 
// ============================================================
// CONTOH 2: Route dengan parameter
// ============================================================
Route::get('/sapa/{Haechan}', function (string $nama) {
    return 'Halo, ' . $nama . '! Selamat datang di Laravel.';
});
 
// ============================================================
// CONTOH 3: Route dengan parameter opsional
// ============================================================
Route::get('/profil/{Rahma?}', function (string $nama = 'Tamu') {
    return 'Profil pengguna: ' . $nama;
});
 
// ============================================================
// CONTOH 4: Route dengan nama (named route)
// ============================================================
// Route::get('/tentang-kami', function () {
//     return view('tentang');
// })->name('tentang');
 
// ============================================================
// CONTOH 5: Route yang mengembalikan JSON
// ============================================================
Route::get('/api/info', function () {
    return response()->json([
        'aplikasi' => 'Belajar Laravel',
        'versi'    => '1.0.0',
        'status'   => 'aktif',
    ]);
});

// File: routes/web.php
 
// Tambahkan route baru untuk halaman halo
Route::get('/halo-blade', function () {
    return view('halo');
});

Route::get('/profil-mahasiswa', function () {
    // Cara 1: Menggunakan array compact()
    $nama  = 'Rahma';
    $nim   = '12345678';
    $jurusan = 'Teknik Informatika';
    $semester = 3;
    $ipk   = 3.75;
 
    return view('profil-mahasiswa', compact('nama', 'nim', 'jurusan', 'semester', 'ipk'));
    // compact() mengambil nama variabel dan nilainya menjadi array
 
    // Cara 2: Menggunakan array manual (ekuivalen dengan cara 1)
    // return view('profil-mahasiswa', [
    //     'nama'     => 'Andi Pratama',
    //     'nim'      => '12345678',
    //     'jurusan'  => 'Teknik Informatika',
    //     'semester' => 3,
    //     'ipk'      => 3.75,
    // ]);
 
    // Cara 3: Menggunakan method with() (method chaining)
    // return view('profil-mahasiswa')

    //     ->with('nama', 'Andi Pratama')
    //     ->with('nim', '12345678');
});


Route::get('/blade-latihan', function () {

    // Data mahasiswa
    $mahasiswas = [
        [
            'nama' => 'Rahma',
            'nim' => '231011',
            'ipk' => 3.85
        ],
        [
            'nama' => 'Aisyah',
            'nim' => '231012',
            'ipk' => 3.45
        ],
        [
            'nama' => 'Budi',
            'nim' => '231013',
            'ipk' => 2.95
        ]
    ];

    // Data produk
    $produk = [
        (object)[
            'nama' => 'Laptop',
            'harga' => 8500000
        ],
        (object)[
            'nama' => 'Mouse',
            'harga' => 150000
        ]
    ];

    // Variabel lainnya
    $nama = 'Rahma';
    $htmlContent = '<b>Belajar Blade Laravel</b>';
    $harga = 1500000;
    $tanggal = '2026-06-03';
    $ipk = 3.75;

    $sudahLogin = false;

    $user = (object)[
        'nama' => 'Rahma Hidayat'
    ];

    $statusMahasiswa = 'aktif';

    return view('blade-latihan', compact(
        'nama',
        'htmlContent',
        'harga',
        'tanggal',
        'ipk',
        'sudahLogin',
        'user',
        'statusMahasiswa',
        'mahasiswas',
        'produk'
    ));
});


Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return 'Halaman Tentang';
})->name('tentang');

Route::get('/kontak', function () {
    return 'Halaman Kontak';
})->name('kontak');

Route::get('/mulai', function () {
    return 'Mulai Belajar Laravel';
});
 
// Halaman Beranda
Route::get('/', function () {
    $fitur = [
        ['icon' => '🚀', 'judul' => 'MVC Architecture', 'desc' => 'Struktur kode yang rapi dan terorganisir'],
        ['icon' => '🗄️', 'judul' => 'Eloquent ORM',     'desc' => 'Akses database dengan cara yang elegan'],
        ['icon' => '🎨', 'judul' => 'Blade Template',   'desc' => 'Template engine yang powerful dan fleksibel'],
        ['icon' => '🔐', 'judul' => 'Security',         'desc' => 'Fitur keamanan bawaan yang komprehensif'],
        ['icon' => '⚡', 'judul' => 'Artisan CLI',      'desc' => 'Command line tool untuk produktivitas'],
        ['icon' => '📦', 'judul' => 'Package Ecosystem', 'desc' => 'Ribuan paket siap pakai dari Composer'],
    ];
    return view('pages.home', compact('fitur'));
})->name('home');
 
// Halaman Tentang
Route::get('/tentang', function () {
    $tim = [
        ['nama' => 'Dina Budhi Utami, M.T.', 'peran' => 'Dosen Pengampu', 'foto' => null],
        ['nama' => 'Firayza',          'peran' => 'Asisten Lab',    'foto' => null],
        ['nama' => 'Fahmy',           'peran' => 'Asisten Lab',    'foto' => null],
    ];
    return view('pages.tentang', compact('tim'));
})->name('tentang');
 
// Halaman Kontak
Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

