<div class="row">
	<div class="col-md-12">
		<?php 
			if($data['ponentes']){
				foreach ($data['ponentes'] as $row) {
					echo '<h2><a href="'.DIR.$row->slug.'">'.$row->ponenteName.'</a></h2>';
					echo '<h2>'.$row->ponenteCentro.'</h2>';
				}
			}
		?>
	</div>
</div>

