<HTML>
<HEAD>
<title>Lista książek - Rozwojowiec</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="//code.jquery.com/jquery-1.4.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js.min.js"></script>
</HEAD>
<BODY>
<div id="cover"><img width=128 height=128 src="http://www.nationalguard.com/images/loader.gif"></div>
<h2>Lista książek</h2>
<table border=1>
<tr id="hdr">
<th width="35">Lp.</th>
<th width="120">Tytuł</th>
<th width="100">Autor</th>
<th width="125">Rok wydania</th>
<th width="150">Wydawca</th>
<th width="280">Komentarz</th>
<th width="50">Usuń</th>
</tr>
<?php
 include 'get.php';
?>
</table>

<h3>Dodaj książkę:</h3>
Tytuł: <input maxlength=80 type="text" id="title"><br>
Autor: <input maxlength=40 type="text" id="author"><br>
Rok wydania: <input maxlength=5 type="text" id="year"><br>
Wydawca: <input maxlength=60 type="text" id="publisher"><br>
Komentarz (<div style="display:inline-block" id="lz">0</div>/250): <textarea onkeyup="writeLetter(this)" id="comment" cols=30 rows=5></textarea><br>
<input type="submit" onclick="save()" value="Dodaj!">
</BODY>
</HTML>
