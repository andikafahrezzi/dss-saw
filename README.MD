# Implementasi Metode SAW: Pencarian Kota Wisata Terbaik untuk Warga Jakarta

Aplikasi website ini merupakan implementasi metode **Simple Additive Weighting (SAW)** untuk membantu warga Jakarta menentukan kota wisata terbaik berdasarkan beberapa kriteria yang telah ditentukan.


##Login :
username : admin
password : admin

## 📌 Deskripsi Proyek
Website ini dirancang menggunakan **native PHP** tanpa framework tambahan. Sistem mendukung proses penilaian dan perhitungan SAW dengan menyediakan antarmuka yang intuitif dan mudah digunakan.

### Fitur Utama:
1. **Input Data Alternatif dan Kriteria**: Memungkinkan pengguna untuk menambahkan atau memperbarui data kota wisata dan kriteria penilaian.
2. **Perhitungan SAW Otomatis**: Sistem menghitung nilai preferensi untuk setiap alternatif berdasarkan bobot kriteria yang dimasukkan.
3. **Hasil Akhir**: Menampilkan hasil perhitungan dan rekomendasi kota wisata terbaik.
4. **File Pendukung**:
   - File database (`.sql`) untuk kemudahan setup.
   - Contoh perhitungan dalam format Excel untuk memverifikasi keakuratan sistem.

### Alternatif Kota:
1. Bandung
2. Malang
3. Semarang
4. Jogja

### Kriteria Penilaian:
1. **Biaya** (Cost)
2. **Jarak** (Benefit)
3. **Fasilitas** (Benefit)
4. **Popularitas** (Benefit)
5. **Keamanan** (Benefit)

## 🛠️ Teknologi yang Digunakan
- **Bahasa Pemrograman**: PHP (Native)
- **Database**: MySQL
- **Antarmuka**: HTML, CSS, Boostrap dan JavaScript
- **File Pendukung**: Microsoft Excel

## 📂 dss-saw
```├── index.php           # Halaman utama aplikasi
```├── ranking.php       # Proses perhitungan SAW
📁 assets/
      ├── styles.css          # File gaya untuk antarmuka
📁 include
   ├── c.php        # File koneksi database
📁 database/
   └── saw_database.sql    # File database aplikasi
📁 excel/
   └── example_calculation.xlsx  # Contoh perhitungan SAW
