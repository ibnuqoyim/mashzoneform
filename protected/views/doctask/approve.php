<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>

  var script_url = "https://script.google.com/macros/s/AKfycbyOx5IlBBG06B-EaGTb6K4HeGVASYzLtoq9SYIXvZ6tg8gNDrY/exec";

 function approve_value(){

    var id1=	$("#id").val();
    var name= $("#name").val();
	var progres= $("#progres").val();



    var url = script_url+"?callback=&progres="+progres+"&name="+name+"&id="+id1+"&action=approve";


    var request = jQuery.ajax({
      crossDomain: true,
      url: url ,
      method: "GET",
      dataType: "jsonp"
    });


  }






</script>
<style>
.container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
}
</style>
<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'hidden','id'=>'id','name'=>'id','value'=>$model->lvl4->idBisnis));?>
<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'hidden','id'=>'name','name'=>'name','value'=>$model->dok->namaDoc));?>
<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'hidden','id'=>'progres','name'=>'progres','value'=> 1));?>


<script> approve_value() </script>
<br>
<br>
<br>
<br>
<br>
<div  class="col-lg-12">
<div  align="center" class="alert alert-success">
  <strong>Success!</strong> Your Document Succes Approved

  <br>
  <?php
  echo CHtml::link('Back To Dashboard',array('/task/indem'));
  ?>

</div>

</div>
<br>
<br>
<br>
<br>
<br>
