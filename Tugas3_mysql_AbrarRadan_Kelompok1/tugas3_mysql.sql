SOAL 3.1
1. Tampilkan produk yang assetnya diatas 20jt
SELECT * FROM produk WHERE harga_beli * stok > 20000000;
+----+------+--------+------------+------------+------+----------+-----------------+
| id | kode | nama   | harga_beli | harga_jual | stok | min_stok | jenis_produk_id |
+----+------+--------+------------+------------+------+----------+-----------------+
|  3 | K001 | Kulkas |    4000000 |    5000000 |   10 |        3 |               1 |
+----+------+--------+------------+------------+------+----------+-----------------+

2. Tampilkan data produk beserta selisih stok dengan minimal stok
SELECT SUM(stok - min_stok) as selisih from produk;
+---------+
| selisih |
+---------+
|      10 |
+---------+

3. Tampilkan total asset produk secara keseluruhan
SELECT sum(stok) as total_asset from produk;
+-------------+
| total_asset |
+-------------+
|          32 |
+-------------+

4. Tampilkan data pelanggan yang lahirnya antara tahun 1999 sampai 2004
SELECT * FROM pelanggan WHERE YEAR(tgl_lahir) BETWEEN 1999 AND 2004;
+----+--------+----------------+------+-----------+------------+-------------------+----------+--------+
| id | kode   | nama_pelanggan | jk   | tmp_lahir | tgl_lahir  | email             | kartu_id | alamat |
+----+--------+----------------+------+-----------+------------+-------------------+----------+--------+
|  3 | 011103 | Sekar          | P    | Kediri    | 2001-09-08 | sekar@gmail.com   |        1 | kediri |
|  5 | 011105 | Pradana        | L    | Jakarta   | 2001-08-01 | pradana@gmail.com |        2 | jakbar |
|  6 | 011106 | Gayatri Putri  | P    | Jakarta   | 2002-09-01 | gayatri@gmail.com |        1 | jakut  |
+----+--------+----------------+------+-----------+------------+-------------------+----------+--------+

5. Tampilkan data pelanggan yang lahirnya tahun 1998
SELECT * FROM pelanggan WHERE YEAR(tgl_lahir)=1998;
+----+--------+----------------+------+------------+------------+------------------+----------+------------+
| id | kode   | nama_pelanggan | jk   | tmp_lahir  | tgl_lahir  | email            | kartu_id | alamat     |
+----+--------+----------------+------+------------+------------+------------------+----------+------------+
|  2 | 011102 | Pandan Wangi   | P    | Yogyakarta | 1998-08-07 | pandan@gmail.com |        2 | yogyakarta |
+----+--------+----------------+------+------------+------------+------------------+----------+------------+

6. Tampilkan data pelanggan yang berulang tahun bulan agustus
SELECT * FROM pelanggan WHERE MONTH(tgl_lahir)=08;
+----+--------+----------------+------+------------+------------+-------------------+----------+------------+
| id | kode   | nama_pelanggan | jk   | tmp_lahir  | tgl_lahir  | email             | kartu_id | alamat     |
+----+--------+----------------+------+------------+------------+-------------------+----------+------------+
|  2 | 011102 | Pandan Wangi   | P    | Yogyakarta | 1998-08-07 | pandan@gmail.com  |        2 | yogyakarta |
|  5 | 011105 | Pradana        | L    | Jakarta    | 2001-08-01 | pradana@gmail.com |        2 | jakbar     |
+----+--------+----------------+------+------------+------------+-------------------+----------+------------+

7. Tampilkan data pelanggan : nama,tmp_lahir,tgl_lahir dan umur (selisih tahun sekarang
 dikurang tahun kelahiran)
SELECT nama_pelanggan, tmp_lahir, tgl_lahir, (YEAR(NOW())-YEAR(tgl_lahir)) AS umur FROM pelanggan;
+----------------+------------+------------+------+
| nama_pelanggan | tmp_lahir  | tgl_lahir  | umur |
+----------------+------------+------------+------+
| Agung          | Bandung    | 1997-09-06 |   26 |
| Pandan Wangi   | Yogyakarta | 1998-08-07 |   25 |
| Sekar          | Kediri     | 2001-09-08 |   22 |
| Suandi         | Jakarta    | 1997-09-08 |   26 |
| Pradana        | Jakarta    | 2001-08-01 |   22 |
| Gayatri Putri  | Jakarta    | 2002-09-01 |   21 |
+----------------+------------+------------+------+


