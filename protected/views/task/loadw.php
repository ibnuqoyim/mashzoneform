<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>

  var script_url = "https://script.google.com/macros/s/AKfycbyOx5IlBBG06B-EaGTb6K4HeGVASYzLtoq9SYIXvZ6tg8gNDrY/exec";

 function update_value(){

    var id1=	$("#id").val();
    var name= $("#name").val();
	var progres= $("#progres").val();
    var link= $("#link").val();


    var url = script_url+"?callback=&progres="+progres+"&name="+name+"&id="+id1+"&action=update";


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
<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'hidden','id'=>'progres','name'=>'progres','value'=> 100));?>


<script> update_value() </script>

<?php echo "load";
$this->redirect(array('task/index')); ?>
