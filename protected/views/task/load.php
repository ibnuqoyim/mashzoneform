<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>

  var script_url = "https://script.google.com/macros/s/AKfycbyOx5IlBBG06B-EaGTb6K4HeGVASYzLtoq9SYIXvZ6tg8gNDrY/exec";

 function update_value(){

    var id1=	$("#id").val();
    var name= $("#name").val();
	



    var url = script_url+"?callback=&name="+name+"&id="+id1+"&action=update";


    var request = jQuery.ajax({
      crossDomain: true,
      url: url ,
      method: "GET",
      dataType: "jsonp"
    });


  }






</script>

<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'hidden','id'=>'id','name'=>'id','value'=>$model->item->idBisnis));?>
<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'hidden','id'=>'name','name'=>'name','value'=>$model->lvl6->idBisnis));?>



<script> update_value() </script>

<br>
<br>
<br>
<br>
<br>
<div  class="col-lg-12">

  <?php if($model->status==5){
    ?>

    <div  align="center" class="alert alert-success">
      <strong>Complete!</strong> Your Task Completed

      <br>
      <?php
      echo CHtml::link('Back To Dashboard',array('/task/index'));
      ?>

      <?php
  }if($model->status==4){ ?>
    <div  align="center" class="alert alert-warning">
      <strong>Your Task Waiting for Aprroval</strong>

      <br>
      <?php
      echo CHtml::link('Back To Dashboard',array('/task/index'));
      ?>



  <?php }?>




</div>

</div>
<br>
<br>
<br>
<br>
<br>
