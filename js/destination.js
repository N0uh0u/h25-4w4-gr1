(function(){
    console.log("04/06/27")
    
    const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    const domaine = window.location.href
    let apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    const categorie__ul__li= document.querySelectorAll(".categorie__ul__li");
        console.log("categorie__ul__li",categorie__ul__li.length);
    
    categorie__ul__li.forEach(li => {
        li.addEventListener("click", function(){
            console.log(li.dataset.id);
            categoryId = li.dataset.id;
            apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
        })
    })
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            const destinationList = document.querySelector('.destination__list');
            data.forEach(article => {
                const articleElement = document.createElement('div');
                articleElement.innerHTML = `

                    <a href="${article.link}">${article.title.rendered}</a>
                `;
                destinationList .appendChild(articleElement);
            });
        })
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
})()