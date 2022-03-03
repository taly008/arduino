const requestUrl = 'https://api.tvmaze.com/search/shows?q=animals'
const dataWrapper = document.getElementById('data-wrapper');
const createTemplate = data => {
    let genres =[];

    if (data.show.genres.length) {
        genres = data.show.genres.reduce((acc,item) => {
            return acc +", "+ item;
        })
    } else {
        genres = 'не определен'
    }
    return `
            <div class="data-item">
                 <div class="image"
<!--                    <img src="${data.show.image?data.show.image.medium:''}">-->
                    <img src="${data.show.image.medium}">
                 </div>
                 <div><span>Название:</span>${data.show.name}</div>
                 <div><span>Оценка:</span>${data.score}</div>
                 <div><span>Жанр:</span>${genres}</div>
                 <div><span>Язык:</span>${data.show.language}</div>
                 <div><span>Описание:</span>${data.show.summary}</div>

            </div>
    `
}

fetch(requestUrl)

    .then(response => response.json())
    .then(data => {
        if(data) {
            console.log(data)
            data.forEach(item => {
                dataWrapper.innerHTML += createTemplate(item)
            })
        }
    })

