async function orszagok() {
        let response = await fetch("logicals/felsofoku.php", {
            method: 'post',
            cache: 'no-cache',
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: "op=orszag"
        });
        let data = await response.text();
        data = JSON.parse(data);
        orszagselect.innerHTML = '<option value="0">Válasszon ...</option>';
        let lista = data.lista;
        for(let i=0; i<lista.length; i++)
          orszagselect.innerHTML += '<option value="'+lista[i].id+'">'+lista[i].nev+'</option>';
}

async function varosok() {
    varosselect.innerHTML = "";
    intezmenyselect.innerHTML = "";
    for(let i=0; i<datas.length; i++) datas[i].innerHTML = "";
    let orszagid = orszagselect.value;
    if (orszagid != 0) {
        let response = await fetch("logicals/felsofoku.php", {
            method: 'post',
            cache: 'no-cache',
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: "op=varos&id="+orszagid
        });
        let data = await response.text();
        data = JSON.parse(data);
        varosselect.innerHTML = '<option value="0">Válasszon ...</option>';
        let lista = data.lista;
        for(let i=0; i<lista.length; i++)
          varosselect.innerHTML += '<option value="'+lista[i].id+'">'+lista[i].nev+'</option>';
    }
}

async function intezmenyek() {
    intezmenyselect.innerHTML = "";
    for(let i=0; i<datas.length; i++) datas[i].innerHTML = "";
    let varosid = varosselect.value;
    if (varosid != 0) {
        let response = await fetch("logicals/felsofoku.php", {
            method: 'post',
            cache: 'no-cache',
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: "op=intezmeny&id="+varosid
        });
        let data = await response.text();
        data = JSON.parse(data);
        intezmenyselect.innerHTML = '<option value="0">Válasszon ...</option>';
        let lista = data.lista;
        for(let i=0; i<lista.length; i++)
          intezmenyselect.innerHTML += '<option value="'+lista[i].id+'">'+lista[i].nev+'</option>';
    }
}

async function intezmeny() {
    for(let i=0; i<datas.length; i++) datas[i].innerHTML = "";
    let intezmenyid = intezmenyselect.value;
    if (intezmenyid != 0) {
        let response = await fetch("logicals/felsofoku.php", {
            method: 'post',
            cache: 'no-cache',
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: "op=info&id="+intezmenyid
        });
        let data = await response.text();
        data = JSON.parse(data);
        document.getElementById("nev").innerHTML = data.nev;
        document.getElementById("cim").innerHTML = data.cim;
        document.getElementById("tel").innerHTML = data.tel;
        document.getElementById("mail").innerHTML = data.email;
    }
}

window.onload = function() {
    orszagselect = document.getElementById("orszagselect");
    varosselect = document.getElementById("varosselect");
    intezmenyselect = document.getElementById("intezmenyselect");
    datas = document.getElementsByClassName("adat");
    
    orszagok();
    orszagselect.onchange = varosok;
    varosselect.onchange = intezmenyek;
    intezmenyselect.onchange = intezmeny;
};

