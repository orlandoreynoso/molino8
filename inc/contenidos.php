<?php
function contenidosPorNombre($ptipo, $nombre, $npaginas){

  $args = array(
      'post_type' => $ptipo,
      'pagename' => $nombre,
      'posts_per_page' => $npaginas
  );

return $args;

}


function todoContenidosPorNombre($nombre, $npaginas){

  $args = array(
      'name' => $nombre,
      'posts_per_page' => $npaginas,
      'post_type' => 'page',
  );

return $args;

}

function contenidosPorId($ptipo, $pagina, $npaginas){

  $args = array(
      'post_type' => $ptipo,
      'post_parent' => $pagina,
      'posts_per_page' => $npaginas
  );

return $args;

}


?>
