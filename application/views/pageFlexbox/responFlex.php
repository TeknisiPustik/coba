<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="container">
        <div class="satu">1</div>
        <div class="dua">2</div>
        <div class="tiga">3</div>
    </div>
</body>

<style>
    @media (max-width: 600px) {
        .container {
            flex-direction: column;
        }

        .container>div {
            margin-right: 10px;
            margin-bottom: 60px;
        }
    }
</style>

</html>