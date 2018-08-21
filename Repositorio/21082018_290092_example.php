
<?php	
	if(isset($_POST["Send"])){		// If form is submited
		require_once("uploadClass.php");	
		$file=$_FILES["fileField"];					// Get file from form
		
		$destination="Uploaded_Files/";
		if (!file_exists($destination)) {		// If 'destination' folder dosn't exist, create
			mkdir($destination);
		}

		$process=new Upload($destination);		// Set 'destination' as new default destination folder for upload
		
		$uploadResult=$process->executeUpload($file);	// Attach file to upload process
		
		echo $uploadResult;
	}
?>

<form action="?" method="POST" enctype="multipart/form-data">
	<table id="dyntable" class="table table-bordered">
		<tr>
			<td>
				File
			</td>
			<td>
				<input type="file" name="fileField" id="fileField" placeholder="">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<center>
					<button type="submit" name="Send">Send</button>
					<button type="reset">Reinitialiser</button>
				</center>
			</td>
		</tr>
	</table>
</form>