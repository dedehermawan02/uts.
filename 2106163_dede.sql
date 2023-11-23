 CREATE DATABASE 2106163_dede;

 CREATE TABLE peserta(
     id INT NOT NULL AUTO_INCREMENT,
     nim VARCHAR(20) NOT NULL,
     nama VARCHAR(50) NOT NULL,
     kelas VARCHAR(20) NOT NULL,
     email VARCHAR(50) NOT NULL,
     jurusan VARCHAR(50) NOT NULL,
     PRIMARY KEY(id)
) ;