<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>LuxuryRentals - Contacts</title>
</head>
<body>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">
                Contact Us
            </h2>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div id="form-group">
                    <label>Name : </label>
                    <input type="text" name="name" autocomplete="off" class="form-control">
                </div>
                <div id="form-group">
                    <label>Email Id : </label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
                <div id="form-group">
                    <label>Mobile No. : </label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>
                <div id="form-group">
                    <label>Model of Car : </label>
                    <input type="text" name="model" autocomplete="off" class="form-control">
                </div>
                <div id="form-group">
                    <label>Rent for days? : </label>
                    <input type="text" name="days" autocomplete="off" class="form-control">
                </div>
                <div id="form-group">
                    <label>City : </label>
                    <input type="text" name="city" autocomplete="off" class="form-control">
                </div>
                <div id="form-group">
                    <label>Comments : </label>
                    <textarea class="form-control" name="comments"></textarea>
                </div>
                <button type="submit" class="btn btn-success" style="margin-top: 10px;">Submit</button>
            </form>
        </div>
    </section>
</body>
</html>