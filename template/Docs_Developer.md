# Hehe Framework - Developer Documentation

Framework ini dibangun untuk kecepatan, fleksibilitas, dan standar modern WordPress.

## 🛠️ Stack Teknologi

- **PHP**: Mengikuti standar WordPress Coding Standards.
- **CSS**: Tailwind CSS (v3.x) via JIT Compiler.
- **Build Tool**: NPM Scripts (Tanpa Webpack/Gulp yang rumit).

## 📂 Struktur File Penting

| File / Folder           | Fungsi                | Catatan                                                 |
| ----------------------- | --------------------- | ------------------------------------------------------- |
| `functions.php`         | Konfigurasi inti tema | Enqueue scripts, theme supports, widgets.               |
| `style.css`             | Meta data tema        | **Jangan** tulis CSS di sini. Hanya untuk info tema WP. |
| `src/css/app.css`       | Source CSS utama      | Tulis `@apply` atau custom CSS Anda di sini.            |
| `assets/css/`           | Output CSS            | Folder hasil compile. Jangan edit file di sini.         |
| `inc/theme-options.php` | Customizer API        | Menambah opsi di panel "Appearance > Customize".        |
| `inc/patterns/`         | Block Patterns        | Menambah pola blok Gutenberg custom.                    |
| `template-parts/`       | Komponen modular      | Potongan kecil layout (seperti kartu post).             |

## 🚀 Workflow Development

### 1. Persiapan

Pastikan Node.js terinstall, lalu jalankan:

```bash
npm install
```

### 2. Mode Pengembangan (Watch)

Saat Anda sedang koding (menambah class Tailwind di PHP atau edit CSS):

```bash
npm run dev
```

_Perintah ini akan memantau perubahan file dan meregenerasi CSS secara otomatis._

### 3. Mode Produksi (Build)

Sebelum Anda upload tema ke server live atau klien:

```bash
npm run build
```

_Perintah ini akan mengecilkan (minify) ukuran CSS agar website cepat._

## 💡 Tips Kustomisasi

### Menambah Opsi Baru di Customizer

Buka `inc/theme-options.php`. Copy pola `add_setting` dan `add_control` yang sudah ada. Contoh untuk menambah upload logo:

```php
// Tambahkan di dalam fungsi register
$wp_customize->add_setting('hehe_logo');
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'hehe_logo', array(
    'label' => 'Upload Logo',
    'section' => 'hehe_theme_options',
)));
```

### Menambah Post Type Baru

Buka `functions.php`, uncomment baris `require ... custom-post-types.php`. Lalu edit file `inc/custom-post-types.php`.

### Integrasi Plugin Pihak Ketiga

Gunakan file `inc/plugin-recommendations.php` untuk merekomendasikan plugin wajib bagi user (Library TGM perlu didownload manual).

---

_Happy Coding!_
