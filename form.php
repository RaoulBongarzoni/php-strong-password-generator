<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="bg-dark vh-100 d-flex">

    <div class="container bg-primary align-self-center">

        <form action="password.php" class="bg-white">
            <div class="row p-3">
                <span class="col-6">Lunghezza Password:</span>
                <div class="col-3">
                    <input type="text" class="form-control" name="pswdLenght">
                </div>
            </div>









            <div class="row p-3">
                <span class="col-6 pt-0">Repetitions:</span>
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pswdRepetitions"  value="true" checked>
                        <div class="form-check-label" >
                        Si
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pswdRepetitions" value="false">
                        <div class="form-check-label" >
                        no
                        </div>
                    </div>
                </div>
            </div>


            <div class="row p-3">
                <div class="col-6"></div>
                <div class="col-3">
                    <div class="form-check"></div>
                    <input class="form-check-input" type="checkbox" name="letters">
                    <span>Lettere</span>
                    <input class="form-check-input" type="checkbox" name="numbers">
                    <span>Lettere</span>
                    <input class="form-check-input" type="checkbox" name="symbols">
                    <span>Lettere</span>
                    

                </div>



            </div>

            <button class="btn btn-primary"
            type="submit">submit</button>
            
        </form>
    </div>
    
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>