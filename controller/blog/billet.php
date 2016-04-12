<?php
require_once 'modele/model.php';

$posts = get_articles();

require 'vue/blog/index.php';
