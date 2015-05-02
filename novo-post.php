<?php include 'header.php'; ?>
<body>
  <h1>Enviar novo post</h1>
  <form class="form" action='faz-o-post.php' method='post' enctype='multipart/form-data'>
    <input name='titulo' type='text' placeholder="Título do post">
    <input name='data' type='text' value="<?php echo date('d/m/Y G:i') ?>">
    <input name="datetime" type="hidden" value="<?php echo date('Y-m-d G:i') ?>">
    <input name='post-url' type='text' placeholder="url-do-post">
    <input name='tags' type='text' placeholder="tags,separadas,por,virgula">
    <textarea name='texto' placeholder="Seja gentil"></textarea>
    <input type='submit' value='Publicar'>
  </form>
</body>
<?php include 'footer.php'; ?>
