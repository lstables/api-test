<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
</head>
<body>

<div class="container">
    <h5>API Test</h5>
	<p>nothing here other than a test form.</p>
    <div class="col-md-6">
        <form method="post" action="send.php" class="form-horizontal">

            <div class="form-group">
                <div class="col-lg-7">
                    <input type="text" name="to" placeholder="To: example, 07000000000" class="form-control" value="">
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-7">
                    <input type="text" name="from" placeholder="From: Either your name/company or number" class="form-control" value="Test Co">
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-7">
                    <textarea name="message" placeholder="Message" class="form-control" rows="10"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>


</body>
</html>