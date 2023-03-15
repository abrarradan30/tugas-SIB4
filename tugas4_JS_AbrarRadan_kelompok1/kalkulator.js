function tambah() {
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    if (isNaN(a1) && isNaN(a2)) {
        alert("Maaf angka belum terisi !");
    } else if (isNaN(a1)) {
        alert("Maaf angka 1 belum terisi !");
    } else if (isNaN(a2)) {
        alert("Maaf angka 2 belum terisi !");
    } else {
        var total = a1 + a2;
        frm.hasil.value = total;
    }
}

function kurang() {
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    if (isNaN(a1) && isNaN(a2)) {
        alert("Maaf angka belum terisi !");
    } else if (isNaN(a1)) {
        alert("Maaf angka 1 belum terisi !");
    } else if (isNaN(a2)) {
        alert("Maaf angka 2 belum terisi !");
    } else {
        var total = a1 - a2;
        frm.hasil.value = total;
    }
    
}

function bagi() {
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    if (isNaN(a1) && isNaN(a2)) {
        alert("Maaf angka belum terisi !");
    } else if (isNaN(a1)) {
        alert("Maaf angka 1 belum terisi !");
    } else if (isNaN(a2)) {
        alert("Maaf angka 2 belum terisi !");
    } else {
        var total = a1 / a2;
        frm.hasil.value = total;
    }
}

function kali() {
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    if (isNaN(a1) && isNaN(a2)) {
        alert("Maaf angka belum terisi !");
    } else if (isNaN(a1)) {
        alert("Maaf angka 1 belum terisi !");
    } else if (isNaN(a2)) {
        alert("Maaf angka 2 belum terisi !");
    } else {
        var total = a1 * a2;
        frm.hasil.value = total;
    }
}

function pangkat() {
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    if (isNaN(a1) && isNaN(a2)) {
        alert("Maaf angka belum terisi !");
    } else if (isNaN(a1)) {
        alert("Maaf angka 1 belum terisi !");
    } else if (isNaN(a2)) {
        alert("Maaf angka 2 belum terisi !");
    } else {
        var total = a1 ** a2;
        frm.hasil.value = total;
    }
}