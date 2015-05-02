<?php


ini_set('display_errors', 'On');
error_reporting(E_ALL);

  $titulo   = $_POST['titulo'];
  $texto    = $_POST['texto'];
  $data     = $_POST['data'];
  $datetime = $_POST['datetime'];
  $posturl  = $_POST['post-url'];
  $tags     = $_POST['tags'];

if (isset($titulo) && isset($texto) && isset($texto) && isset($data) && isset($posturl)) {
  
$post = "<!DOCTYPE html>
<html>
  <head>
    <title>$titulo</title>
  </head>
  <body>
    <article>
      <h1>$titulo</h1>
      <time datetime='$datetime' pubdate>$data</time>
      <p>$texto</p>
    </article>
  </body>
</html>";

  $makepost = fopen("posts/$posturl.html", 'w+');
  fwrite($makepost, $post);
  fclose($makepost);

  $postvars = "<?php 

  ".'$titulo'." = "."\"".addslashes($titulo)."\"".";
  ".'$texto'." = "."\"". addslashes($texto)."\"".";
  ".'$data'." = "."\"".addslashes($data)."\"".";
  ".'$datetime'." = "."\"".addslashes($datetime)."\"".";
  ".'$posturl'." = "."\"".addslashes($posturl)."\"".";
  ".'$tags'." = "."\"".addslashes($tags)."\"".";

?>";

  $makevars = fopen("post-vars/$posturl.php", 'w+');
  fwrite($makevars, $postvars);
  fclose($makevars);

  header("Location: posts/".$posturl.".html");
}
else {
  echo "Preencha todos os campos";
}
?>
