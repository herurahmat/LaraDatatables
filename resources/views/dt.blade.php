<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Datatables Codeigniter</title>
	<!--
	Load CSS
	-->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<style>
		body
		{
			padding-top:10px;
		}
	</style>
</head>
<body>
	<div class="container">
	<div class="table-responsive">
		
		<table class="table table-bordered table-hover table-striped" id="dttb"> <!-- inisialkan ID table dttb -->
			<!--
			Inisialkan header table nya. Sesuai field yg dipanggil (tidak termasuk unset_column)
			-->
			<thead>
				<th>Kelurahan</th>
				<th>Kecamatan</th>
				<th>Kota</th>
				<th>Provinsi</th>
			</thead>
			<tbody></tbody> <!-- Cukup sampai tbody aja. Jangan looping apapun di sini-->
		</table>
		
	</div>
	</div>

	<!---
	Load JS
	-->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	
	<script>
	$(document).ready(function(){
		
		$('#dttb').DataTable({
            serverSide: true,
            processing: true,
            ajax: '<?=url("/getdata");?>',
            columns: [
            	{data: 'kelurahan', name: 'villages.name'},
            	{data: 'kecamatan', name: 'districts.name'},
                {data: 'kota', name: 'regencies.name'},
                {data: 'provinsi', name: 'provinces.name'}
            ]
        });
		
	});
	
	
	</script>
</body>
</html>