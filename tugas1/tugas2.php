<!DOCTYPE html>
<html>
<head>
    <title>tugas2</title>
</head>
<body>
    <input type="text" name="new" id="new">
    <button onclick="Tambah()">Tambah</button>
    <ul id="ul">
        <li id="BK">Buku Tulis [ 
            <a onclick="edit('BK')">Edit</a> |  
            <a onclick="hapus('BK')">Hapus ] </a>
        </li>
        <li id="P">Pensil [ 
            <a onclick="edit('P')">Edit</a> | 
            <a onclick="hapus('P')">Hapus ] </a>
        </li>
        <li id="S">Spidol [ 
            <a onclick="edit('S')">Edit</a> | 
            <a onclick="hapus('S')">Hapus ] </a>
        </li>
    </ul>
</body>
<script src="jscript2.js"></script>
</html>