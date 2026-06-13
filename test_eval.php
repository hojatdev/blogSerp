<?php
echo "START
";
$id = wp_insert_post(["post_title"=>"Quick Test","post_status"=>"publish","post_type"=>"post"]);
echo "ID: $id
";
