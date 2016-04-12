<?php
require_once 'model.php';

$post = get_articles_by_id($_GET['id']);

require 'vue/blog/show.php';
