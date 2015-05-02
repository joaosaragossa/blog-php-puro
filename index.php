<?php $titulo_da_pagina = "~joao" // Título padrão ?>
<?php include 'header.php'; ?>
<body>
  <h1 class="blog-header">Diário Digital</h1>
  <?php

  $path = 'post-vars'; 
  $pontos = array('.', '..','index.php'); 
  $posts = array_diff(scandir($path,2), $pontos);

  foreach ($posts as $post) { ?>
  <article class="post"> 
    <?php include 'post-vars/'.$post; ?>
    <h1><a href="posts/<?php echo $posturl ?>.html" title="<?php echo $titulo ?>"><?php echo $titulo ?></a></h1>
    <time datetime="<?php echo $datetime ?>" pubdate><?php echo $data ?></time>
    <p><?php echo $texto ?></p>
  </article>
  <?php } ?>
</body>
<?php include 'footer.php'; ?>
