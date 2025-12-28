#!/usr/bin/env node
const fs = require("fs");
const path = require("path");
const readline = require("readline");

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout,
});

console.log("==========================================");
console.log("   HEHE FRAMEWORK - THEME GENERATOR CLI   ");
console.log("==========================================");

rl.question("Masukkan Nama Tema Baru (contoh: Toko Online): ", (themeName) => {
  rl.question("Masukkan Slug/ID Tema (contoh: toko-online): ", (themeSlug) => {
    rl.question("Masukkan Prefix Fungsi (contoh: toko_): ", (funcPrefix) => {
      // Validasi input sederhana
      if (!themeSlug || !funcPrefix) {
        console.error("Error: Slug dan Prefix wajib diisi!");
        rl.close();
        return;
      }

      const sourceDir = path.join(__dirname, "..", "template");
      const targetDir = path.resolve(process.cwd(), themeSlug); // Create in current working directory of the user

      console.log(`\nSedang membuat tema baru di: ${targetDir}...`);

      // Copy Files & Replace Content
      copyRecursiveSync(sourceDir, targetDir, themeName, themeSlug, funcPrefix);

      console.log("\n==========================================");
      console.log("✅ SUKSES! Tema baru telah dibuat.");
      console.log(`📂 Lokasi: ${targetDir}`);
      console.log("==========================================");
      console.log("Langkah selanjutnya:");
      console.log(`1. cd ../${themeSlug}`);
      console.log("2. npm install");
      console.log("3. npm run dev");

      rl.close();
    });
  });
});

function copyRecursiveSync(src, dest, name, slug, prefix) {
  const exists = fs.existsSync(src);
  const stats = exists && fs.statSync(src);
  const isDirectory = exists && stats.isDirectory();

  if (isDirectory) {
    if (
      path.basename(src) === "node_modules" ||
      path.basename(src) === ".git" ||
      path.basename(src) === "bin"
    )
      return; // Skip folder sampah

    if (!fs.existsSync(dest)) {
      fs.mkdirSync(dest);
    }

    fs.readdirSync(src).forEach((childItemName) => {
      copyRecursiveSync(
        path.join(src, childItemName),
        path.join(dest, childItemName),
        name,
        slug,
        prefix
      );
    });
  } else {
    // Jika file, baca isinya -> replace kata kunci -> tulis ke tujuan
    let content = fs.readFileSync(src, "utf8");

    // REPLACE LOGIC (The "Framework" Magic)
    // 1. Ganti 'Hehe Framework' -> Nama Baru
    content = content.replace(/Hehe Framework/g, name);
    // 2. Ganti 'hehe-framework' (TextDomain) -> Slug Baru
    content = content.replace(/hehe-framework/g, slug);
    // 3. Ganti 'hehe_' (Function Prefix) -> Prefix Baru
    content = content.replace(/hehe_/g, prefix);
    content = content.replace(/Hehe_/g, capitalize(prefix));

    fs.writeFileSync(dest, content);
  }
}

function capitalize(s) {
  return s.charAt(0).toUpperCase() + s.slice(1);
}
