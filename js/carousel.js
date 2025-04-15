(function(){
    let hero__radio__input = document.querySelectorAll(".hero__radio__input");
    console.log(".hero__radio__input.lenght",hero__radio__input.length)

    hero__radio__input.forEach(elm=>{
        // console.log("elm.id_carrousel",elm.dataset.id_carrousel)
        elm.addEventListener("mousedown", function(){
            // console.log("elm.id_carrousel",elm.dataset.id_carrousel);
            let background = document.querySelector('.hero__carrousel');

                 background.classList.remove('hero__carrousel');
                 background.classList.add('hero__carrousel--active');            

                // background.classList.remove('hero__carrousel--active');
            
        })
       
    })
})()