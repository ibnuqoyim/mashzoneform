         <!--<section id="banner" class="container">
            <div id="slideshow" class="col-lg-12">
                 <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/labtek.jpg" alt="Asrama"> 
            </div>
        </section>
        --!>
        <section id="banner" class="container">
        
       
            
            <div class="col-lg-7" >
    
    <br>
                <br>
    
    <!--            <h3 class="bottom20" style="
    margin-bottom: 43px;
    font-family: 'Open Sans', sans-serif;
    font-size: 30px;">Berita Terbaru</h3>
    
    --!>
    
    
    
    
                <?php
                    foreach ($models as $data){
                ?>
                <div class="news reit_berita">
                
             
                    <!--
                    
                    <div class="date-post col-lg-2" style="width:10%">
                        <span class="tanggal">
                            <?php echo substr($data->postDate,8,2); ?>
                        </span>
                        <br/>
                        <span class="bulan">
                            <?php echo SiteController::bulan(substr($data->postDate,5,2)); ?>
                        </span>
                        <br>
                        <span class="tahun">
                            <?php echo substr($data->postDate,0,4); ?>
                        </span>
                    </div>
                    --!>
                    
                    <div class="post-content col-lg-10" style="width:94%; font-size:17px; font-family: 'Open Sans', sans-serif; text-align:justify">
                    
                    
                     <?php echo substr($data->postDate,8,2); ?>
                <?php echo SiteController::bulan(substr($data->postDate,5,2)); ?>
                 <?php echo substr($data->postDate,0,4); ?>
                    
                        <p style="font-size:24px; font-family: 'Open Sans', sans-serif;"><strong><?php echo CHtml::link($data->title, array('site/detailBerita','id'=>$data->id)); ?></strong></p>
                        <br>
                        
                        <p style="font-size:17px; font-family: 'Open Sans', sans-serif;">
                            <?php echo $data->content?>
                        </p>
                        
                        
                        <br>
                        
                        
                        <?php
                    if($data->attachment == '-'){
                        
                    }else{
                ?>
                <h4>Unduh lampiran : <?php echo CHtml::link($data->attachment, yii::app()->request->baseUrl.'/attachment/'.$data->attachment)?></h4>
                <?php        
                    }
                ?>
                        
                        
                        
                        
                    
                        
                    </div>
                </div>
                <?php        
                    }
                ?>
                
                
                
                
                
                
           
                
                
                
                
                
                
                
                
                
                
                
            </div>
            
            
            
             <div class="col-lg-5">
                
                <br>
                <br>
                
                <!--
                <h3 class="bottom20" style="
    margin-bottom: 43px;
    font-family: 'Open Sans', sans-serif;
    font-size: 30px;">Berita Lain</h3>
    
    --!>
                
                
                <?php
                    foreach ($models as $data){
                ?>
                <div class="news" style="border-bottom: 1px solid #cacaca;">
                  
                    <div class="post-content col-lg-10">
                        <p><strong><?php echo CHtml::link($data->title, array('site/detailBerita','id'=>$data->id)); ?></strong></p>
 
                    </div>
                </div>
                <?php        
                    }
                ?>
            </div>
            
            
        </section>