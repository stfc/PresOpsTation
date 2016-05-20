<?php
$name = $_GET['name'];

echo '
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="input-group">
            <span class="input-group-addon">Name</span>
            <input class="form-control" style="font-size:20px;height: 40px;" type="text" name="name" value="">
        </div>
    </div>
</div>
<hr>
';

echo '<div class="row">';
$x = 0;
while($x <= 5) {
    echo '<div class="col-md-4">';
    echo '<h3 class="text-center">screen'.$x.'</h3>';
    echo '<div class="input-group">';
    echo '<span class="input-group-addon">url</span>';
    echo '<input class="form-control" type="url" name="url0-screen'.$x.'" value="">';
    echo '</div>';
    echo '<div class="input-group" title="Split the screen and show on right-hand side">';
    echo '<span class="input-group-addon">url-b</span>';
    echo '<input class="form-control" type="url" name="url1-screen'.$x.'" value="">';
    echo '</div><br></div>';
    $x++;
}
echo '</div>';
