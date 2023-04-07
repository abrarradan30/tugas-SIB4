1. Buat table produk 
CREATE TABLE produk (
    -> id int NOT NULL auto_increment primary key,
    -> kode varchar(10) unique,
    -> nama varchar(25),
    -> harga_beli double,
    -> harga_jual double,
    -> stok int(11),
    -> min_stok int(11),
    -> jenis_produk_id int NOT NULL REFERENCES jenis_produk(id));

2. Buat table pesanan_items
CREATE TABLE pesanan_items (
    -> id int NOT NULL auto_increment primary key,
    -> produk_id int NOT NULL REFERENCES produk(id),
    -> pesanan_id int NOT NULL REFERENCES pesanan(id),
    -> qty int(11),
    -> harga double);

3. Buat table vendor
CREATE TABLE vendor (
    -> id int NOT NULL auto_increment primary key,
    -> nomor varchar(4),
    -> nama varchar(40),
    -> kota varchar(30),
    -> kontak varchar(30));

4. Buat table pembelian
CREATE TABLE pembelian (
    -> id int NOT NULL auto_increment primary key,
    -> tanggal varchar(45),
    -> nomor varchar(10),
    -> produk_id int NOT NULL REFERENCES produk(id),
    -> jumlah int(11),
    -> harga double,
    -> vendor_id int NOT NULL REFERENCES vendor(id));

5. Tambahkan kolom alamat pada pelanggan dengan tipe data varchar(40)
ALTER TABLE pelanggan
    -> ADD COLUMN alamat varchar(40) AFTER kartu_id;

6. Ubah kolom nama pada pelanggan menjadi nama_pelanggan
ALTER TABLE pelanggan
    -> CHANGE nama nama_pelanggan varchar(45);

7. Edit tipe data nama_pelanggan menjadi varchar(50)
ALTER TABLE pelanggan
    -> MODIFY nama_pelanggan varchar(50) AFTER kode;