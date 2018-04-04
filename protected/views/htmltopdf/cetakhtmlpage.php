<style type="text/css">
    .center{ text-align: center; }
    .borderBot{ border-bottom: 3px double #000; }
    .head{ width: 600px; margin: auto; padding-bottom: 10px; }
    h1,h2,h3,h4{ margin-bottom: 0px; float: right; }
    p{ font-size: 16px; line-height: 18px; }
    .judul{ width: 420px; margin: auto; text-align: center; padding-bottom: 3px; border-bottom: 1px solid #000;}
    .judul2{ width: 420px; margin: auto; text-align: center; padding-top: 3px;}
    table{ margin-left: 20px; border-style:none; }
    table td,table th{ border: 0px solid gray; border-collapse: collapse; font-size: 16px; }
    ol li{ font-size: 16px; }
    #content{
        width: 600px;
        margin: auto;
    }
</style>

<page>
    <div id="content">
        <div class="head borderBot">
            <table style="margin: auto;">
                <tr>
                    <td style="width: 80px; padding: 0px;">
                        <img class="logo" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/logos.jpg" width="30%" alt="Logo">
                    </td>
                    <td style="width: 470px; padding: 0px;">
                        <h2 class="center">
                            INSTITUTE TEKNOLOGI BANDUNG
                        </h2>
                        <h4 class="center">
                            UPT Asrama
                        </h4>
                        <p class="center" style="font-size:14px;">
                            JALAN GANESHA 10 BANDUNG, GEDUNG LAB DOPING LANTAI 1 
                        </p>
                    </td>
                </tr>
            </table>
        </div>
        <br />
        <div class="judul">
            <strong style="font-size:18px;">SURAT PERJANJIAN TINGGAL DI ASRAMA ITB</strong>
        </div>
        <div class="judul2">
            Nomor: <?php echo $nomor; ?>/11.B01.10/LL/<?php echo date("Y");?>
        </div>
        <br />
        <p style="padding-left:8px; padding-right:8px;">Saya mahasiswa ITB yang bertanda tangan di bawah ini,</p>
        <table>
            <tr><td>Nama</td> <td>:</td> <td><?php echo $data->penghuni->nama; ?></td></tr>
            <tr><td>Nim</td> <td>:</td> <td><?php echo $data->penghuni->nomorIdentitas; ?></td></tr>
            <?php
                if($penghuni->idJurusan != 0){
                    $jurusan = $penghuni->jurusan->jurusan;
                    $fakultas = $penghuni->fakultas->fakultas;
                }else{
                    $jurusan = '-';
                    $fakultas = '-';
                }
            ?>
            <tr><td>Program Studi</td> <td>:</td> <td><?php echo $jurusan; ?></td></tr>
            <tr><td>Fakultas/Sekolah</td> <td>:</td> <td><?php echo $fakultas; ?></td></tr>
        </table>
        <p style="padding-left:8px; padding-right:8px;">Telah melihat kondisi kamar, menerima kondisi dan bersedia tinggal di kamar asrama di bawah ini,</p>
        <table>
            <tr><td>Nama Asrama</td> <td>:</td> <td><?php echo $data->asrama->namaAsrama; ?></td></tr>
            <tr><td>No. Kamar/Bed</td> <td>:</td> <td><?php echo $data->tempatTidur->kodeTempatTidur; ?></td></tr>
        </table>
        <?php
            $start = explode("-", $data->startDate);
            $startY = $start[0];
            $startM = $start[1];
            $startD = $start[2];

            $end = explode("-", $data->endDate);
            $endY = $end[0];
            $endM = $end[1];
            $endD = $end[2];
            
            $tanggalKontrak = explode("-", $tanggal);
            $tY = $tanggalKontrak[0];
            $tM = $tanggalKontrak[1];
            $tD = $tanggalKontrak[2];
        ?>
        <p style="padding-left:8px; padding-right:8px;">Dengan biaya tinggal sebesar <?php echo $this->rupiah($tagihan->nominal)?>, dengan batas waktu tinggal <?php echo $startD.' '.$this->bulan($startM).' '.$startY;?> sampai dengan <?php echo $endD.' '.$this->bulan($endM).' '.$endY;?>. Untuk itu, saya berjanji akan memenuhi kewajiban untuk :</p>
        <ol>
            <li style="padding-bottom:5px;">Menaati segala ketentuan dan tata tertib yang berlaku di asrama</li>
            <li style="padding-bottom:5px;">Menjaga etika dan norma yang berlaku di asrama</li>
            <li style="padding-bottom:5px;">Menjaga fasilitas kamar, termasuk perawatan, kerapihan, kebersihan dan ketertiban kamar</li>
            <li style="padding-bottom:5px; line-height: 18px;">Bersedia mengosongkan asrama apabila telah sampai pada batas waktu perjanjian tinggal atau pada masa perbaikan selama 1 bulan pada liburan akhir semester genap.</li>
            <li>Membayar biaya sewa sebelum tanggal 10 setiap bulan dibayar di awal</li>
        </ol>
        <p style="padding-left:8px; padding-right:8px;">Surat perjanjian tinggal ini dapat ditinjau kembali setiap 5 (lima) bulan.</p>
        <p style="text-align:right; margin-right: 8px;">Bandung, <?php echo $tD." "; echo $this->bulan($tM); echo " ".$tY; ?></p>
        <table>
            <tr>
                <td style="width: 370px; vertical-align: top; text-align: left;">
                    <div style="border-bottom: 1px solid #000; padding-bottom: 100px; width: 150px;">Penghuni Asrama</div>
                </td>
                <td style="width: 220px; text-align: right;">
                    <img class="logo" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/ttd3.jpg" width="30%" alt="Logo">
                </td>
            </tr>
        </table>
        <p style="font-style: italic; font-size: 14px; padding-left:8px; padding-right:8px;">Surat perjanjian ini dibuat rangkap 3, untuk:</p>
        <ol>
            <li style="padding-bottom:5px; font-style: italic; font-size: 14px;">Disimpan oleh calon mahasiswa penghuni asrama</li>
            <li style="padding-bottom:5px; font-style: italic; font-size: 14px;">Diberikan kepada sekretariat masing-masing asrama, dan</li>
            <li style="padding-bottom:5px; font-style: italic; font-size: 14px;">Diberikan kepada UPT Asrama ITB sebagai arsip</li>
        </ol>
    </div>
</page>
