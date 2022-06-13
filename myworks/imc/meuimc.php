<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="meuimc.css">
    <title>Calculator BMI</title>
</head>

<body>
    <div class="container">
        <div>
            <h1 class="title">Calculator BMI</h1>
            <br>

            <form method="POST">
                <div class="row">
                    <div class="col-sm-6">
                        <label>
                            <p class="pes">WEIGHT :</p>
                        </label>
                        <br>
                        <input type="text" name="peso" id="peso" value="80">
                    </div>
                    <div class="col-sm-6">
                        <label>
                            <p class="pes">HEIGHT :</p>
                        </label>
                        <br>
                        <input type="text" name="altura" id="altura" value="1.75">
                        <button type="submit" class="button btn btn-primary">Calculate</button>
                    </div>
                </div>
                <button type="submit" class="button2 btn btn-primary">Calculate</button>

                <?php
                $novopeso = 0;
                if (isset($_POST['peso'])) {
                    $peso = $_POST['peso'];
                    $altura = $_POST['altura'];
                    $novopeso = $peso / ($altura * $altura);
                } ?>
                <br>

                <br>
                <?php
                if ($novopeso < 18.5) {
                    echo '<p class="teste">YOUR RESULT IS: ' . substr("$novopeso", 0, 4) . '👉THIN</p>';
                } else if ($novopeso >= 18.5 and $novopeso <= 24.9) {
                    echo '<p class="teste">YOUR RESULT IS: ' . substr("$novopeso", 0, 4) . '👉NORMAL</p>';
                } else if ($novopeso >= 25 and $novopeso <= 29.9) {
                    echo '<p class="teste">YOUR RESULT IS: ' . substr("$novopeso", 0, 4) . '👉OVERWEIGHT</p>';
                } else if ($novopeso >= 30 and $novopeso <= 39.9) {
                    echo '<p class="teste">YOUR RESULT IS: ' . substr("$novopeso", 0, 4) . '👉OBESITY</p>';
                } else if ($novopeso > 40.) {
                    echo '<p class="teste">YOUR RESULT IS: ' . substr("$novopeso", 0, 4) . '👉SEVERE OBESITY</p>';
                }
                ?>

            </form>
            <div class="fieldset">
                <p class="legend">See the interpretation of BMI :</p>
                <ul>
                    <hr>
                    <li>LESS THAN 18,5 = THIN</li>
                    <hr>
                    <li>BETWEEN 18,5 AND 24,9 = NORMAL</li>
                    <hr>
                    <li>BETWEEN 25,0 AND 29,9 = OVERWEIGHT</li>
                    <hr>
                    <li>BETWEEN 30,0 AND 39,9 = OBESITY</li>
                    <hr>
                    <li>BIGGER THAN 40,0 = SEVERE OBESITY</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>