<style type="text/css">
    .center{ text-align: center; }
    .borderBot{ border-bottom: 3px double #000; }
    .head{ width: 100%; margin: 0px auto; padding-bottom: 10px; }
    h1,h2,h3,h4{ margin-bottom: 0px; float: right; }
    p{ font-size: 14px; line-height: 18px; }
    .judul{ width: 310px; margin: auto; text-align: center; border-bottom: 1px solid #000; }
    table{ margin-left: 20px; border-style:none; }
    table td,table th{ border: 0px solid gray; border-collapse: collapse; font-size: 14px; }
    ol li{ font-size: 14px; }
    #content{
        width: 600px;
        margin: auto;
        height: 50pk;
        border: 2px solid gray;
    }
</style>
<page>
    <div id="content">
        sdfs
    </div>
    <div class="head borderBot">
        <table style="margin: auto;">
            <tr>
                <td style="width: 85px">
                    <img class="logo" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/logos.jpg" width="30%" alt="Logo">
                </td>
                <td style="width: 560px">
                    <h2 class="center">
                        INSTITUTE TEKNOLOGI BANDUNG
                    </h2>
                    <h4 class="center">
                        UPT Asrama
                    </h4>
                    <p class="center">
                        JALAN GANESHA 10 BANDUNG, GEDUNG LAB DOPING LANTAI 1 
                    </p>
                </td>
            </tr>
        </table>
    </div>
    <br /><br />
    <div class="judul">
        <strong>SURAT PERJANJIAN TINGGAL DI ASRAMA ITB</strong>
    </div>
    <br /><br />     
    <p>Saya mahasiswa ITB yang bertanda tangan di bawah ini,</p>
    <table>
        <tr><td>Nama</td> <td>:</td> <td><?php echo $model->nama; ?></td></tr>
        <tr><td>Nim</td> <td>:</td> <td><?php echo $model->nomorIdentitas; ?></td></tr>
        <tr><td>Program Studi</td> <td>:</td> <td><?php echo $model->jurusan; ?></td></tr>
        <tr><td>Fakultas/Sekolah</td> <td>:</td> <td><?php echo $model->fakultas; ?></td></tr>
    </table>
    <p>Telah melihat kondisi kamar, menerima kondisi dan bersedia tinggal di kamar asrama di bawah ini,</p>
    <table>
        <tr><td>Nama Asrama</td> <td>:</td> <td><?php echo $alokasi->asrama->namaAsrama; ?></td></tr>
        <tr><td>No. Kamar/Bed</td> <td>:</td> <td><?php echo $alokasi->tempatTidur->kodeTempatTidur; ?></td></tr>
    </table>
    <?php
        $start = explode("-", $alokasi->startDate);
        $startY = $start[0];
        $startM = $start[1];
        $startD = $start[2];
        
        $end = explode("-", $alokasi->endDate);
        $endY = $end[0];
        $endM = $end[1];
        $endD = $end[2];
    ?>
    <p>Dengan biaya tinggal sebesar <?php echo $this->rupiah($count['tot'])?>, dengan batas waktu tinggal <?php echo $startD.' '.$this->bulan($startM).' '.$startY;?> sampai <?php echo $endD.' '.$this->bulan($endM).' '.$endY;?>. Untuk itu, saya berjanji akan memenuhi kewajiban untuk :</p>
    <ol>
        <li style="padding-bottom:5px;">Menaati segala ketentuan dan tata tertib yang berlaku di asrama</li>
        <li style="padding-bottom:5px;">Menjaga etika dan norma yang berlaku di asrama</li>
        <li style="padding-bottom:5px;">Menjaga fasilitas kamar, termasuk perawatan, kerapihan, kebersihan dan ketertiban kamar</li>
        <li style="padding-bottom:5px; line-height: 18px;">Bersedia mengosongkan asrama apabila telah sampai pada batas waktu perjanjian tinggal atau pada masa perbaikan selama 1 bulan pada liburan akhir semester genap.</li>
        <li>Membayar biaya sewa sebelum tanggal 10 setiap bulan dibayar di awal</li>
    </ol>
    <p>Surat perjanjian tinggal ini dapat ditinjau kembali setiap 5 (lima) bulan.</p>
    <br/>
    <p style="text-align:right; margin-right: 10px;">Bandung, <?php echo date("d "); echo $this->bulan(date("m")); echo date(" Y"); ?></p>
    <table>
        <tr>
            <td style="width: 475px; vertical-align: top; text-align: left;">
                <div style="border-bottom: 1px solid #000; padding-bottom: 100px; width: 150px;">Penghuni Asrama</div>
            </td>
            <td style="width: 225px; text-align: right;">
                <img class="logo" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/ttd.png" width="30%" alt="Logo">
            </td>
        </tr>
    </table>
    <br/><br/><br/><br/>
    <p style="font-style: italic; font-size: 13px;">Surat perjanjian ini dibuat rangkap 3, untuk:</p>
    <ol>
        <li style="padding-bottom:5px; font-style: italic; font-size: 13px;">Disimpan oleh calon mahasiswa penghuni asrama</li>
        <li style="padding-bottom:5px; font-style: italic; font-size: 13px;">Diberikan kepada sekretariat masing-masing asrama, dan</li>
        <li style="padding-bottom:5px; font-style: italic; font-size: 13px;">Diberikan kepada UPT Asrama ITB sebagai arsip</li>
    </ol>
</page>    