<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Songs</title>
    <link rel="stylesheet" href="/css/songs.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa+One:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="heart-container">
            <svg class="white-heart" width="99" height="95" viewBox="0 0 99 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M49.452 13.481C50.7057 11.9965 51.8819 10.5113 53.154 9.11217C60.4671 1.06529 69.53 -1.81762 79.9306 1.12667C90.3566 4.07802 96.6107 11.3587 98.436 22.0401C99.7864 29.943 97.499 37.0071 92.3301 43.156C78.1858 59.9821 64.0662 76.8294 49.9353 93.6668C49.7801 93.8517 49.6051 94.0196 49.3744 94.2637C47.3529 91.8613 45.3781 89.5196 43.4089 87.1729C33.8747 75.8071 24.3426 64.4398 14.8091 53.074C11.8232 49.5138 8.81542 45.9719 5.85278 42.3926C-6.54456 27.415 1.81629 4.12035 20.9418 0.593975C31.2063 -1.29833 39.7245 2.01567 46.4237 10.011C47.3424 11.1068 48.2575 12.2053 49.1768 13.3004C49.2198 13.3504 49.2911 13.3773 49.452 13.481Z" fill="white"/>
                </svg>
        </div>
        <div class="headings-container">
            <p>Lista</p>
            <h1>Canciones que te gustan</h1>
            <p>agalarza-ec.667canciones</p>
        </div>
    </header>
    <main>
        <svg class="play" width="79" height="79" viewBox="0 0 79 79" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="39.5" cy="39.5" r="39.5" fill="#1ED760"/>
            <path d="M31 50.455V28.545C31 26.9877 32.7013 26.0279 34.0342 26.8332L52.1666 37.7882C53.4543 38.5661 53.4543 40.4338 52.1666 41.2118L34.0342 52.1668C32.7013 52.9721 31 52.0123 31 50.455Z" fill="black"/>
        </svg>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Álbum</th>
                    <th>Fecha en la que se añadió<svg class="arrow" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.5 0H0.5L8.5 8L16.5 0Z" fill="#1ED760"/>
                        </svg></th>
                    <th class="time-icono"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 5.5V12H16" stroke="#B2B2B2" stroke-width="2"/>
                        <circle cx="11.5" cy="11.5" r="10.5" stroke="#B2B2B2" stroke-width="2"/>
                        </svg></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mysongs as $song)
                    <tr>
                        <td class="id">{{$song->id}}</td>
                        <td class="title"><img class="album-image" src="https://is1-ssl.mzstatic.com/image/thumb/Music124/v4/c7/88/ff/c788ff21-4fe4-edd1-8879-ba0049a1ec5d/5060391090146_cover.jpg/1200x1200bf-60.jpg"><div><p>{{$song->Titulo}}</p><span>{{$song->Autor}}</span></div></td>
                        <td class="album">{{$song->Album}}</td>
                        <td class="fecha">{{$song->Fecha}}</td>
                        <td class="duracion"><svg class="green-heart" width="99" viewBox="0 0 99 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M49.452 13.481C50.7057 11.9965 51.8819 10.5113 53.154 9.11217C60.4671 1.06529 69.53 -1.81762 79.9306 1.12667C90.3566 4.07802 96.6107 11.3587 98.436 22.0401C99.7864 29.943 97.499 37.0071 92.3301 43.156C78.1858 59.9821 64.0662 76.8294 49.9353 93.6668C49.7801 93.8517 49.6051 94.0196 49.3744 94.2637C47.3529 91.8613 45.3781 89.5196 43.4089 87.1729C33.8747 75.8071 24.3426 64.4398 14.8091 53.074C11.8232 49.5138 8.81542 45.9719 5.85278 42.3926C-6.54456 27.415 1.81629 4.12035 20.9418 0.593975C31.2063 -1.29833 39.7245 2.01567 46.4237 10.011C47.3424 11.1068 48.2575 12.2053 49.1768 13.3004C49.2198 13.3504 49.2911 13.3773 49.452 13.481Z" fill="#1bd760"/>
                            </svg>{{$song->Duracion}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>

</html>