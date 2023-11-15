<?php

require_once __DIR__.'/../model/category_list.php';
$categories = getCategories();
require __DIR__.'/../view/category_list.php';
