<?php
$conn = DBconection::connectDB();

require 'model/Muneca.php';
require 'model/Front.php';
require 'model/Photo.php';
$munecas = Muneca::getAll($conn);
$photos = Photo::getAll($conn);
$fronts = Front::getAll($conn);
$galleryDir = 'assets/images/gallery';
$galleryPhotos = array_diff(scandir($galleryDir), array('..', '.'));

include 'view/index.php';
