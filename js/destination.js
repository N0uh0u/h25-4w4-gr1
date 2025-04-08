(function(){   
    let categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    const domaine = window.location.href
    const categorie__ul__li= document.querySelectorAll(".categorie__ul__li");
    // const titre_accordeon = document.querySelectorAll(".titre_accordeon");

    mon_fetch(apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`);
    categorie__ul__li.forEach(li => {
        li.addEventListener("mousedown", function(){
            categoryId = li.dataset.id;
            apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
            mon_fetch(apiUrl);
        })
    })
    // titre_accordeon.forEach(h3 =>{
    //     h3.addEventListener("mousedown", function(){
    //         console.log("test")
    //     })
    // })
    function mon_fetch(apiUrl){
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            let destinationList = document.querySelector('.destination__list');
            destinationList.innerHTML = "";
            data.forEach(article => {
                const articleElement = document.createElement('div');
                articleElement.innerHTML = `
                    <h3 class="titre_accordeon">${article.title.rendered}</h3>
                    <p>${article.excerpt.rendered}</p>
                    <a href="${article.link}">Lire plus</a>
                `;
                destinationList .appendChild(articleElement);
            });
        })
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }
})()