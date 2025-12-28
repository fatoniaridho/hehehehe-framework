# Hehe Framework - WordPress + Tailwind CSS

Tema ini sudah terintegrasi dengan Tailwind CSS dan Server Lokal Otomatis.

## Cara Menjalankan (Paling Mudah)

Kita menggunakan **`wp-now`**. Ini adalah alat canggih yang menjalankan WordPress langsung dari folder ini menggunakan Node.js (tanpa install XAMPP/Laragon/LocalWP).

### 1. Persiapan

Pastikan Anda sudah menginstall Node.js (Wajib). Lalu buka terminal di folder ini.

### 2. Jalankan Server WordPress

Ketik perintah ini:

```bash
npm run wp
```

Atau jika ingin menjalankannya langsung tanpa setup script:

```bash
npx @wp-now/wp-now start
```

Tunggu sebentar, browser Anda akan otomatis terbuka dan login ke WordPress dengan tema ini yang sudah aktif!

### 3. Jalankan Tailwind (Untuk Desain)

Buka terminal **baru** (terminal kedua), lalu ketik:

```bash
npm run dev
```

Ini agar CSS Anda otomatis ter-update saat Anda mengubah file.

---

## Struktur File Assets

- `src/css/app.css`: Tulis custom CSS atau @apply disini.
- `assets/css/app.css`: File output otomatis (jangan diedit manual).
