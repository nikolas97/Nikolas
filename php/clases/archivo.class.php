<?php
	/**
	* 
	*/
	class Archivo 
	{
		public $id='';
		public function archivo_subir($id,$tipo,$idioma,$limite,$restriccion)
		{
			$this->id = $id;
			$this->archivo = '
			<form enctype="multipart/form-data">
				<input id="file-es" class="file" name="file-es[]" type="file" multiple data-min-file-count="'.$limite.' data-overwrite-initial="false"">
				<br>
				<button type="submit" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn btn-default">Reset</button>
			</form>';
			echo $this->archivo;
		}
	}
?>


<!--
 <div class="container kv-main">
			<div class="page-header">
			<hr>
			</div>
			<form enctype="multipart/form-data">
				<input id="file-0a" class="file" type="file" multiple data-min-file-count="1">
				<br>
				<button type="submit" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn btn-default">Reset</button>
			</form>
			<hr><br><br>
			<form enctype="multipart/form-data">
				<label>Test invalid input type</label>
				<input id="file-0b" class="file" type="text" multiple data-min-file-count="1">
				<script>
				$(document).on('ready', function(){$("#file-0b").fileinput();});
				</script>
			</form>
			<hr><br><br>
			<form enctype="multipart/form-data">
				<input id="file-0a" class="file" type="file" multiple data-min-file-count="3">
				<hr>
				 <div class="form-group">
					<input id="file-0b" class="file" type="file">
				</div>
				<hr><br><br>
				<div class="form-group">
					<input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
				</div>
				<hr><br><br>
				<div class="form-group">
					<input id="file-2" type="file" class="file" readonly data-show-upload="false">
				</div> 
				<hr><br><br>
				<div class="form-group">
					<label>Preview File Icon</label>
					<input id="file-3" type="file" multiple=true>
				</div>
				<hr><br><br>
				<div class="form-group">
					<input id="file-4" type="file" class="file" data-upload-url="#">
				</div>
				<hr><br><br>
				<div class="form-group">
					<button class="btn btn-warning" type="button">Disable Test</button>
					<button class="btn btn-info" type="reset">Refresh Test</button>
					<button class="btn btn-primary">Submit</button>
					<button class="btn btn-default" type="reset">Reset</button>
				</div>
				<hr><br><br>
				<div class="form-group">
					<input type="file" class="file" id="test-upload" multiple>
					<div id="errorBlock" class="help-block"></div>
				</div>
				<hr><br><br>
				<div class="form-group">
					<input id="file-5" class="file" type="file" multiple data-preview-file-type="any" data-upload-url="#">
				</div>
			</form>
			
			
			<hr>
			<h4>Multi Language Inputs</h4>
			<form enctype="multipart/form-data">
				<label>French Input</label>
				<input id="file-fr" name="file-fr[]" type="file" multiple>
				<hr style="border: 2px dotted">
				<label>Spanish Input</label>
				<input id="file-es" name="file-es[]" type="file" multiple>
			</form>
			<hr>
			<br>
		</div>
	</body-->
	<script>
	/*$('#file-fr').fileinput({
		language: 'fr',
		uploadUrl: '#',
		allowedFileExtensions : ['jpg', 'png','gif'],
	});
	$('#file-es').fileinput({
		language: 'es',
		uploadUrl: '#',
		allowedFileExtensions : ['jpg', 'png','gif'],
	});
	$("#file-0").fileinput({
		'allowedFileExtensions' : ['jpg', 'png','gif'],
	});
	$("#file-1").fileinput({
		uploadUrl: '#', // you must set a valid URL here else you will get an error
		allowedFileExtensions : ['jpg', 'png','gif'],
		overwriteInitial: false,
		maxFileSize: 100000,
		maxFilesNum: 100,
		//allowedFileTypes: ['image', 'video', 'flash'],
		slugCallback: function(filename) {
			return filename.replace('(', '_').replace(']', '_');
		}
	});
	
	$(".file").on('fileselect', function(event, n, l) {
		alert('File Selected. Name: ' + l + ', Num: ' + n);
	});
	*/
	/*$("#file-3").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-lg",
		fileType: "any",
		previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
	});
	$("#file-4").fileinput({
		uploadExtraData: {kvId: '10'}
	});
	$(".btn-warning").on('click', function() {
		if ($('#file-4').attr('disabled')) {
			$('#file-4').fileinput('enable');
		} else {
			$('#file-4').fileinput('disable');
		}
	});    
	$(".btn-info").on('click', function() {
		$('#file-4').fileinput('refresh', {previewClass:'bg-info'});
	});
	
	$('#file-4').on('fileselectnone', function() {
		alert('Huh! You selected no files.');
	});
	$('#file-4').on('filebrowse', function() {
		alert('File browse clicked for #file-4');
	});
	
	$(document).ready(function() {
		$("#test-upload").fileinput({
			'showPreview' : false,
			'allowedFileExtensions' : ['jpg', 'png','gif'],
			'elErrorContainer': '#errorBlock'
		});
		
		$("#test-upload").on('fileloaded', function(event, file, previewId, index) {
			alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
		});
		
	});*/
	</script>