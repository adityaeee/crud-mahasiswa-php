# Sistem Informasi Mahasiswa
sebuah sistem sederhana untuk CRUD mahasiswa menggunakan bahasa pemrograman PHP dan style Bootstrap

## Feature
- Manampilkan seluruh data mahasiswa
- Menambahkan data mahasiswa
- Mengubah data mahasiswa yang sudah ada
- Menghapus data mahasiswa


## Usage
- buat sebuah database dengan nama **db_akademik**
- buat sebuah table dengan nama **mahasiswa**

```sql
CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50),
    alamat  VARCHAR(100),
    umur INT
);
```
## Access
Penggunaan url yang ada di local dengan mengubah sesuai tempat lokasi dokumen agar tampil, URL yang digunakan 
[http://localhost/dataMahasiswa/](http://localhost/dataMahasiswa/index.php)

*note : dapat diubah sesuai kebutuhan*

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.


## created by

[Aditya](https://www.instagram.com/adityaeeeee/)