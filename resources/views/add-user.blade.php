<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Welcome</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="offset-2 col-md-8 mt-5">
            <div class="card">
                <div class="card-header">
                        <span class="h4">Add Technician
                            </span>


                </div>
                <div class="card-body">
                    <form method="post" action="{{url('/add-technician')}}">
                        <div class="form-group">
                            <label for="FirstName">First Name</label>
                            <input type="text" class="form-control" id="FirstName" aria-describedby="FirstNameHelp">
                        </div>
                        <div class="form-group">
                            <label for="LastName">Last Name</label>
                            <input type="text" class="form-control" id="LastName" aria-describedby="LastNameHelp">
                        </div>
                        <div class="form-group">
                            <label for="TruckNumber">Truck Number</label>
                            <input type="text" class="form-control" id="TruckNumber" aria-describedby="TruckNumberHelp">
                        </div>


                        <div class="form-group">
                            <label for="Year">Year</label>
                            <input type="text" class="form-control" id="Year" aria-describedby="YearHelp">
                        </div>
                        <div class="form-group">
                            <label for="Make">Make</label>
                            <input type="text" class="form-control" id="Make" aria-describedby="MakeHelp">
                        </div>
                        <div class="form-group">
                            <label for="Model">Model</label>
                            <input type="text" class="form-control" id="Model" aria-describedby="ModelHelp">
                        </div>
                        <div class="form-group">
                            <label for="Vin">Vin</label>
                            <input type="text" class="form-control" id="Vin" aria-describedby="VinHelp">
                        </div>

                        <div class="form-group">
                            <label for="ItemName">Item Name</label>
                            <input type="text" class="form-control" id="ItemName" aria-describedby="ItemNameHelp">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" class="form-control" id="Description" aria-describedby="DescriptionHelp">
                        </div>
                        <div class="form-group">
                            <label for="Price">Price</label>
                            <input type="text" class="form-control" id="Price" aria-describedby="PriceHelp">
                        </div>





                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
