(function(){
     let hero__radio__input = document.querySelectorAll(".hero__radio__input")
     let hero__carrousel = document.querySelectorAll(".hero__carrousel")
     let hero__animation = document.querySelectorAll(".hero__animation")
     console.log(hero__carrousel.length)
     console.log("hero__radio__input = " , hero__radio__input.length)
     hero__radio__input.forEach(elm =>{
         elm.addEventListener('mousedown',function(){
             parcourir_carrousel()
             parcourir_animation()
             console.log(elm.dataset.id_carrousel) 
             hero__carrousel[elm.dataset.id_carrousel].classList.add("hero__carrousel--active")
             hero__animation[elm.dataset.id_carrousel].style.display = "block";
         })
     })
     
     function parcourir_carrousel(){
         hero__carrousel.forEach(element => {
             element.classList.remove("hero__carrousel--active")
         });
     }
     function parcourir_animation(){
          hero__animation.forEach(elm=>{
               elm.style.display="none";
          })
     }
     })()