<ul class="breadcrumb">
	<li><a href="<?php echo DIR;?>admin">Panel de Administración</a></li>
	<li>Ponentes</li>
</ul>
<h1>Ponentes</h1>
<?php echo \helpers\session::pull('message'); ?>
<p><a href="<?php echo DIR; ?>admin/ponentes/add" class="btn btn-primary">Agregar Ponente</a></p>

<table id="ponentes" class='table table-striped table-bordered'>
<thead>
	<tr>
		<th>Imágen de Perfil</th>
		<th>Nombre completo</th>
		<th>Centro</th>
		<th>Biografía</th>
		<th>Opciones</th>
	</tr>
</thead>

<tfoot>
	<tr>
		<th>Imágen de Perfil</th>
		<th>Nombre completo</th>
		<th>Centro</th>
		<th>Biografía</th>
		<th>Opciones</th>
	</tr>
</tfoot>
<tbody>
<?php 
	if($data['ponentes']){
		foreach($data['ponentes'] as $row){
			echo '<tr>';
			echo '<td><img src="../'.$row->ponenteImg.'" style="max-height: 150px; display: block; margin: 0 auto;"></td>';
			echo '<td>'.$row->ponenteName.'</td>';
			echo '<td>'.$row->ponenteCentro.'</td>';
			echo '<td>'.$row->ponenteBio.'</td>';
			echo '<td>
							<a href="'.DIR.'admin/ponentes/edit/'.$row->ponenteID.'"><span class="glyphicon glyphicon-edit"></span></a>
							<a href="javascript:delponente(\''.$row->ponenteID.'\', \''.$row->ponenteName.'\')"><span class="glyphicon glyphicon-remove"></span></a>
						</td>';
			echo '</tr>';
		}
	}
?>	
<tbody>
</table>

