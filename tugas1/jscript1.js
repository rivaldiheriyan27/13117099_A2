var x = 4;

function Tambah() {
    var nama=document.getElementById("new").value;
    var ul=document.getElementById("ul");
    var NewList=document.createElement("li");
    NewList.setAttribute("id", x);
    AddNew(NewList, nama);
    ul.append(NewList);
    a++;
    }

function Hapus(id) {
    document.getElementById(id).remove();
}

function Edit(id) {
    var nama=prompt("Masukkan nama : ", document.getElementById(id).innerText.split(" | ")[0]);
    if (nama != null) {
        var li = document.getElementById(id);
        li.innerHTML = "";
        AddNew(li, nama, id);
    }
}

function AddNew(li, nama, id) {
    li.append(nama + " | ");
    li.append(Edit(id));
    li.append(" | ");
    li.append(Hapus(id));
}

function Edit(id = x) {
    var edit = document.createElement("b");
    edit.setAttribute("onclick", "edit(" + id + ")");
    edit.append("Edit");
    return edit;
}

function Hapus(id = x) {
    var edit = document.createElement("b");
    edit.setAttribute("onclick", "hapus(" + id + ")");
    edit.append("Hapus");
    return edit;
}

