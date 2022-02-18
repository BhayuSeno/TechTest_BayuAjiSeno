SELECT d.mhs_nim, d.mhs_nama, a.nilai
FROM tb_mahasiswa_nilai a
LEFT OUTER JOIN tb_mahasiswa_nilai b
    ON a.mhs_id = b.mhs_id AND a.nilai < b.nilai
LEFT JOIN tb_matakuliah c ON a.mk_id = c.mk_id
LEFT JOIN tb_mahasiswa d ON a.mhs_id = d.mhs_id
WHERE b.mhs_id IS NULL AND c.mk_kode = "MK303"