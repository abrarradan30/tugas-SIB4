// masuk ke dalam mariadb dengan cmd(shell pada xampp)
mysql -u root -p

// untuk melihat seluruh database
show databases;

// membuat database dbtoko1
CREATE DATABASE dbtoko1;

// masuk kedalam database dbtoko1;
USE dbtoko1;

// membuat tabel kartu
 CREATE TABLE kartu (
    -> id int NOT NULL auto_increment primary key,
    -> kode varchar(10) unique,
    -> nama varchar(30) NOT NULL,
    -> diskon double default 0,
    -> iuran double default 0);

// tabel pada database dbtoko1
SHOW TABLES;

// melihat spesifikasi tabel kartu
DESC kartu;

// membuat tabel pelanggan 
 CREATE TABLE pelanggan (
    -> id int NOT NULL auto_increment primary key,
    -> kode varchar(10) unique,
    -> nama varchar(45),
    -> jk varchar(1),
    -> tmp_lahir varchar(20),
    -> tgl_lahir date,
    -> email varchar(30),
    -> kartu_id int NOT NULL references kartu(id));

// membuat tabel pesanan
CREATE TABLE pesanan (
    -> id int NOT NULL auto_increment primary key,
    -> tanggal date,
    -> total double,
    -> pelanggan_id int NOT NULL REFERENCES pelanggan(id));

// membuat tabel pembayaran
CREATE TABLE pembayaran (
    -> id int NOT NULL auto_increment primary key,
    -> no_kwitansi varchar(10) unique,
    -> tanggal date,
    -> jumlah double,
    -> ke int,
    -> pesanan_id int NOT NULL REFERENCES pesanan(id));

// membuat tabel jenis_produk
CREATE TABLE jenis_produk (
    -> id int NOT NULL auto_increment primary key,
    -> nama varchar(20));

// menambahkan kolom pada tabel jenis_produk
ALTER TABLE jenis_produk
    -> ADD COLUMN keterangan varchar(30) AFTER nama;

// menambahkan nama kolom keterangan pada tabel jenis_produk
ALTER TABLE jenis_produk
    -> CHANGE keterangan ket varchar(30);

// merubah panjang tipe data kolom keterangan pada tabel jenis_produk
ALTER TABLE jenis_produk
    -> MODIFY ket varchar(50) AFTER nama;