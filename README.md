# UTS Web Framework: Portofolio Personal

### Oleh:
**Raihanul Mawa** (NIM: 22260013)

[![Twitter Follow](https://img.shields.io/twitter/follow/mwrayhan22?style=social)](https://x.com/mwrayhan22)

---

## Deskripsi Proyek

Proyek ini merupakan pengerjaan Ujian Tengah Semester (UTS) mata kuliah **Web Framework**. Aplikasi yang dikembangkan adalah *website* portofolio statis yang dibangun menggunakan **PHP 8.x** dengan *framework* **CodeIgniter 4**.

## Poin Penilaian

### 1. Source Code Proyek

* **Implementasi Template:**
    * Website portofolio dibuat berdasarkan template MyResume.
        * Template dapat diunduh di: [MyResume - BootstrapMade](https://bootstrapmade.com/free-html-bootstrap-template-my-resume/)
    * **Integrasi CodeIgniter 4:**
        * Instalasi *framework* CodeIgniter 4.
        * Pemanfaatan aset (CSS, JS, gambar) dari template MyResume yang diletakkan di direktori `public` CI4.
        * Konfigurasi *framework* dengan mengatur *routing* `Home` pada `app/Controllers`.
        * Menyiapkan *view* `v_home.php` pada `app/Views` yang berisi kode HTML dari `index.html` template MyResume.
* **Konten Portofolio:**
    * Seluruh konten portofolio diisi dengan informasi tentang diri Anda (profil, keahlian, pengalaman, dll.).

### 2. Repository GitHub (30 Poin)

* **Nama Repository:**
    * Repository GitHub dibuat dengan nama `project2`.
* **Manajemen Versi:**
    * Setiap perkembangan proyek di-*commit* dan di-*push* ke repository GitHub.

---

## Cara Menjalankan Proyek (Opsional - Sangat Direkomendasikan Ditambahkan)

Untuk menjalankan proyek ini secara lokal, ikuti langkah-langkah berikut:

1.  **Clone Repository:**
    ```bash
    git clone [https://github.com/your-username/project2.git](https://github.com/your-username/project2.git)
    cd project2
    ```
    *(Ganti `your-username` dengan username GitHub Anda)*

2.  **Instalasi Composer (jika belum):**
    * Pastikan Composer terinstal di sistem Anda. Jika belum, ikuti panduan instalasi Composer.

3.  **Instalasi Dependensi:**
    ```bash
    composer install
    ```

4.  **Konfigurasi Environment:**
    * Salin file `env` menjadi `.env`:
        ```bash
        cp env .env
        ```
    * Buka file `.env` dan atur `app.baseURL` jika diperlukan (misal: `app.baseURL = 'http://localhost:8080/'`).
    * *(Opsional): Atur `CI_ENVIRONMENT = development` untuk melihat pesan error secara detail.*

5.  **Jalankan Server Lokal:**
    ```bash
    php spark serve
    ```

6.  **Akses Aplikasi:**
    * Buka *browser* Anda dan kunjungi alamat yang ditampilkan oleh `php spark serve` (biasanya `http://localhost:8080`).

---

## Struktur Proyek (Opsional - Sangat Direkomendasikan Ditambahkan)