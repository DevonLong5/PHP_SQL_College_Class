<?php

$dirName = "random_dir";

if (!is_dir($dirName)) {

    if (mkdir($dirName)) {
        echo"Directory '$dirName' created successfully!";

    } else {
        echo "failed to create directory.";
    }

} else {
    echo "directory already exists.";

}
?>