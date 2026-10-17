# Renn KrustyJajan 🍽️

Aplikasi pemesanan makanan sederhana berbasis Laravel untuk tugas/latihan: katalog menu, pemesanan pelanggan, dan dashboard admin.

## Fitur singkat ✨
- Tampilkan menu & pilih jumlah item
- Submit pesanan (nama + nomor meja)
- Dashboard admin untuk melihat & update status pesanan
- CRUD makanan dengan upload gambar

## Setup cepat 🚀
1. Clone:
```bash
git clone https://github.com/okRennn/renn-krustyjajan.git
cd renn-krustyjajan
```
2. Install PHP deps:
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```
3. Frontend:
```bash
npm install
npm run build   # atau: npm run dev untuk dev
```
4. Jalankan:
```bash
php artisan serve
# buka http://localhost:8000
```

## Contoh kredensial admin (untuk testing) 🔑
- Email: `admin@example.com`  
- Password: `AdminPass123!`

Buat lewat Tinker:
```bash
php artisan tinker
```
Lalu:
```php
use App\Models\User;
use Illuminate\Support\Facades\Hash;

User::create([
  'name' => 'Admin',
  'email' => 'admin@example.com',
  'password' => Hash::make('AdminPass123!'),
  'email_verified_at' => now(),
]);
```

> Jangan gunakan kredensial ini di produksi — hanya untuk pengujian lokal.

## Route utama 🔗
- `/` — halaman pelanggan (menu)
- `/checkout` — submit pesanan
- `/dashboard` — dashboard admin
- `/admin/foods` — kelola makanan

## Lisensi 📜
Project ini bersifat open-source dan dilisensikan di bawah [MIT license](https://opensource.org/licenses/MIT).
