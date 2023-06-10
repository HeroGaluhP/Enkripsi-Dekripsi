
# Aplikasi Enkripsi dan Dekripsi Pesan menggunakan Metode AES

Aplikasi ini adalah sebuah aplikasi web sederhana yang digunakan untuk melakukan enkripsi dan dekripsi pesan menggunakan metode Advanced Encryption Standard (AES). Aplikasi ini dikembangkan menggunakan bahasa pemrograman PHP dengan tampilan gaya modern.

## Cara Kerja

- Pengguna memasukkan pesan yang akan dienkripsi atau dienkripsi dalam form yang disediakan.
- Pengguna kemudian dapat memilih apakah akan melakukan enkripsi atau dekripsi dengan mengklik tombol yang sesuai.
- Jika pengguna memilih "Enkripsi", pesan yang dimasukkan akan dienkripsi menggunakan metode AES dengan kunci rahasia yang telah ditentukan.
- Hasil enkripsi akan ditampilkan dalam bentuk teks terenkripsi di bawah form.
- Jika pengguna memilih "Dekripsi", pengguna memasukkan pesan yang telah dienkripsi sebelumnya dan pesan tersebut akan didekripsi menggunakan metode AES dengan kunci rahasia yang sama.
- Hasil dekripsi akan ditampilkan dalam bentuk teks terdekripsi di bawah form.

## Persyaratan Lingkungan Pengembangan

- PHP 5.4 atau yang lebih baru
- Web server seperti Apache atau Nginx
## Catatan Penting

- Aplikasi ini hanya untuk tujuan demonstrasi dan tidak menyertakan semua aspek keamanan yang diperlukan untuk penggunaan yang sebenarnya. Pastikan untuk melengkapi dan memodifikasi aplikasi ini sesuai dengan kebutuhan keamanan yang spesifik sebelum menggunakannya dalam skenario produksi.


## Penjelasan AES

[Wikipedia](https://id.wikipedia.org/wiki/Standar_Enkripsi_Lanjutan#:~:text=Dalam%20kriptografi%2C%20Standar%20Enkripsi%20Lanjutan,diadopsi%20oleh%20Pemerintah%20Amerika%20Serikat.)


## Demo

https://bit.ly/Enkripsi-Dekripsi


## Installation

XAMPP 

```bash
Download project ini dan ekstrak kedalam folder htdocs yang berada di
dalam folder xampp
```

```bash
Buka XAMPP dan jalankan APACHE dan MYSQL
```
```bash
Buka browser kalian dan ketik http://localhost/Enkripsi-Dekripsi/
```


    
## Screenshots

- Enkripsi
![App Screenshot](https://i.ibb.co/FstHJ78/Enkripsi.png)
- Dekripsi
![App Screenshot](https://i.ibb.co/7r97b6q/Dekripsi-PNG.png)



## Authors

- [@Loaf](https://github.com/HeroGaluhP)


## Tech Stack

**Languages:** HTML, PHP, CSS

**Server:** Apache


## FAQ

#### Apa itu enkripsi dan mengapa penting?

Enkripsi adalah proses mengubah data menjadi format yang tidak dapat dibaca, sehingga hanya dapat diakses oleh pihak yang memiliki kunci enkripsi yang tepat. Enkripsi penting untuk melindungi data sensitif dan menjaga kerahasiaan informasi saat disimpan atau ditransmisikan melalui jaringan.

#### Bagaimana cara memilih algoritma enkripsi yang tepat?

Pemilihan algoritma enkripsi yang tepat tergantung pada kebutuhan keamanan dan ketersediaan implementasinya. Algoritma yang telah diuji dan digunakan secara luas, seperti AES (Advanced Encryption Standard), seringkali direkomendasikan. Pertimbangkan faktor keamanan, kinerja, dan kompatibilitas dengan sistem yang digunakan sebelum memilih algoritma enkripsi yang tepat.


## License

[MIT](https://choosealicense.com/licenses/mit/)

