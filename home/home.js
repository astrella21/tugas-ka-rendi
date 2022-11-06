document.addEventListener('DOMContentLoaded',function(){ 
    let ketik = new TypeIt('#typing', {})
    for(let i=1;i<=100;i++){
        ketik.type('Sekolah Pusat Keunggulan').pause(1000).delete(24).type('Fasilitas bagus').pause(1000).delete(15)
    }
    ketik.go()
})