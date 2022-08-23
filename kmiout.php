<?php
//KMI = Kūno masė (kg)/Ūgis (m2).
$kg = $_GET['kg'];
$cm = $_GET['cm'];
$kmi = $kg / (($cm / 100) * ($cm / 100));
$msg = '';
if ($kmi < 18.5) {
    $msg = '<p class="fs-4 text-center red">Jūsu svoris yra per mažas</p>';
} else if ($kmi > 18.5 && $kmi < 25) {
    $msg = '<p class="fs-4 text-center green" >Jūsu svoris yra normalus</p>';
} else if ($kmi > 25 && $kmi < 30) {
    $msg = '<p class="fs-4 text-center yellow" >Jūs turite antsvorio</p>';
} else {
    $msg = '<p class="fs-4 text-center red" >Jūs esate nutukęs</p>';
};
/*mažiau kaip 18.5	nepakankamas svoris
18.5 ir daugiau, mažiau kaip 25	normalus svoris
25 ir daugiau, mažiau kaip 30	antsvoris
30 ir daugiau	nutukimas*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body {
            background-color: #0f1624;
            background-image: url(https://i0.wp.com/wegrouptalk.com/wp-content/uploads/2020/06/WEIGHT-LOSS-Tapeworm-Diet-min.png);
            background-repeat: repeat;
            background-size: 100%;
        }

        .red {
            color: red;
        }

        .green {
            color: green;
        }

        .yellow {
            color: yellow;
        }
        .opacity-90{
            opacity: 90%;
        }
    </style>
</head>

<body>
<div class="text-mute fs-4 text-end p-1"><?php echo date("Y.m.d"); ?></div>
    <div class="container col-12 d-flex justify-content-center">
        <div class="card opacity-90  col-7 mt-5 bg-warning border border-2 border-danger rounded border-opacity-25">
            <div class="card-body ">
                <div class="card-title col-12 fs-2 d-flex justify-content-center fw-bol">Jūsų KMI indeksas:</div>
                <div class="">
                    <p class="fs-1 text-center"><?php echo round($kmi, 2); ?></p>
                    <?php echo $msg ?>
                   <ul>
                    <li>Mažiau kaip 18.5 KMI yra nepakankamas svoris</li>
                    <li>Nuo 18.5 KMI iki 25 KMI yra	normalus svoris</li>
                    <li>Nuo 25 KMI iki 30 KMI yra antsvoris</li>
                    <li>30 KMI ir daugiau yra nutukimas</li>
                   </ul>
                </div>
                <a href="kmi.php"><button class="btn btn-danger ms-3" >Grįžti į skaičiuoklę</button></a>
            </div>
        </div>
    </div>
</body>

</html>