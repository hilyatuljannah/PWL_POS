# 1. Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel?

Pada file pengaturan .env dalam Laravel, APP_KEY merupakan sebuah kunci aplikasi yang mana akan digunakan untuk mengenkripsi, dekripsi data, dan  menjaga keamanan aplikasi.

# 2. Bagaimana kita men-generate nilai untuk APP_KEY?

- Membuka Command Prompt
- Masuk kedalam file direktori dari proyek PWL_POS
- Memasukkan kode 'php artisan key:generate'
- Maka nilai APP_KEY akan tergenerate secara otomatis

# 3. Secara default Laravel memiliki berapa file migrasi? dan untuk apa saja file migrasi tersebut?
Ada 4 file migrasi yang ada secara default di laravel, yaitu :

- 2014_10_12_000000_create_users_table, berfungsi untuk membuat tabel pengguna (users) di dalam basis data aplikasi Laravel. 
- 2014_10_12_100000_create_password_reset_tokens_table, fungsi utama dari tabel password_resets ini adalah  menyimpan token pengaturan ulang kata sandi (password reset tokens) untuk pengguna yang lupa kata sandi mereka.
- 2019_08_19_000000_create_failed_jobs_table, digunakan untuk menyimpan informasi tentang pekerjaan (jobs) yang gagal dieksekusi oleh sistem antrian (queue) dalam aplikasi Laravel.
- 2019_12_14_000001_create_personal_access_tokens_table, digunakan untuk menyimpan token akses personal yang diberikan kepada pengguna untuk mengotentikasi permintaan API.

# 4. Secara default, file migrasi terdapat kode $table->timestamps();, apa tujuan/output dari fungsi tersebut?

Fungsi kode tersebut digunakan untuk menambahkan dua kolom ke tabel yang sedang dibuat, yaitu created_at dan updated_at. Kolom-kolom ini secara otomatis akan diisi oleh Laravel ketika baris baru dimasukkan ke dalam tabel (created_at) dan ketika baris tersebut diubah (updated_at).

# 5. Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari fungsi tersebut?

Fungsi ini akan membuat kolom dengan nama id yang bertipe data UNSIGNED BIG INTEGER dan memiliki sifat auto-increment.

# 6. Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id(); dengan menggunakan $table->id('level_id'); ?

- Ketika menggunakan $table->id();, Laravel secara otomatis akan membuat kolom primary key dengan nama id. 
- Sedangkan jika menggunakan $table->id('level_id');, maka 'level_id' akan dijadikan nama kolom yang ingin  digunakan sebagai primary key.

# 7. Pada migration, Fungsi ->unique() digunakan untuk apa?

Fungsinya adalah untuk menentukan bahwa suatu kolom di dalam sebuah tabel harus memiliki nilai yang unik di antara semua baris dalam tabel tersebut. Ini berarti setiap nilai di kolom tersebut hanya boleh muncul satu kali di dalam tabel.

# 8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user menggunakan $tabel->unsignedBigInteger('level_id'), sedangkan kolom level_id pada tabel m_level menggunakan $tabel->id('level_id') ?

Pada tabel m_level, kolom level_id merupakan primary key, sedangkan pada tabel m_user, kolom ini digunakan sebagai foreign key.

# 9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode program Hash::make('1234');?

Hash pada Laravel digunakan untuk melakukan hashing atau mengacakkan nilai data, sedangkan maksud dari kode program Hash::make('1234'); adalah nilai 1234 akan diacak dengan metode hash supaya password asal tidak dapat dilacak.

# 10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa kegunaan dari tanda tanya (?) tersebut?
  
Kegunaan utama dari tanda tanya (?) tersebut adalah untuk menandai posisi di mana nilai parameter akan diikatkan ke dalam query.

# 11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table = ‘m_user’; dan protected $primaryKey = ‘user_id’; ?

Penulisan kode protected $table = 'm_user'; dan protected $primaryKey = 'user_id'; bertujuan untuk menentukan nama tabel dan primary key yang terkait dengan model eloquent User.

# 12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke database (DB Façade / Query Builder / Eloquent ORM) ? jelaskan

Menurut saya lebih mudah melakukan CRUD ke database menggunakan Query Builder, karena Query Builder lebih mudah dipahami kode penggunaannya, dan juga implementasinya sederhana untuk digunakan.