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
            background-image: url(https://piedmonthealthcare.com/wp-content/uploads/2016/01/piedmont-healthcare-weight-management.jpg);
            background-size: 100%;
        }
        input{
            background-image: url(https://piedmonthealthcare.com/wp-content/uploads/2016/01/piedmont-healthcare-weight-management.jpg);
            background-size: 100%;
        }
        .opacity-90{
            opacity: 90%;
        }
    </style>
</head>

<body>
    <div class="container col-12 mt-5 pt-5 d-flex justify-content-center">
        <div class="card  col-7 mt-5 opacity-90 bg-warning border border-2 border-danger rounded border-opacity-25">
            <div class="card-body">
                <div class="card-title fs-2 d-flex justify-content-center fw-bol">KMI skaičiuoklė</div>
                <form class="p-2 mt-3" action="kmiout.php" method="GET">
                    <input class="p-1 m-2 border rounded " type="number" placeholder="Ūgis (cm)" name="cm">
                    <input class="p-1 m-2 border rounded " type="number" placeholder="Svoris (kg)" name="kg">
                    <button class="btn btn-danger mb-2 ms-2" type="submit" name="submit">Apskaičiuoti</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>