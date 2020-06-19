<?php 
        $this->load->library('pdf');
        $pdf = new FPDF('p','mm','A4');
        $pdf->AddPage();
        $pdf->SetTitle('Cetak - Surat KP');
        $pdf->SetMargins(10, 10 , 10, 10);
        $pdf->SetFont('Times','B',14);

        $pdf->Image('assets\image\logo_uin1.png',8,8,34);
        $pdf->Cell(220,6,'KEMENTRIAN AGAMA REPUBLIK INDONESIA',0,1,'C');
        $pdf->Cell(220,6,'UNIVERSITAS ISLAM NEGERI (UIN)',0,1,'C');
        $pdf->SetFont('Times','B',15);
        $pdf->Cell(220,6,'SUNAN GUNUNG DJATI BANDUNG',0,1,'C');
        $pdf->SetFont('Times','B',16);
        $pdf->Cell(220,6,'FAKULTAS SAINS DAN TEKNOLOGI',0,1,'C');
        $pdf->SetFont('Times','B',8.5);
        $pdf->Cell(220,6,'Jalan A.H Nasution No 105 Cibiru - Bandung 40614 Telp. 022-7800525 Fax. 022-7803936 website:http://fst.uinsgd.ac.id',0,1,'C');

        $pdf->SetLineWidth(0.5);
        $pdf->Line(10, 40, 210-10, 40);
        $pdf->SetLineWidth(0);
        $pdf->ln(10);
        foreach($surat_kp as $surat){
        $pdf->SetFont('Times','',12);
        $pdf->Cell(20,5,'Nomor',0,0);
        $pdf->Cell(2,5,':',0,0);
        $pdf->Cell(125,5,$surat->no_surat,0,0);
        $pdf->Cell(90,5,"Bandung,". strftime('%d %B %Y', strtotime($surat->tanggal_surat)),0,0,'L');
        

        $pdf->ln();
        $pdf->Cell(20,5,'Lampiran',0,0);
        $pdf->Cell(2,5,':',0,0);
        $pdf->Cell(50,5,' - ',0,0);

        $pdf->ln();
        $pdf->Cell(20,5,'Perihal',0,0);
        $pdf->Cell(2,5,':',0,0);
        $pdf->SetFont('Times','B',12);
        $pdf->setX(32);
        $pdf->Cell(31,5,'Permohonan Izin Kerja Praktik',0,0);
        

        $pdf->SetFont('Times','',12);
        $pdf->ln(7);
        $pdf->setX(32);
        $pdf->Cell(31,5,'Kepada Yth.',0,0);

        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(31,5,$surat->nama_intansi,0,0);


        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(31,5,$surat->alamat_intansi,0,0);
        $pdf->SetFont('Times','I',12);
        $pdf->ln(15);
        $pdf->setX(40);
        $pdf->Cell(103,5,"Assalamualaikum Wr.Wb.",0,0);
        
        $pdf->SetFont('Times','',12);
        $pdf->ln(7);
        $pdf->setX(40);
        $pdf->Cell(103,5,"Dekan Fakultas Sains dan Teknologi Universitas Islam Negeri Sunan Gunung Djati",0,0);
        

        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(40,5,"Bandung menerangkan bahwa:",0,0);
        
        //TABEL
        $pdf->ln(10);
        $pdf->setX(40);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(55,6,'Nama',1,0,'C');
        $pdf->Cell(25,6,'NIM',1,0,'C');
        $pdf->Cell(20,6,'Semester',1,0,'C');
        $pdf->Cell(35,6,'Jurusan',1,1,'C');
        

        $no=1;
        $pdf->setX(40);
        $pdf->Cell(10,6,$no++,1,0,'C');
        $pdf->Cell(55,6,$surat->nama_lengkap,1,0,'C');
        $pdf->Cell(25,6,$surat->nim,1,0,'C');
        $pdf->Cell(20,6,$surat->semester,1,0,'C');
        $pdf->Cell(35,6,$surat->jurusan,1,1,'C');
        
        
        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(40,5,"adalah mahasiswa aktif Fakultas Sains dan Teknologi Universitas Islam Negeri Sunan",0,0);

        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(40,5,"Gunung Djati Bandung Tahun Akademik 2019/2020, bermaksud Mengajukan Kerja",0,0);
        
        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(40,5,"Praltik pada intansi/perusahaan yang Bapak/Ibu pimpin, yang dilaksanakan pada Tanggal:",0,0);
    
        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(40,5,strftime('%d %B %Y', strtotime($surat->mulai_tgl))." sampai dengan ".strftime('%d %B %Y', strtotime($surat->akhir_tgl)).".",0,0);

        $pdf->ln(10);
        $pdf->setX(40);
        $pdf->Cell(103,5,"Untuk itu kami mohon agar Bapak/Ibu dapat membantu mahasiswa kami dalam",0,0);

        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(40,5,"pelaksanaan kegiatan yang dimaksud.",0,0);
    
        $pdf->ln(10);
        $pdf->setX(40);
        $pdf->Cell(103,5,"Demikian surat ini kami sampaikan, atas perkenan dan kerjasamanya kami ucapkan",0,0);
        
        $pdf->ln();
        $pdf->setX(32);
        $pdf->Cell(40,5,"terimakasih.",0,0);
        
        $pdf->SetFont('Times','I',12);
        $pdf->ln(10);
        $pdf->setX(40);
        $pdf->Cell(103,5,"Wassalamualaikum Wr.Wb.",0,0);

        $pdf->SetFont('Times','',12);
        $pdf->ln();
        $pdf->setY(210);
        $pdf->setX(122);
        $pdf->Cell(20,5,"a.n Dekan",0,0,'L');

        $pdf->ln();
        $pdf->setY(215);
        $pdf->setX(125);
        $pdf->Cell(20,5,"Wakil Dekan Bidang Akademik,",0,0);

        $pdf->ln();
        $pdf->SetFont('Times','B',12);
        $pdf->setY(245);
        $pdf->setX(125);
        $pdf->Cell(20,5,"Dr. Yudha Satya Perkasa,M.Si",0,0);

        $pdf->SetFont('Times','',12);
        $pdf->ln();
        $pdf->setY(250);
        $pdf->setX(125);
        $pdf->Cell(20,5,'NIP. 197911172011011005',0,0);

        $pdf->ln();
        $pdf->setY(267);
        $pdf->setX(20);
        $pdf->Cell(20,5,"Tembusan",0,0,'L');

        $pdf->ln();
        $pdf->setY(271.5);
        $pdf->setX(20);
        $pdf->Cell(20,5,"Dekan Fakultas Sains dan Teknologi (UIN Sunan Gunung Djati Bandung)",0,0,'L');
    }
$pdf->Output();
?>