SOAL 3.2
1. Berapa jumlah pelanggan yang tahun lahirnya 1998
SELECT COUNT(tgl_lahir) AS jumlah_pelanggan FROM pelanggan WHERE YEAR(tgl_lahir)=1998;
+------------------+
| jumlah_pelanggan |
+------------------+
|                1 |
+------------------+

2. Berapa jumlah pelanggan perempuan yang tempat lahirnya di Jakarta
SELECT COUNT(jk) AS jumlah_pelanggan FROM pelanggan WHERE jk = 'P' AND tmp_lahir='jakarta';
+------------------+
| jumlah_pelanggan |
+------------------+
|                1 |
+------------------+

3. Berapa jumlah total stok semua produk yang harg jualnya dibawah 10rb
SELECT SUM(stok) AS jumlah_min_10k FROM produk WHERE harga_jual < 10000;
+----------------+
| jumlah_min_10k |
+----------------+
|              5 |
+----------------+

4. Ada berapa produk yang mempunyai kode awal K
SELECT COUNT(kode) AS jumlah_produk FROM produk WHERE kode LIKE 'K%';
+---------------+
| jumlah_produk |
+---------------+
|             1 |
+---------------+

5. Berapa harga jual rata-rata produk yang diatas 1jt
SELECT AVG(harga_jual) AS harga_jual_rata2 FROM produk WHERE harga_jual > 1000000;
+------------------+
| harga_jual_rata2 |
+------------------+
|          3500000 |
+------------------+

6. Tampilkan jumlah stok yang paling besar
SELECT MAX(stok) AS jumlah_stok_banyak FROM produk;
+--------------------+
| jumlah_stok_banyak |
+--------------------+
|                 10 |
+--------------------+

7. Ada berapa produk yang stoknya kurang dari minimal stok
SELECT COUNT(stok) AS jumlah_produk FROM produk WHERE stok < min_stok;
+---------------+
| jumlah_produk |
+---------------+
|             1 |
+---------------+

8. Berapa total asset dari keseluruhan produk
SELECT SUM(harga_beli * stok) AS total_asset FROM produk;
+-------------+
| total_asset |
+-------------+
|    73018000 |
+-------------+

SOAL 2.3
1. Tampilkan data produk : id,nama,stok dan informasi jika stok telah sampai batas minimal 
atau kurang dari minimum stok dengan informasi 'segera belanja' jika tidak 'stok aman'
SELECT id, nama, stok,
CASE
WHEN stok <= min_stok THEN 'segera belanja'
ELSE 'stok aman'
END AS informasi_produk
FROM produk;
+----+------------+------+------------------+
| id | nama       | stok | informasi_produk |
+----+------------+------+------------------+
|  1 | TV         |    3 | stok aman        |
|  2 | TV 11 Inch |   10 | stok aman        |
|  3 | Kulkas     |   10 | stok aman        |
|  4 | Meja Makan |    4 | stok aman        |
|  5 | Taro       |    3 | stok aman        |
|  6 | Teh Kotak  |    2 | segera belanja   |
+----+------------+------+------------------+

2. Tampilkan data pelanggan : id,nama,umur dan kategori umur : jika umur < 17 -> 'muda', 
17-55 -> 'dewasa', selainnya 'tua'
SELECT id, nama_pelanggan,
timestampdiff(year,tgl_lahir,curdate()) AS umur,
CASE
WHEN timestampdiff(year,tgl_lahir,curdate()) < 17 THEN 'muda'
WHEN timestampdiff(year,tgl_lahir,curdate()) BETWEEN 17 AND 55 THEN 'dewasa'
ELSE 'tua'
END AS kategori_umur
FROM pelanggan;
+----+----------------+------+---------------+
| id | nama_pelanggan | umur | kategori_umur |
+----+----------------+------+---------------+
|  1 | Suandi         |   25 | dewasa        |
|  2 | Ali            |   23 | dewasa        |
|  3 | Pradana        |   21 | dewasa        |
|  4 | Pandan Wangi   |   24 | dewasa        |
|  5 | Sekar          |   21 | dewasa        |
|  6 | Agung          |   25 | dewasa        |
|  7 | Arda           |   19 | dewasa        |
|  8 | Gayatra Putri  |   20 | dewasa        |
+----+----------------+------+---------------+

