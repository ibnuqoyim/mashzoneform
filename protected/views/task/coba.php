<?php

$this->widget('ext.groupgridview.GroupGridView', array(
      'id' => 'grid1',
      'dataProvider' => $dp,
      'mergeColumns' => array('No','idPic6'),
      'columns' => array(
        array(
              'name' => 'No',
               'header' => 'No',
               'value' => '$row+1',
           ),
        'idPic6',
        'idItem',
        'idLevel6',
        'status',
      ),
    ));


     ?>
