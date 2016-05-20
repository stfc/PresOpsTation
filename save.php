<?php
if(isset($_POST['submit']) || isset($_POST['submit-new'])) {

    // echo '<pre>'. print_r($_POST, yes) .'</pre>'; // Use for debug

    $name = preg_replace("/[^a-z0-9_]+/i", "", $_POST['name']);

    $filename = 'json/'.$name.'.json';

    if (isset($_POST['submit-new']) && file_exists($filename)) {
        echo '<div class="alert alert-danger" role="alert">A file with that name already exists!</div>';
    } else {
        if ($name == null) {
            echo '<div class="alert alert-danger" role="alert">No name given. The file was not created!</div>';
        } else {
            echo '<div class="alert alert-success" role="alert">File saved!</div>';
            $write = '{
                "name": "'.$name.'",
                "screens": {
                    "screen0": {
                        "0": {
                            "url": "'.$_POST['url0-screen0'].'"
                        },
                        "1": {
                            "url": "'.$_POST['url1-screen0'].'"
                        }
                    },
                    "screen1": {
                        "0": {
                            "url": "'.$_POST['url0-screen1'].'"
                        },
                        "1": {
                            "url": "'.$_POST['url1-screen1'].'"
                        }
                    },
                    "screen2": {
                        "0": {
                            "url": "'.$_POST['url0-screen2'].'"
                        },
                        "1": {
                            "url": "'.$_POST['url1-screen2'].'"
                        }
                    },
                    "screen3": {
                        "0": {
                            "url": "'.$_POST['url0-screen3'].'"
                        },
                        "1": {
                            "url": "'.$_POST['url1-screen3'].'"
                        }
                    },
                    "screen4": {
                        "0": {
                            "url": "'.$_POST['url0-screen4'].'"
                        },
                        "1": {
                            "url": "'.$_POST['url1-screen4'].'"
                        }
                    },
                    "screen5": {
                        "0": {
                            "url": "'.$_POST['url0-screen5'].'"
                        },
                        "1": {
                            "url": "'.$_POST['url1-screen5'].'"
                        }
                    }
                }
            }';

            $file = fopen('json/'.$name.'.json', "w");
            fwrite($file, $write);
            fclose($file);
        }
    }
}