3. Tampilkan data produk: id, kode, nama, dan bonus untuk kode ‘TV01’ →’DVD Player’ , 
‘K001’ → ‘Rice Cooker’ selain dari diatas ‘Tidak Ada’
SELECT id,kode,nama,
CASE
WHEN kode = 'TV01' THEN 'DVD Player'
WHEN kode = 'K001' THEN 'Rice Cooker'
END AS bonus
FROM produk;
+----+------+------------+-------------+
| id | kode | nama       | bonus       |
+----+------+------------+-------------+
|  1 | TV01 | TV         | DVD Player  |
|  2 | TV02 | TV 11 Inch | NULL        |
|  3 | K001 | Kulkas     | Rice Cooker |
|  4 | M001 | Meja Makan | NULL        |
|  5 | T001 | Taro       | NULL        |
|  6 | TK01 | Teh Kotak  | NULL        |
+----+------+------------+-------------+


SOAL 2.4
1. Tampilkan data statistik jumlah tempat lahir pelanggan
SELECT tmp_lahir, COUNT(tmp_lahir) AS statistik_jumlah_tempat FROM pelanggan GROUP BY tmp_lahir;
+------------+-------------------------+
| tmp_lahir  | statistik_jumlah_tempat |
+------------+-------------------------+
| Bandung    |                       1 |
| Jakarta    |                       3 |
| Kediri     |                       1 |
| Malang     |                       1 |
| Surabaya   |                       1 |
| Yogyakarta |                       1 |
+------------+-------------------------+

2. Tampilkan jumlah statistik produk berdasarkan jenis produk
SELECT jenis_produk_id, COUNT(*) AS jumlah_statistik_produk FROM produk GROUP BY jenis_produk_id; 
+-----------------+-------------------------+
| jenis_produk_id | jumlah_statistik_produk |
+-----------------+-------------------------+
|               1 |                       3 |
|               2 |                       1 |
|               3 |                       1 |
|               4 |                       1 |
+-----------------+-------------------------+

3. Tampilkan data pelanggan yang usianya dibawah rata usia pelanggan
SELECT * FROM pelanggan WHERE tgl_lahir > DATE_SUB(CURDATE(), INTERVAL (SELECT AVG(YEAR(CURDATE())-YEAR(tgl_lahir)) FROM pelanggan) YEAR);

4. Tampilkan data produk yang harganya diatas rata-rata harga produk
SELECT * FROM produk WHERE harga_jual > (SELECT AVG(harga_jual) FROM produk);
+----+------+------------+------------+------------+------+----------+-----------------+
| id | kode | nama       | harga_beli | harga_jual | stok | min_stok | jenis_produk_id |
+----+------+------------+------------+------------+------+----------+-----------------+
|  1 | TV01 | TV         |    3000000 |    4000000 |    3 |        2 |               1 |
|  2 | TV02 | TV 11 Inch |    2000000 |    3000000 |   10 |        3 |               1 |
|  3 | K001 | Kulkas     |    4000000 |    5000000 |   10 |        3 |               1 |
+----+------+------------+------------+------------+------+----------+-----------------+

5. Tampilkan data pelanggan yang memiliki kartu dimana iuran tahunan kartu diatas 90rb
SELECT p.* FROM pelanggan p JOIN kartu k ON p.kartu_id = k.id WHERE k.iuran > 90000;

6. Tampilkan statistik data produk dimana harga produknya dibawah rata-rata 
harga produk secara keseluruhan
SELECT AVG(harga_jual) AS rata2_harga FROM produk WHERE harga_jual < (SELECT AVG(harga_jual) FROM produk);
+-------------------+
| rata2_harga       |
+-------------------+
| 669666.6666666666 |
+-------------------+

7. Tampilkan data pelanggan yang memiliki kartu dimana diskon kartu yang diberikan diatas 3%
SELECT * FROM pelanggan p JOIN kartu k ON p.kartu_id = k.id WHERE k.diskon > 3/100;