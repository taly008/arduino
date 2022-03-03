const gisRequestUrl = 'http://api.openweathermap.org/data/2.5/onecall?lat=53.817308&lon=83.569232&units=metric&appid=cdb6bafc17593f51908e2fa5f44bc424&lang=ru'

const gisdataWrap = document.getElementById('gisDataWrapper');
//id=1490266
//53.817308, 83.569232
//lat=35&lon=139&

fetch(gisRequestUrl)
    .then(response => response.json())
    .then(data => {
        console.log(data)
        gisdataWrap.innerHTML = `
            <div>
            <div><span style="color:blue;font-size:24px">Gis</span>meteo погода</div>
             <div><span></span>${data.current.weather[0]['description']}</div>
             <div class="imade">
<!--              <img class="feature-img" src="/themes/openweathermap/assets/img/about_us/img1.png" />-->
                    <img src="https://openweathermap.org/img/wn/${data.current.weather[0]['icon']}@2x.png">
             </div>
             <div>Температура</div>
             <div><span>Сейчас: </span>${data.current.temp}</div>
            </div>
            `


    })

