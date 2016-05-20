<?php
$name = $_GET['name'];
$file = 'json/' . $name . '.json';
$file_contents = file_get_contents($file);
$screen_list = json_decode($file_contents, true);

echo '
<div class="alert alert-warning" role="alert">Only edit if you know what you are doing and there is a reason to! If you don\'t, please create a new template instead.</div>
<br>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <input class="form-control" style="font-size:20px;height: 40px;" type="text" name="name" value="' .$name. '" readonly>
    </div>
</div>
<hr>
';

echo '<div class="row">';
foreach ($screen_list as $screens => $screen) {
    foreach ($screen as $key => $value) {
        echo '<div class="col-md-4">';
        echo '<h3 class="text-center">'.$key.'</h3>';
        echo '<div class="input-group">';
        echo '<span class="input-group-addon">url</span>';
        echo '<input class="form-control" type="url" name="url0-'.$key.'" value="' .$value[0]['url']. '">';
        echo '</div>';
        echo '<div class="input-group" title="Split the screen and show on right-hand side">';
        echo '<span class="input-group-addon">url-b</span>';
        echo '<input class="form-control" type="url" name="url1-'.$key.'" value="' .$value[1]['url']. '">';
        echo '</div><br></div>';
    }
}
echo '</div>';
