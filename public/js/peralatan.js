var additem = document.getElementById('itemcheck')
for (var i = 0; i < additem.length; i++) {
    var button = additem[i]
    button.addEventListener('change', function(event) {
        var buttonClicked = event.target
        updateharga()
    })
}


function updateharga() {
    var harga = document.getElementById('hargaitem')
    for (var i = 0; i < harga.length; i++) {
        var hargaitem = harga[i]
        console.log(hargaitem)
    }
}