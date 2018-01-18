Cara Install Yii2 Framework
============================

Cara Install Yii2 Framework tanpa Composer(Offline)

1. Download File Yii2 Framework di "https://github.com/yiisoft/yii2/releases/download/2.0.6/yii-advanced-app-2.0.6.tgz" (sesuaikan dengan laptop kalian)
2. Selanjutnya Extract file tadi di htdocs Contoh: "c:/xampp/htdocs/basic atau c:/xampp/htdocs/advanced".
3. Kemudian buka CMD (command Promt) ketikkan 
"cd /"
"cd xampp/php"
"php.exe c:/xampp/htdocs/advanced/init"
4. Buka "http://localhost/phpmyadmin" lalu  buat database baru, untuk penamaan bebas dan bisa di beri nama seperti “yii2” setelah membuat database selanjutnya buka file buka file main-local.php "c:/xampp/htdocs/advanced/common/config/main-local.php".
5. Selanjutnya ubah dbname dengan nama database yang td telah di buat.
6. Selanjutnya kembali ke CMD ketikkan "cd xampp/php/php.exe c:/xampp/htdocs/advanced/yii migrate"
7. Tunggu proses migrate data selesai selanjutnya masukkan " http://localhost/advanced/frontend/web/" di browser.

Tentang Aplikasi
----------------

aplikasi CEK GUDANG BELAKANG adalah aplikasi untuk mengelola data stok barang, adapun aplikasi ini mempunyai fitur:
- Dapat menginputkan suplier
- Dapat menginputkan data barang baru
- Dapat melihat stok barang yang tersedia
- Dapat melihat laporan barang masuk dan barang keluar
