# 🏡 Sistem Kependudukan - Tes Magang

Aplikasi berbasis Laravel untuk mengelola data kependudukan, termasuk penduduk, keluarga, pekerjaan, pendidikan, dan fitur ekspor serta cetak data.

---

## 🚀 Fitur Utama

- CRUD data penduduk, keluarga, pekerjaan, pendidikan
- Export ke Excel & PDF
- Cetak struk
- Notifikasi via Email (SMTP)
- Tampilan responsif dengan AdminLTE
- Import data dari Excel

---

## ⚙️ Cara Menjalankan Project Laravel Ini

### 1. Clone Repository
```bash
git clone https://github.com/DimasArya1405/sistem-kependudukan-tes-magang-.git
cd sistem-kependudukan-tes-magang-
```

### 2. Install Dependensi
```bash
composer install
npm install && npm run dev
```

### 3. Copy File `.env`
```bash
cp .env.example .env
```

> Kalau di Windows:
```bash
copy .env.example .env
```

### 4. Generate Key
```bash
php artisan key:generate
```

### 5. Setup Database
- Buat database baru di MySQL, contoh: `kependudukan_db`
- Update konfigurasi `.env`:
```env
DB_DATABASE=kependudukan_db
DB_USERNAME=root
DB_PASSWORD=yourpassword
```

---

## 🛠️ Menjalankan Migration dan Seeder (Opsional)
```bash
php artisan migrate --seed
```

> **Atau** jika kamu diberikan file `.sql`, lihat langkah berikut.

---

## 🧩 Import Data SQL ke Database

Jika sudah disediakan file SQL, misalnya `database.sql`, lakukan:

1. Buka phpMyAdmin atau MySQL
2. Pilih database `kependudukan_db`
3. Klik **Import** dan unggah `database.sql`

---

## ✅ Menjalankan Aplikasi
```bash
php artisan serve
```

Buka di browser:  
[http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🔐 Login (Jika Ada Autentikasi)

| Email               | Password |
|---------------------|----------|
| admin@example.com   | password |

> **Catatan**: Ubah sesuai data pengguna di database kamu.

---

## 📬 Konfigurasi Email (SMTP)

Edit `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_email@gmail.com
MAIL_FROM_NAME="Sistem Kependudukan"
```

---

## 📦 Build Frontend (Jika Perlu)

```bash
npm run build
```

---

## 🧑‍💻 Kontribusi

Pull request dipersilakan! Untuk perubahan besar, harap buka issue terlebih dahulu untuk mendiskusikan apa yang ingin diubah.

---

## ⚖️ Lisensi

[MIT](LICENSE)
