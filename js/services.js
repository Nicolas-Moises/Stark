let imagens= document.querySelectorAll('.small_img');
let modal = document.querySelector('.modal');
let modalImg = document.querySelector('#modal_img');
let btClose = document.querySelector('#bt_close');
let srcVal="";
let currentImagem = 0;

for(let i =0; i<imagens.length;i++){
    imagens[i].addEventListener('click',function(){
        
        srcVal = imagens[i].getAttribute('src');
        modalImg.setAttribute('src', srcVal);
        modal.classList.toggle('modal_active');
    });
    
}
/*
for(let x=0;x<info.length;x++){
    info[x].addEventListener('click',function(){
        pVal = info[x].getAttribute('.tittle');
        infoModal.setAttribute('.tittle', pVal);
        modal.classList.toggle('modal_active');

    })

}
*/
btClose.addEventListener('click', function(){
    modal.classList.toggle('modal_active');
});



