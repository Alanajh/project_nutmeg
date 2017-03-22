<!DOCTYPE html>
<html>
<head><title></title>
	<link id="pageStyle" rel="stylesheet" type="text/css" href="css/themes/main/nutmeg.css">

   <script type="text/javascript">
   	function swap(sheet){
	document.getElementById('pageStyle').setAttribute('href', sheet);
	//window.location.href = "http://192.168.1.205/Project_Nutmeg/WebContent/index.php";
}
   </script>
</head>
<body>
<div class="container-fluid">

	<button onclick="swap('css/themes/plum.css')">PLUM</button>
    <button onclick="swap('css/themes/muted.css')">MUTED</button>
    <button onclick="swap('css/themes/powder.css')">POWDER</button>
    <button onclick="swap('css/themes/plum.css')">PLUM</button>

</div>
</body>
</html>