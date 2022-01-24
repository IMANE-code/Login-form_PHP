<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
</head>

<body>
    <main class="container text-center">
        <div class="row">
            <div class="col-md-8 col-sm mx-auto">
                <form>
                    <div class="card">
                        <div class="card-header">
                            <h1>
                                YOUR MAIL WELL DONE
                            </h1>
                        </div>
                        <div class="card-body text-start text-secondary ">
                            <h3>
                                Reminder of your informations
                            </h3>
                            <div>YOUR NAME :
                                <?php echo $_GET['username']; ?>
                            </div>
                            <div>YOUR EMAIL :
                                <?php echo $_GET['email']; ?>
                            </div>
                            <div>YOUR SUBJECT :
                                <?php echo $_GET['subject']; ?>
                            </div>
                            <div>YOUR MESSAGE</div>
                            <h5 class='text-danger'>
                                <?php echo $_GET['message']; ?>
                            </h5>
                        </div>
                        <div class="card-footer text-end">
                            <span class="copyright">
                                ©Copyright NameSite.com
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>