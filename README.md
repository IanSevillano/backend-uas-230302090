### 🏥 Backend UAS PBF - Rumah Sakit (CodeIgniter 4)

Repository ini adalah backend untuk aplikasi manajemen data **Pasien dan Obat** pada sistem informasi rumah sakit. Dibangun menggunakan **CodeIgniter 4** dan menyediakan RESTful API yang dapat diakses oleh frontend Laravel.

---

# 🔧 Teknologi

- **PHP 8+**
- **CodeIgniter 4**
- **MySQL / MariaDB**
- **RESTful API**

---

## 🚀 Fitur API

| Endpoint                | Method  | Deskripsi                        |
|-------------------------|---------|----------------------------------|
| `/api/pasien`           | GET     | Menampilkan semua data pasien    |
| `/api/pasien/{id}`      | GET     | Menampilkan 1 data pasien        |
| `/api/pasien`           | POST    | Menambahkan data pasien          |
| `/api/pasien/{id}`      | PUT     | Mengubah data pasien             |
| `/api/pasien/{id}`      | DELETE  | Menghapus data pasien            |
| `/api/obat`             | GET     | Menampilkan semua data obat      |
| `/api/obat/{id}`        | GET     | Menampilkan 1 data obat          |
| `/api/obat`             | POST    | Menambahkan data obat            |
| `/api/obat/{id}`        | PUT     | Mengubah data obat               |
| `/api/obat/{id}`        | DELETE  | Menghapus data obat              |

---

# 🛠️ Langkah Instalasi

Ikuti langkah-langkah di bawah untuk menjalankan backend secara lokal:

# 1. Clone Repository

### git clone https://github.com/Arfa44/backend-uas-230302090.git
### cd backend-uas-230302090


# 3. Install dependensi dengan Composer
### composer install

# 4. Atur Koneksi Database .env
### Ubah bagian berikut di file .env:

### database.default.hostname = localhost
### database.default.database = nama_database_anda
### database.default.username = root
### database.default.password =
### database.default.DBDriver = MySQLi

# 5. Buat Database di phpMyAdmin / MySQL
###Pastikan database yang sama dengan yang diatur di .env sudah dibuat.

# 6. Jalankan Server Lokal
### php spark serve
### Server akan berjalan di http://localhost:8080.
