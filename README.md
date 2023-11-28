# kriptografi10


# Enkripsi/Dekripsi One Time Pad di PHP

Ini adalah program PHP sederhana yang mendemonstrasikan enkripsi dan dekripsi menggunakan teknik One Time Pad. One Time Pad adalah algoritma kunci simetris dimana kuncinya sepanjang pesan, dan setiap karakter dienkripsi dengan menggabungkannya dengan karakter yang sesuai di dalam kunci.

## Penggunaan

1. Kloning repositori:

    ``` pesta
    git clone https://github.com/nama-pengguna-anda/one-time-pad-php.git
    cd satu kali-pad-php
    ```

2. Buka file `index.php` di editor teks pilihan Anda.

3. Jalankan program PHP di server lokal atau sebarkan ke server web.

4. Akses program melalui browser web Anda.

5. Masukkan teks biasa dan kunci pada kolom input yang tersedia.

6. Klik tombol "Enkripsi & Dekripsi".

7. Lihat hasil terenkripsi dan dekripsi.

## Penjelasan Program

### Struktur Berkas

- `index.php`: File PHP utama yang berisi bentuk HTML dan logika untuk enkripsi dan dekripsi.

### Fungsi

- `generateKey($plaintextLength)`: Menghasilkan kunci acak berdasarkan panjang teks biasa.

- `encrypt($plaintext, $key)`: Mengenkripsi teks biasa menggunakan teknik One Time Pad.

- `decrypt($ciphertext, $key)`: Mendekripsi ciphertext menggunakan teknik One Time Pad.

### Validasi Masukan

Program memeriksa apakah panjang kunci sama dengan panjang teks biasa. Jika tidak, pesan kesalahan ditampilkan.

### Proses Enkripsi dan Dekripsi

1. Program mengubah teks biasa dan kunci masukan menjadi huruf besar untuk memastikan representasi karakter yang konsisten.

2. Untuk enkripsi, ia mengubah setiap karakter teks biasa dan kunci menjadi ASCII, melakukan operasi XOR, dan mengubah hasilnya kembali menjadi karakter. Hasilnya ditampilkan sebagai ciphertext.

3. Untuk dekripsi, ikuti proses yang sama tetapi sebaliknya untuk mendapatkan teks biasa asli.

## Catatan

- Program ini mengasumsikan penggunaan karakter ASCII huruf besar untuk kesederhanaan.

- Proses enkripsi dan dekripsi dijelaskan di komentar kode sumber.
