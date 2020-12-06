let data = [];
const daftaralat = document.getElementById('daftarbarang');
const namaalat = document.getElementById('namabarang');

function tambah() {
    if (namaalat.value.length > 0) {
        data.push(namaalat.value);
        ubah();
    } else {
        console.log("Kosong")
    }

    namaalat.value = '';
        
}

function edit(item) {
    const indexItem = data.indexOf(item);
    const newName = prompt('Nama Baru');
    if(newName.length > 0) {
        data[indexItem] = newName;
    } else {
        alert('harus diisi');
    }

   ubah();
}

function hapus(item) {
    const indexItem = data.indexOf(item);
    data.splice(indexItem, 1);
   ubah();
}

function ubah() {
    let items = '';
    data.forEach(datum => {
        items +=   `<div class='item'>
                        <span>${datum}</span> [
                        <a href="#" onclick="return edit('${datum}')">Edit</a>
                        |
                        <a href="#" onclick="return hapus('${datum}')">Hapus</a>
                        ]
                    </div>`;
    });

    daftaralat.innerHTML = items;
}