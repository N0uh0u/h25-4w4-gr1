(function(){   
    let categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    const domaine = window.location.href
    const categorie__ul__li= document.querySelectorAll(".categorie__ul__li");

    mon_fetch(apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`);
    categorie__ul__li.forEach(li => {
        li.addEventListener("mousedown", function(){
            categoryId = li.dataset.id;
            apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
            mon_fetch(apiUrl);
        })
    })
 
    function mon_fetch(apiUrl){
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            let destinationList = document.querySelector('.destination__list');
            destinationList.innerHTML = "";
            data.forEach(article => {
                const articleElement = document.createElement('div');
                articleElement.innerHTML = `
                    <h3>${article.title.rendered}</h3>

                    <input type="radio" id="rad-${article.id}" name="destination" class="destination__rad">

                    <div class="destination__p"${article.excerpt.rendered}
                        <a class="destination__a" href="${article.link}">
                            ...
                        </a>
                    </div>
                `;
                destinationList .appendChild(articleElement);
            });
        })
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }
})()