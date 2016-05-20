<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>PresOpsTation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <header>
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <br>
                <div class="col-md-4">
                    <img src="img/presopstation.svg" alt="" width="100%"/>
                </div>
                <div class="col-md-8">
                    <h1>PresOpsTation</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="main">
        <div class="container">
            <div class="row text-center">
                <br>
                <br>
                <br>
                <h3>PresOpsTation lets you edit and create templates for the r89 ops room.</h3>
                <p>From this page you can create or edit presets for the 6 screen display in the r89 ops room. Please note that any edits made will have an immediate effect!</p>
                <br>
                <?php include 'save.php'; ?>
                <br>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <h2 class="text-center">Edit Existing Config</h2>
                    <div id="template-list" class="list-group"></div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <h2 class="text-center">Create New Layout</h2>
                    <button type="button" class="btn btn-lg btn-success btn-block" data-toggle="modal" data-target="#new">New +</button>
                </div>
                <div class="col-md-1"></div>

            </div>
        </div>

        <!-- Edit Modal -->
        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="edit-name"></h4>
                    </div>
                    <form name="form" action="" method="post">

                        <div class="modal-body">
                            <div id="layout"></div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!-- New Modal -->
        <div class="modal fade" id="new" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="new-name">Create a new template</h4>
                    </div>
                    <form name="form" action="" method="post">

                        <div class="modal-body">
                            <div id="new-layout"></div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit-new" class="btn btn-primary">Create</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
