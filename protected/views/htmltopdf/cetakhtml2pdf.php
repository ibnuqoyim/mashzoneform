<?php
    ob_start();
    
    foreach($alokasi as $data){
        $tagihan = TagihanHth::model()->findByAttributes(array('idPenghuni'=>$data->idPenghuni,'startDate'=>$data->startDate,'endDate'=>$data->endDate));
        $penghuni = Penghuni::model()->findByPk($data->idPenghuni);
        echo $this->renderPartial('cetakhtmlpage',array(
            'data'=>$data,
            'penghuni'=>$penghuni,
            'tagihan'=>$tagihan,
            'nomor' => $nomor,
            'tanggal' => $tanggal,
        ));
    }
    
    $content = ob_get_clean();

    Yii::import('application.extensions.tcpdf.HTML2PDF');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'en');
        //$html2pdf->setModeDebug();
        $html2pdf->setDefaultFont('times');
        $html2pdf->writeHTML($content,false);
        $html2pdf->Output("kontrak.pdf");
        
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>
