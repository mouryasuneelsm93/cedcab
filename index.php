<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .container-fluid {
            width: 100%;
            margin-left: 0px;
            margin-right: 0px;
            padding-left: 0px;
            padding-right: 0px;
            padding-top: 0px;
            background-image: url(https://www.business-startpage.com/wp-content/uploads/2018/04/Taxi-to-Airport.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;

        }

        h1 {
            text-transform: capitalize;
            color: white;
            font-weight: bold;
            font-size: 40px;

        }

        .contain {
            width: 100%;
            padding-top: 3%;

            background-color: rgba(0, 0, 0, .5);
            padding-bottom: 1%;
        }

        p {
            font-size: 20px;
            color: white;
            text-transform: capitalize;
        }

        #p1 {

            border-radius: 10px;
            width: 30%;
            color: black;
            margin: auto;

            background-color: yellow;
            text-transform: capitalize;
        }

        .b1 {
            border-bottom: ridge;
            padding-bottom: 10px;
        }

        .col1 {
            background-color: white;
            /* padding:10px 10px; */
            padding-top: 10px;
            margin-left: 10%;
            margin-right: 10%;
            margin-top: 5%;
            border-radius: 10px;
            padding-bottom: 10px;

        }

        .r1 {
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 20px;
        }

        .row {
            margin-left: 0px;
            margin-right: 0px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="contain">
            <div class="text-center">
                <h1>book a city taxi to your destination in town </h1>
                <p>choose from a range of categories and prices</p>
            </div>
            <div class="row r2">
                <div class="col-sm-4 col1">
                    <form id="loginform">
                        <div class="row">
                            <div class="col-sm-12 text-center b1">
                                <p id="p1">city taxi</p>
                            </div>
                            </row>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <h4>Your EveryDay Travel Partner</h4>
                                    <h5>AC Cab For Point to Point Travel</h5>
                                </div>
                            </div>
                            <div class="row r1">
                                <div class="col-sm-12 text-center">
                                    <select id="pickup" class="form-control">
                                        <option>Charbagh</option>
                                        <option>Indira Nagar</option>
                                        <option>BBD</option>
                                        <option>Barabanki</option>
                                        <option>Basti</option>
                                        <option>Gorakhpur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row r1">
                                <div class="col-sm-12 text-center">
                                    <select id="drop" class="form-control">
                                        <option>Charbagh</option>
                                        <option>Indira Nagar</option>
                                        <option>BBD</option>
                                        <option>Barabanki</option>
                                        <option>Basti</option>
                                        <option>Gorakhpur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row r1">
                                <div class="col-sm-12 text-center">
                                    <select id="cabtype" class="form-control">
                                        <option> CedMicro</option>
                                        <option>CedMini</option>
                                        <option> CedRoyal</option>
                                        <option>CedSUV</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="row r1">
                                <div class="col-sm-12 text-center">
                                    <input type="text" class="form-control" placeholder="Enter weight in kg">
                                </div>
                            </div>
                            <div class="row r1">
                                <div class="col-sm-12 text-center">
                                    <input type="submit" value="Calculate Free" class="form-control btn btn-success">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $("#loginform").submit(function (e) {
            var a = $("#pickup").val();
            var b = $("#drop").val();
            var c = $("#cabtype").val();
            var d = $("#luggage").val();
            //console.log(a);
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "next.php",
                data: { "pickup": a, "drop": b, "cabtype": c, "luggage": d },
                success: function (data) {
                    console.log(data);
                }
            })

        })

    })
</script>