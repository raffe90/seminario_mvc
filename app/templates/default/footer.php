
</div> <!-- ./container -->

	<footer>
		<div class="container">
			<div class="row">
				<p class="bold">© 2do Seminario Internacional de Seguridad del Paciente y Excelencia Clínica</p>
				<a href="<?php echo DIR;?>condiciones">Condiciones de uso</a>	
			</div>
		</div>
	</footer>
<!-- JS -->
<?php
	helpers\assets::js(array(
		'//code.jquery.com/jquery-1.11.2.min.js',
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', 
		'//cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js',
		'//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.js'
	)) ;
	echo $data['js'];
?>
<script type="text/javascript">
	$(document).ready(function() {
    $('#ponentes').dataTable();
} );
</script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</body>
</html>
