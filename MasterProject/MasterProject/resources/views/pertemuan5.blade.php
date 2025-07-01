<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arief darmawan</title>

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        .center-div {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        .image-container {
            display: flex;
            flex-direction: column-reverse;
            gap: 20px;
        }

        a {
            text-decoration: none;
        }

        #a {
            color: yellow;
        }

        #b {
            color: green;
        }
    </style>

    <link rel="stylesheet" href="./css/belajar.css">
</head>
<body>

    <a href="/1" target="blank" style="color: rgba(255, 95, 95, 0.829)">pertemuan 1</a>
    <a href="/2" id="b" target="blank">Pertemuan 2</a>
    <a href="/3" id="a" target="blank">Pertemuan 3</a>

    <h1 id="warnabiru">Selamat belajar web</h1>
    <h2 id="garisditulisan">Selamat &nbsp; &nbsp; &nbsp; &nbsp; datang di pemrograman web 1</h2>
    <h3 >Selamat datang di pemrograman web 1</h3>
    <h4 class="warnamerah garisditulisan">Selamat datang di pemrograman web 1</h4>
    <h5>Selamat datang di pemrograman web 1</h5>
    <h6>Selamat datang di pemrograman web 1</h6>   

    <p>
        <i>UNAMA</i> <b>ipsum</b> <b><i>dolor</i></b> sit amet consectetur adipisicing elit. 
        <hr><br><br><br>
        Eum <small>testing</small> <sub>molestiae</sub><sup>reiciendis</sup> <s>saepe</s> <u>numquam</u> optio ex tenetur inventore adipisci mollitia? Modi sed, optio distinctio odit quibusdam voluptatem voluptas? Veniam quae odit ipsam obcaecati quibusdam libero possimus porro saepe? Nemo expedita, vero non nobis aliquid reiciendis exercitationem nisi deserunt numquam. Sit, harum corrupti ipsum suscipit ullam vitae, cum assumenda nesciunt beatae expedita, saepe iste. Incidunt ratione saepe necessitatibus possimus exercitationem nesciunt impedit labore iusto totam adipisci soluta voluptatem ut, blanditiis, repellendus reiciendis distinctio doloribus officia voluptatibus dolores, iste laudantium laborum corrupti fuga repellat. Eligendi nihil ad nostrum culpa doloribus! Laborum, modi?
    </p>

    <div class="image-container">
        <img src="./assets/images/g1.jpg" alt="gedung unama" width="200" height="130">
        <img src="./assets/images/g2.png" alt="gedung unama" width="200" height="130">
        <img src="./assets/images/g3.jpg" alt="gedung unama" width="200" height="130">
        <img src="./assets/images/g4.jpg" alt="gedung unama" width="200" height="130">
    </div>

    

</body>
</html>