# $fillable

1. Buka file model dengan nama UserModel.php dan tambahkan $fillable seperti gambar
di bawah ini
![alt text](<Screenshot 2024-03-08 084429.png>)
2. Buka file controller dengan nama UserController.php dan ubah script untuk
menambahkan data baru seperti gambar di bawah ini
![alt text](<Screenshot 2024-03-08 084708.png>)
3. Hasil pada browser
![alt text](<Screenshot 2024-03-08 084820.png>)
4. Ubah kembali UserModel.php dan UserController.php dan tampilkan hasilnya
![alt text](<Screenshot 2024-03-08 085403.png>)

# Retrieving Single Models

1.  Ubah script pada UserController.php dan user.blade.php
![alt text](<Screenshot 2024-03-08 090422.png>)
2. Hasilnya
![alt text](<Screenshot 2024-03-08 091138.png>)
3. Ubah script dan tampilkan
![alt text](<Screenshot 2024-03-08 091138-1.png>)
4. Ubah script untuk menggunakan find0r
![alt text](<Screenshot 2024-03-10 160530.png>)

# Not Found Exception

1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar
di bawah ini
![alt text](<Screenshot 2024-03-10 163325.png>)
2. Hasilnya
![alt text](<Screenshot 2024-03-10 163601.png>)
3. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![alt text](<Screenshot 2024-03-10 163701.png>)
4. Hasilnya 
![alt text](<Screenshot 2024-03-10 161310.png>)

# Retreiving Aggregrates

1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![alt text](<Screenshot 2024-03-10 164041.png>)
2. Hasilnya
![alt text](<Screenshot 2024-03-10 164251.png>)
3. Buat agar jumlah script pada langkah 1 bisa tampil pada halaman browser, sebagai contoh bisa lihat gambar di bawah ini dan ubah script pada file view supaya bisa muncul datanya
![alt text](<Screenshot 2024-03-10 170251.png>)
![alt text](<Screenshot 2024-03-10 170320.png>)
![alt text](<Screenshot 2024-03-10 170342.png>)

# Retreiving or Creating Models

1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![alt text](<Screenshot 2024-03-10 171055.png>)
2. Ubah kembali file view dengan nama user.blade.php dan ubah script seperti gambar di bawah ini
![alt text](<Screenshot 2024-03-10 171213.png>)
3. Hasilnya 
![alt text](<Screenshot 2024-03-10 171252.png>)
4. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![alt text](<Screenshot 2024-03-10 171656.png>)
5. Simpan kode program Langkah 4. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user 
![alt text](<Screenshot 2024-03-10 171641.png>)
![alt text](<Screenshot 2024-03-10 171849.png>)
6. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![alt text](<Screenshot 2024-03-10 172131.png>)
7. Hasilnya 
![alt text](<Screenshot 2024-03-10 172058.png>)
8. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![alt text](<Screenshot 2024-03-10 172227.png>)
9. Hasilnya
![alt text](<Screenshot 2024-03-10 172240.png>)
10. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![alt text](<Screenshot 2024-03-10 172505.png>)
11. Hasilnya
![alt text](<Screenshot 2024-03-10 172512.png>)
![alt text](<Screenshot 2024-03-10 172526.png>)

# Attribute Changes

1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![alt text](<Screenshot 2024-03-10 173546.png>)
2. Hasilnya 
![alt text](<Screenshot 2024-03-10 173551.png>)
3. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini
![alt text](<Screenshot 2024-03-10 174018.png>)
4. Hasilnya 
![alt text](<Screenshot 2024-03-10 174024.png>)

# Create, Read, Update, Delete (CRUD)

1. Buka file view pada user.blade.php dan buat scritpnya menjadi seperti di bawah ini
![alt text](<Screenshot 2024-03-11 154853.png>)
2. Buka file controller pada UserController.php dan buat scriptnya untuk read menjadi seperti di bawah ini
![alt text](<Screenshot 2024-03-11 154900.png>)
3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser
![alt text](<Screenshot 2024-03-11 154913.png>)
4. Langkah berikutnya membuat create atau tambah data user dengan cara bikin file baru pada view dengan nama user_tambah.blade.php dan buat scriptnya menjadi seperti di bawah ini
![alt text](<Screenshot 2024-03-11 162329.png>)
5. Langkah berikutnya membuat create atau tambah data user dengan cara bikin file baru pada view dengan nama user_tambah.blade.php dan buat scriptnya menjadi seperti di bawah ini
![alt text](<Screenshot 2024-03-11 162336.png>)
6. Hasilnya
![alt text](<Screenshot 2024-03-11 162356.png>)
![alt text](<Screenshot 2024-03-11 170237.png>)
7. Langkah berikutnya membuat update atau ubah data user dengan cara bikin file baru pada view dengan nama user_ubah.blade.php dan buat scriptnya menjadi seperti di bawah ini
![alt text](<Screenshot 2024-03-12 135331.png>)
8. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![alt text](<Screenshot 2024-03-12 135429.png>)
9. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama ubah dan diletakan di bawah method tambah_simpan seperti gambar di bawah ini
![alt text](<Screenshot 2024-03-12 135531.png>)
10. Simpan kode program Langkah 11 sd 13. Kemudian jalankan pada browser dan klik link “Ubah” 
![alt text](<Screenshot 2024-03-12 135219.png>)
11. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![alt text](<Screenshot 2024-03-15 084058.png>)
12. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama ubah dan uban_simpan dan diletakan di bawah method tambah_simpan seperti gambar di bawah ini
![alt text](<Screenshot 2024-03-15 084253.png>)
13. Hasilnya
 ![alt text](<Screenshot 2024-03-15 084402.png>)
14. Berikut untuk langkah delete . Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini
![alt text](<Screenshot 2024-03-15 084625.png>)
15. Tambahkan script pada controller dengan nama file UserController.php
![alt text](<Screenshot 2024-03-15 084747.png>)
16. Simpan kode program Langkah 14 dan 15. Kemudian jalankan pada browser dan klik tombol hapus.
![alt text](<Screenshot 2024-03-15 084927.png>)
