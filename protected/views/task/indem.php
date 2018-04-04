<header>
		 <div class="info">
				 <div class="container">
						 <div class="col-lg-4 left">
								 <a class="page"><span class="glyphicon glyphicon-briefcase gold" aria-hidden="true"></span> Dashboard Manager</a>
						 </div>
						 <div class="col-lg-5 right alamat">



												 <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' ('.Yii::app()->user->role.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>

						 </div>
						 <div class="clear"></div>
				 </div>
		 </div>
 </header>

 <section class="container">
<div class="col-lg-12">
				 <h2 align="center"> Welcome Mr. <?php echo Yii::app()->user->nama; ?> </h2>
<br>
<!-- <div class="col-lg-6">
	<div class="panel panel-default">
		<div class="panel-heading" align="center">Progres MTO</div>

		<div class="panel-body">
			<table class="table">
		<thead class="thead-light">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Produk</th>
				<th scope="col">Progres</th>
				<th scope="col">Tahapan</th>
			</tr>
		</thead>
		<tbody>
			<?php $produk = Level4::model()->findAll('idLvl3=:idPic',array(':idPic'=>Yii::app()->user->id));
			$i=0;
			foreach ($produk as $product) {
				$task = Task::model()->findAll('idItem=:idItem AND status=3',array(':idItem'=>$product->id));
				$progrestask = Yii::app()->db->createCommand("SELECT sum(progres) FROM task where idItem ='".$product->id."'")->queryScalar();
				$sumtask = Yii::app()->db->createCommand("SELECT count(id) FROM task where idItem ='".$product->id."'")->queryScalar();
				$avg = $progrestask/$sumtask ;
				$i++;
				?>
	<tr>
	 <th scope="row"><?php echo $i ;?></th>
	 <td><?php echo $product->namaLvl4; ?></td>
	 <td><?php echo (number_format((float)$avg, 2, '.', '').' %'); ?></td>
	 <td><?php  foreach ($task as $tuk) {
	 	echo $tuk->lvl6->namaLvl6;
	 } ?></td>
	</tr>



	<?php		}

			 ?>
		 </tbody>
			</table>


		</div>
	</div>
	</div>
end of progres MTO-->
<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading" align="center">Document Need Approval</div>

		<div class="panel-body">
			<table class="table">
		<thead class="thead-light">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Document</th>
				<th scope="col">Item</th>
				<th scope="col">Status</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $produk = Doctask::model()->findAll('(needA=1 or needA=3) and file!=""');
			$i=0;
	if($produk == NULL)	{

			        ?>
			        <tr>
	 <td colspan="5" align="center"><i>No Document Need to Approve!</i></td>

	</tr>

			        <?php
			    } else {
			foreach ($produk as $product)  {
				$id = $product->lvl4->idLvl3;
				if($id == Yii::app()->user->id) {
				$i++;

	?>
	<tr>
	 <th scope="row"><?php echo $i ;?></th>
	 <td><?php echo $product->dok->namaDoc; ?></td>
	 <td><?php echo $product->lvl4->namaLvl4; ?></td>
	 <td><?php if($product->needA == 1) { echo "Waiting Approval"; } elseif($product->needA == 3)  {echo "Rejected";} ?></td>
	 <td><a href="http://mashzone.iclov.com/dokumentask/<?php echo $product->file ?>" <span class="glyphicon glyphicon-download" aria-hidden="true"></span></a>&nbsp &nbsp &nbsp
	<?php echo CHtml::link('       <span class="glyphicon glyphicon-check" style="color:green" aria-hidden="true"></span> &nbsp &nbsp &nbsp', array('/doctask/approve','id'=>$product->id));

	 echo CHtml::link('     <span class="glyphicon glyphicon-remove" style="color:red" aria-hidden="true"></span> ', array('/dokreject/create','id'=>$product->id));
	 ?> </td>
	</tr>



<?php }


			}	}

			  ?>
		 </tbody>
			</table>


		</div>
	</div>
	</div>

	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" align="center">Document Approved</div>

			<div class="panel-body">
				<table class="table">
			<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Document</th>
					<th scope="col">Item</th>
					<th scope="col">Status</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $produk = Doctask::model()->findAll('needA=2 and file!=""');
				$i=0;
				foreach ($produk as $product) {
					$id = $product->lvl4->idLvl3;
					if($id == Yii::app()->user->id) {
					$i++;

		?>
		<tr>
		 <th scope="row"><?php echo $i ;?></th>
		 <td><?php echo $product->dok->namaDoc; ?></td>
		 <td><?php echo $product->lvl4->namaLvl4; ?></td>
		 <td> Aprroved </td>
		 <td><a href="http://mashzone.iclov.com/dokumentask/<?php echo $product->file ?>" <span class="glyphicon glyphicon-download" aria-hidden="true"></span></a>

		 </td>
		</tr>



	<?php


}	}

				 ?>


			 </tbody>
				</table>


			</div>
		</div>
		</div>
<!--end approve-->
<!-- <div class="col-lg-6">
	<div class="panel panel-default">
		<div class="panel-heading" align="center">Progres PIC Level6</div>

		<div class="panel-body">
			<table class="table">
		<thead class="thead-light">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nama</th>
				<th scope="col">Progres</th>
				<th scope="col">Kontak</th>
			</tr>
		</thead>
		<tbody>
			<?php $model=Task::model()->findAll(
                    array(
                        'condition'=>'idPic5="'.Yii::app()->user->id.'"',
                        'group'=>'idPic6'
                    ));
			$i=0;
			foreach ($model as $bawahan) {

				$i++;

	?>
	<tr>
	 <th scope="row"><?php echo $i ;?></th>
	 <td><?php echo $bawahan->pic6->nama; ?></td>
	 <td><?php  ?></td>
	 <td><?php echo $bawahan->pic6->telp; ?> </td>
	</tr>



<?php		}

			 ?>
		 </tbody>
			</table>


		</div>
	</div>
	</div>
	<!--end of-->


</div>
 </section>
 <script>
                    $('#myTab a').click(function (e) {
                        e.preventDefault()
                        $(this).tab('show')
                    })
                </script>
