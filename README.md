# RENTCANG | Vehicle Rental Web Application

## Description

Vehicle Rental Services Web Application is a web-based platform designed to facilitate users in renting vehicles and transport-related services. Through this application, users can conveniently rent various types of vehicles such as cars and motorcycles using an online system.

   ![Poster](https://pbl.polibatam.ac.id/apps/image.php?file=dXBsb2Fkcy9wYmwvMTkxNS8xOTE1X1BPU1RFUi1QQkxfMjAyNDA2MzAucG5n)

---

## Teams
Project Manager:  
Rina Yulius,S.Pd.,M.Eng

Leader:  
3312301114 - Mirza Ardanas

Member:  
3312301097 – Muhammad Adib Fakhri Siregar   
3312301113 – Irfan Nurfauzi
3312301095 - Arfa Aniq Sabila
3312301100 - Hafivah Tahta Rasyida

---

## How to Start the Project

### 1. Clone this repository
***Clone repository ke komputer lokal Anda menggunakan perintah berikut:***
 ```bash
https://github.com/Adib-F/RentCar.git
```

### 2. Masuk ke Direktori Proyek  
***Setelah repository berhasil di-clone, pindah ke direktori proyek:***
```bash
cd RentCar
```

### 3. Install Dependencies
***Pastikan Composer dan node.js sudah terpasang di sistem Anda, lalu jalankan::***
```bash
composer install
```
```bash
npm install
```

### 4. Update Composer Autoload and Dependencies
***Jalankan perintah berikut untuk memperbarui autoload dan dependencies:***
```bash
composer dump-autoload
```

### 5. Rename File .env-example ke .env
***Ubah nama file .env-example menjadi .env. Anda bisa melakukannya langsung di terminal:***
```bash
mv .env-example .env
```

### 6. Generate Application Key
***Generate application key Laravel menggunakan perintah berikut:***
```bash
php artisan key:generate
```

### 7. Launch the App
***Untuk menjalankan aplikasi, gunakan perintah berikut:***
1. Jalankan Laravel Development Server:
```bash
php artisan serve
```
2. Jalankan Vite untuk development assets:
```bash
npm run dev
```

