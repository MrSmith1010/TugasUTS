CREATE TABLE tb_prodi (
    prodi_id tinyint(2) NOT NULL AUTO_INCREMENT,
    prodi_kode VARCHAR(10) NOT NULL,
    prodi_nama VARCHAR(100) NOT NULL,
    PRIMARY KEY(prodi_id),
    UNIQUE KEY(prodi_kode)
);
CREATE TABLE tb_mhsw (
    mhsw_id int(11) NOT NULL AUTO_INCREMENT,
    mhsw_nim VARCHAR(25) NOT NULL,
    mhsw_nama VARCHAR(100) NOT NULL,
    mhsw_alamat TEXT DEFAULT NULL,
    mhsw_id_prodi tinyint(3) NOT NULL,
    PRIMARY KEY (mhsw_id),
    UNIQUE KEY (mhsw_nim),
    FOREIGN KEY (mhsw_id_prodi) REFERENCES tb_prodi(prodi_id) ON UPDATE CASCADE ON DELETE RESTRICT
);