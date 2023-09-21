SELECT 'Cancel Perimaan Barang' as judul, c.nomor,0 as debit, sum(a.qty) as kredit, c.tanggal as tanggal_cancel, 'n' as kode, c.pesan as dari 
                FROM penerimaan_gudang_detail a 
                INNER JOIN penerimaan_gudang b ON a.id=b.id 
                INNER JOIN penerimaan_gudang_cancel as c ON b.id=c.id 
                INNER JOIN barang d ON d.id_barang=a.id_barang 
                GROUP BY judul,c.nomor,debit,tanggal_cancel,kode,dari