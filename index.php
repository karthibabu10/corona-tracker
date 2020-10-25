<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona tracker</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<img src="https://image.freepik.com/free-vector/coronavirus-2019-ncov-virus-background-with-disease-cells-covid-19-corona-virus-outbreaking-pandemic-medical-health-risk-concept_139523-181.jpg" alt="" srcset="">
    <div class="header">
        <H1 class="text-center font-weight-bold">Corona Tracker India</H1>
    </div>	
	<div class="row">
        <div class="col-md-6 left-box">
            <div class="form">
                <form action="" method="post">
                    <input type="text" name="state" id="state" placeholder="State" ><br><br>
                    <input type="text" name="dist" id="dist" placeholder="District">
                    <div class="button p-3 text-center ml-auto ">
                        <button class="btn btn-primary" type="submit" name="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
	 <div class="col-md-6 right-box">
        <?php
            $data=file_get_contents("https://api.covid19india.org/state_district_wise.json");
            
            $corona=json_decode($data,true);
        ?>
	</div>
</body>
</html>