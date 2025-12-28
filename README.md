# Hehe Framework

Ini adalah monorepo untuk generator tema WordPress "Hehe Framework".

## Cara Install & Pemakaian

Karena ini sudah didesain sebagai NPM Package, Anda **tidak perlu menginstalnya** secara manual jika sudah di-publish.

Cukup jalankan:

```bash
npx create-hehe-theme nama-tema-baru
```

### Untuk Development Lokal (Jika belum publish ke NPM)

1. Masuk ke folder ini.
2. Link ke global npm:
   ```bash
   npm link
   ```
3. Keluar ke folder lain, lalu coba generate:
   ```bash
   create-hehe-theme test-tema
   ```

## Struktur

- `bin/`: Script eksekusi CLI.
- `template/`: Master file tema WordPress yang akan dicopy.
