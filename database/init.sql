CREATE DATABASE IF NOT EXISTS task_mahasiswa;

USE task_mahasiswa;

CREATE TABLE IF NOT EXISTS tugas (

id INT AUTO_INCREMENT PRIMARY KEY,

mata_kuliah VARCHAR(100) NOT NULL,

judul_tugas VARCHAR(150) NOT NULL,

deskripsi TEXT,

deadline DATE,

prioritas ENUM('Rendah','Sedang','Tinggi'),

status ENUM('Belum Selesai','Selesai') DEFAULT 'Belum Selesai'

);