#Buat trigger untuk proses pembayaran

1. Pelanggan memesan didalam table pesanan
SELECT * FROM pesanan;
+----+------------+--------+--------------+
| id | tanggal    | total  | pelanggan_id |
+----+------------+--------+--------------+
|  1 | 2023-03-03 | 200000 |            1 |
|  2 | 2022-02-02 |  30000 |            1 |
+----+------------+--------+--------------+

3. Didalam table pembayaran tambahkan kolom status_pembayaran
ALTER TABLE pembayaran ADD status_pembayaran varchar(25);

2. Dilanjutkan dengan proses pembayaran di table pembayaran
DELIMITER $$
CREATE TRIGGER cek_pembayaran BEFORE INSERT ON pembayaran
FOR EACH ROW
BEGIN
DECLARE total_bayar DECIMAL(10, 2);
DECLARE total_pesanan DECIMAL(10, 2);
SELECT SUM(jumlah) INTO total_bayar FROM pembayaran WHERE pesanan_id = NEW.pesanan_id;
SELECT total INTO total_pesanan FROM pesanan WHERE id = NEW.pesanan_id;

4. Jika pesanan sudah dibayar maka status pembayaran akan berubah menjadi lunas
IF total_bayar + NEW.jumlah >= total_pesanan THEN
SET NEW.status_pembayaran = 'Lunas';
END IF;
END $$
DELIMITER ;

// Menambahkan data pada tabel pembayaran
INSERT INTO pembayaran (no_kuitansi, tanggal, jumlah, ke, pesanan_id, status_pembayaran)
VALUES ('KWI001', '2023-03-03', 200000, 1, 1);

+----+-------------+------------+--------+------+------------+-------------------+
| id | no_kuitansi | tanggal    | jumlah | ke   | pesanan_id | status_pembayaran |
+----+-------------+------------+--------+------+------------+-------------------+
|  1 | KWI001      | 2023-03-03 | 200000 |    1 |          1 | Lunas             |
+----+-------------+------------+--------+------+------------+-------------------+