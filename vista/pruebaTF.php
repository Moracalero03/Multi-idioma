<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Intento </title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
    <link href="../publico/js/bootstrap-fileinput-master/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous">
    <link href="../publico/js/bootstrap-fileinput-master/themes/explorer-fa5/theme.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="../publico/js/bootstrap-fileinput-master/js/plugins/buffer.min.js" type="text/javascript"></script>
    <script src="../publico/js/bootstrap-fileinput-master/js/plugins/filetype.min.js" type="text/javascript"></script>
    <script src="../publico/js/bootstrap-fileinput-master/js/plugins/piexif.js" type="text/javascript"></script>
    <script src="../publico/js/bootstrap-fileinput-master/js/plugins/sortable.js" type="text/javascript"></script>
    <script src="../publico/js/bootstrap-fileinput-master/js/fileinput.js" type="text/javascript"></script>
    <script src="../publico/js/bootstrap-fileinput-master/js/locales/LANG.js" type="text/javascript"></script>
    <script src="../publico/js/bootstrap-fileinput-master/js/locales/es.js" type="text/javascript"></script>
    <script src="../publico/js/bootstrap-fileinput-master/themes/gly/theme.js" type="text/javascript"></script>
    <script src="../publico/js/bootstrap-fileinput-master/themes/fa5/theme.js" type="text/javascript"></script>
    <script src="../publico/js/bootstrap-fileinput-master/themes/explorer-fa5/theme.js" type="text/javascript"></script>
    <script>$.fn.fileinput.defaults.theme = 'gly';</script>
</head>
<body>

<div class="container">
	 <h4>Multi Language Inputs</h4>
    <form enctype="multipart/form-data">
        
        <label>Spanish Input</label>
            <div class="file-loading">
                <input id="file-es" name="file-es[]" type="file" multiple>
            </div>
            <label>Ingles Input</label>
        <div class="file-loading">
            <input id="file-en" name="file-en[]" type="file" multiple>
        </div>
        <hr style="border: 2px dotted">
    </form>
    <hr>
    <br>
</div>
</body>
<script>
    $('#file-en').fileinput({
        theme: 'fa5',
        
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png', 'gif']
    });
    $('#file-es').fileinput({
        theme: 'fa5',
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png', 'gif']
    });
   
</script>

</html>