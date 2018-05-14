<?php
//print_r ($students);
//echo $students->username;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
        <script type="text/javascript">
			$(document).ready(function () {
				//alert('sdfdsf');
			$('#example').DataTable();
			});
		</script>
    </head>
    <body>
        <div class="container" style="margin-top:5%">
		<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">      
        <table id="example" class="display">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>password</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                   
                    <td><?php print htmlentities($student->username); ?></td>
                    <td><?php print htmlentities($student->email); ?></td>
                    <td><?php print htmlentities($student->password); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
		
		</div>
		<div class="col-md-3"></div>
		</div>
		</div>
    </body>
</html>

