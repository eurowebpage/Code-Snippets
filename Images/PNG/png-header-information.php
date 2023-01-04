<?php
$exif = exif_read_data('front/img/phone.png', 0, true);
echo "front/img/phone.png:<br />\n";
foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
        echo "$key.$name: $val<br />\n";
    }
}
?>
