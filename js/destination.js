(function(){
    console.log("vive Javascript")
    let categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    // permet de récupérer l'adrsse de la page d'accueil contenu dabs la balise « base »
    const domaine = document.querySelector('base').getAttribute('href')
    mon_fetch(categoryId)
    const categorie__ul__li = document.querySelectorAll(".categorie__ul__li")
    console.log("categorie__ul__li.length", categorie__ul__li.length)
    categorie__ul__li.forEach(li => {
        li.addEventListener("mousedown",function(){
            console.log(li.dataset.id) 
            categoryId = li.dataset.id
            mon_fetch(categoryId)
        })
    })

        function mon_fetch(categoryId)
        {
        apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                //  <div>${article.excerpt.rendered}</div>
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = ""
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.innerHTML = `
                   <h3 class="destination__h3">${article.title.rendered}</h3>
                    <label class="destination__label" for="rad-${article.id}"><img src="https://s2.svgbox.net/hero-solid.svg?ic=dots-horizontal&color=000" width="32" height="32">
                    <input type="radio" id="rad-${article.id}" name="destination" class="destination__rad">

                    <div class="destination__p"${article.excerpt.rendered}
                        <a class="destination__a" href="${article.link}">
                            <img src="https://s2.svgbox.net/hero-solid.svg?ic=dots-horizontal&color=000" width="32" height="32">
                        </a>
                    `;
                    destinationList .appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
        }

})()