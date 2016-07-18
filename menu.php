function printMenu($currentPagina='Home') {

    $aMenu = array(
        'Home' => 'index.php',
        'Over mij' => 'over mij.php',
        'Cijferlijst' => 'cijferlijst.php',
        'Contact' => 'contact.php',
        'Hobbies' => 'hobbies.php',
        'Werkervaring' => 'werkervaring.php',
        'Studie' => 'studie.php'
        );

    echo '<ul class="vert-one">';
    foreach($aMenu as $key=>$m) {
        if ($key == $currentPagina) {
            echo '<li><a href="'.$m.'" class="current" title="'.$key.'">'.$key.'</a></li>';
        } else {
            echo '<li><a href="'.$m.'" title="'.$key.'">'.$key.'</a></li>';
        }
    }
    echo "</ul>";
}
