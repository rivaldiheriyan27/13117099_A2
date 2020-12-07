<!DOCTYPE html>
<html>

<head>
    <title>Tugas 1 Modul 10</title>
</head>
<body>
    <input type="text" name="new" id="new">
    <button onclick="add()">Tambah</button>
    <ul id="ul">
        <li id="1">Buku Tulis [ 
            <a onclick="edit('1')">Edit</a> | 
            <a onclick="hapus(1)">Hapus ] </a>
    </li>
        <li id="2">Pensil [ 
            <a onclick="edit('2')">Edit</a> | 
            <a onclick="hapus(2)">Hapus ] </a>
    </li>
        <li id="3">Spidol [ 
            <a onclick="edit('2')">Edit</a> | 
            <a onclick="hapus(2)">Hapus ] </a>
    </li>     
    </ul>
</body>
<script src="jscript1.js">
</script>
</html>