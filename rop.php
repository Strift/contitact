<?PHP
include ("TOOLS/CORE_DB_Functions.php");
$pk=$_GET['pk'];

if ($pk =="" )
{
?>
<HTML>
<HEAD>
<META HTTP-EQUIV="content-type" CONTENT="text/html;charset=iso-8859-1">
<META HTTP-EQUIV="Refresh" CONTENT="4;URL=./description.html.php">
	<link href="./STYLE/style.css" rel="stylesheet" type="text/css">
</HEAD>
<body>

<?PHP
print "<H2><BR><BLINK><font color=\"red\">ERROR: The pk is missing!!!</font><BLINK></H2>\n";
die();
}
	else
{
remove_a_contact($pk);
?>
	<HTML>
	<HEAD>
	<META HTTP-EQUIV="content-type" CONTENT="text/html;charset=iso-8859-1">
	<META HTTP-EQUIV="Refresh" CONTENT="0;URL=./vapr.php">
	<link href="./STYLE/style.css" rel="stylesheet" type="text/>
	</HEAD>
	<?PHP
}
?>
