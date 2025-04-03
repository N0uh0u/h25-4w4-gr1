(function(){
    console.log("04/06/27")
    
    const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    const domaine = window.location.href
    const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;

    fetch(apiUrl)
    // <h3>${article.title.rendered}</h3>
    // <div>${article.excerpt.rendered}</div>
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