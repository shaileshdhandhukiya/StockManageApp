<html>
<head>
<script type="text/javascript" src="jquery.js">
<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadein("slow");
})
</script>
<style>
.loader 
{
 position: fixed;
 left: 0px;
 top: 0px;
 width: 100%;
 height: 100%;
 z-index: 9999;
 background: url('loader.gif') 50% 50% no-repeat rgb(249,249,249);
}
</style>
</head>
<body>
<div class="loader">
</div>
<div>
This Is A Demo Of How To Display Loading Image While Page Loads
</div>
</body>
</html>