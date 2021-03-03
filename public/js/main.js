let readMore = document.querySelectorAll('.read');
let newP = document.querySelectorAll('.full-description')
for (let i = 0; i < readMore.length; i++) {
    readMore[i].addEventListener('click',function(e){
        e.preventDefault();
        let dnone = readMore[i].parentElement;
        dnone.classList.add('d-none');
        newP[i].classList.replace('d-none','d-block');
        // console.log('coucou');
        // console.log(dnone);
        // console.log(newP[i]);
        
    });
}