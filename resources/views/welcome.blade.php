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
                        <span class="h4">Technicians
                            <a class="btn btn-primary float-right" href="{{url('/add-user')}}">+</a></span>


                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Truck Number</th>
                            <th scope="col">Year</th>
                            <th scope="col">Make</th>
                            <th scope="col">Model</th>
                            <th scope="col">Vin</th>
                            <th scope="col">ItemName</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$user->FirstName}}</td>
                                <td>{{$user->LastName}}</td>
                                <td>{{$user->TruckNumber}}</td>
                                <td>{{$user->Year}}</td>
                                <td>{{$user->Make}}</td>
                                <td>{{$user->Model}}</td>
                                <td>{{$user->Vin}}</td>
                                <td>{{$user->ItemName}}</td>
                                <td>{{$user->Description}}</td>
                                <td>{{$user->Price}}</td>



                                <td><a href="{{url('user/edit/'.$user->id)}}">/edit</a></td>
                                <td><a href="{{url('user/delete/'.$user->id)}}">/delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
