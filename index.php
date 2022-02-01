<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/all.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a href="" class="navbar-brand">LOGO</a>
                <ul class="navbar-nav">
                    <li><a href="" class="nav-link">Series</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            My Series Homework
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST">

                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="starting_number" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="Ending_number" required/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Result:</label>
                                    <div class="col-md-9">
                                        <input type="text" name="" value=" <?php echo isset($result)? $result :'' ?> " class="form-control" readonly></label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" value="submit" name="submit"/>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="assets/js/jquery-3.6.0.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>

<!--
-->

<?php
/*

require_once 'vendor/autoload.php';
use App\classes\Calculator;

$calculator = new Calculator(['10','20','BITM',20,400,5444,4545,6465,56,56]);
$calculator->index();

*/
?>
