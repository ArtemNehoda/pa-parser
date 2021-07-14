<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="Artem Nehoda">
    <meta name="keywords" content="square, spiral">
    <meta name="description" content="Pdf containing the cleaned strings arranged on a square spiral">
    <meta charset="UTF-8">
    <title></title>
    <!-- <link rel="stylesheet" href="pdf.css" media="all" /> -->
</head>
<style>
body {
    width: 100%;
    margin: 0 auto;
    height: 29.7cm;
    margin: 0 auto;
    color: #001028;
    background: #ffffff;
    font-family: sans-serif,  Arial;
    font-size: 12px;
    font-family:sans-serif, Arial;
}
h2,h5 {
    text-align: center;
}
#info {
    margin-bottom: 50px;
}
#spiral {
    width: 600px;
    padding: 30px; margin: 0 auto;
    background: black;
}

#spiral pre {
    margin: 0 auto;
    text-align: center;
    color:white;
}
</style>
<body>
    <header>
    </header>
    <main>
        <div id="info">
            <h2>Square spiral of strings</h2>
            <h5>Ascii art</h5>
        </div>
        <div id="spiral">
                <pre>{{$preformattedString}}</pre>
        </div>

    </main>
    <footer>
    </footer>
</body>

</html>
