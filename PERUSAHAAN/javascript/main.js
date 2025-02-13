document.querySelectorAll('.btnDetail').forEach(item=> {
    item.addEventListener('click',(e)=> {
        let parent= e.target.parentNode.parentNode;

let gambar = parent.querySelector('.card-img-top').scr;
let harga = parent.querySelector('.harga').innerHTML;
let judul = parent.querySelector('.card-text').innerHTML;
console.log(`judul: ${judul}`);

    });
});