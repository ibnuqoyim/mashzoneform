<?php
    ob_start();
    echo $this->renderPartial('htmlpage',array(
                    'model'=>$model,
                    'alokasi'=>$alokasi,
                    'tagihan'=>$tagihan,
                    'count'=>$count
            )); 
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
