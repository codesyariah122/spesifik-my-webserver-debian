<?php
$sambutan = "Selamat Datang";
$identity = "Welcome";
$file = fopen("server.txt", "r")
or die("file tidak bisa dibuka");
$server = shell_exec ('uname -a');
$webserver = shell_exec ('nginx -v');
echo '<!doctype html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<title>Welcome</title>';
echo '<link rel="stylesheet" 
href="css/thumbnail.css" media="screen" title="no title" charset="utf-8">';
echo '<link rel="stylesheet" 
href="css/image.css" media="screen" title="no title" charset="utf-8">';
echo '<script src="js/jquery.js"></script>';
echo '<style>html { 
  background: url(img/debian7.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}</style>';
echo '</head>';
echo '<body>';
echo '<br>';
echo '<center><h1 style="color:#FFFFFF; font-size:45px">Hello World ' .$sambutan;
echo '</h1></center>';
echo '<center><h1 style="color:#FFFFFF; font-size:45px">di ' .$identity;
echo '</h1></center>';
/* spesifikasi server bonbin */
echo '<center><p style="color:#FFFFFF; font-weight:bold; font-size:30px;">';
for($a = 1; $a<=100; $a++)
{
   echo '=';
}

echo '<br>linux version = ' .$server;
echo fread($file, filesize("server.txt"));
fclose($file);
// thumbnail 1
echo '<ul class="rig">';
echo '<li>';
$thumbnail ='<div class="col-md-4">
<div class="thumbnail">
<div class="thumb hover">
<a href="http://192.168.9.200:5555" class="button">PHPMYADMIN</a>
</div>
<img src="img/php.png" alt="PHPMYADMIN" />
</div></div>';
echo $thumbnail;
echo '</li>';
// thumbnail 2
echo '<li>';
$thumbnail ='<div class="col-md-4">
<div class="thumbnail">
<div class="thumb hover">
<a href="http://192.168.9.200/hai" class="button">MYBLOG</a>
</div>
<img src="img/drupal.jpg" alt="MYBLOG" />
</div></div>';
echo $thumbnail;
echo '</li>';
// thumbnail 3
echo '<li>';
$thumbnail ='<div class="col-md-4">
<div class="thumbnail">
<div class="thumb hover">
<a href="https://github.com/puji122/" class="button">REPOSITORIES</a>
</div>
<img src="img/github-logo.jpg" alt="REPOSITORIES" />
</div></div>';
echo $thumbnail;
echo '</li>';

echo "<br></p></center>";
echo '<script src="js/costume/bootstrap.min.js"></script>';
echo '<script src="js/costume/bootstrap.js"></script>';
echo '<script src="js/scripts.js"></script>';
echo '</body>';
echo '</html>';
?>
