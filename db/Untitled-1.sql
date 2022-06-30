
CREATE TABLE tb_distribusi (
  distribusi_id SERIAL PRIMARY KEY,
  distribusi_ket TEXT NOT NULL,
  distribusi_jumlah FLOAT DEFAULT NULL
);


INSERT INTO tb_distribusi (distribusi_id, distribusi_ket, distribusi_jumlah) VALUES
(1, 'RT. 01', 5);


CREATE TABLE tb_penimbangan (
  penimbangan_id SERIAL PRIMARY KEY,
  penimbangan_qurban INT NOT NULL,
  penimbangan_ke INT NOT NULL,
  penimbangan_jumlah FLOAT NOT NULL
);


INSERT INTO tb_penimbangan (penimbangan_id, penimbangan_qurban, penimbangan_ke, penimbangan_jumlah) VALUES
(1, 2, 1, 8.9),
(2, 1, 1, 7),
(3, 2, 2, 13);

CREATE TYPE qstatus AS ENUM('Kelompok','Pribadi');

CREATE TABLE tb_qurban (
  qurban_id SERIAL PRIMARY KEY,
  qurban_status QSTATUS NOT NULL,
  qurban_nomor INT NOT NULL,
  qurban_shohibul TEXT NOT NULL,
  qurban_sembelih TIMESTAMP DEFAULT NULL,
  qurban_pengeletan TIMESTAMP DEFAULT NULL
);


INSERT INTO tb_qurban (qurban_id, qurban_status, qurban_nomor, qurban_shohibul, qurban_sembelih, qurban_pengeletan) VALUES
(1, 'Kelompok', 1, 'Aji', '2022-06-14 12:06:07', '2022-06-14 12:06:07'),
(2, 'Kelompok', 2, 'Aji', NULL, NULL),
(5, 'Kelompok', 3, 'Ana', NULL, NULL),
(6, 'Kelompok', 4, 'Anaji', NULL, NULL),
(7, 'Pribadi', 2, 'Disa', NULL, NULL),
(8, 'Pribadi', 3, 'Anang', NULL, NULL);

CREATE TYPE levels AS ENUM('Admin','Petugas');
CREATE TYPE ustatus AS ENUM('0','1');

CREATE TABLE tb_user (
  user_id SERIAL PRIMARY KEY,
  user_name TEXT NOT NULL,
  user_pass TEXT NOT NULL,
  user_level LEVELS NOT NULL,
  user_status USTATUS NOT NULL
);


INSERT INTO tb_user (user_id, user_name, user_pass, user_level, user_status) VALUES
(1, 'Admin', '$2y$10$6gTN.0RrzgHrDVL3Iu1J7OKcoBm.p3LQqhX.KkFqEajkG.jgQE1Dm', 'Admin', '1');
