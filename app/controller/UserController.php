    <?php
    $type = $_POST['type'] ?? '';
    switch ($type) {
        case 'log':
            echo "hola";
            break;
        case 'reg':
            echo "xd";
            break;
        default:
            echo "No";
            break;
    }
    ?>