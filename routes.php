<?php 
    require_once("./config/Config.php");
    require_once("./modules/Global.php");
    require_once("./modules/Auth.php");
    require_once("./modules/Get.php");
    require_once("./modules/Post.php");

    $db = new Connection();
	$pdo = $db->connect();
    $gm = new GlobalMethods($pdo);
	$auth = new Auth($pdo);
    $get = new Get($pdo);
    $post = new Post($pdo);

    if (isset($_REQUEST['request'])) {
        $req = explode('/', rtrim($_REQUEST['request'], '/'));
    } else {
        $req = array("errorcatcher");
    }

    switch($_SERVER['REQUEST_METHOD']) {
        case 'POST':

            // All data from the POST request is passed through here
            $d = json_decode(file_get_contents("php://input"));

            switch($req[0]) {
                // You can add endpoints here, and must attach the methods from other classes

                // Example: 
                // case 'getuser':
                //     echo json_encode($get->getStudent($d));
                // break;

                case 'res':
                    echo 'Hello World!';
                break;
            }
        break;

        case 'OPTIONS':
            return 200;
        break;

        default:
            echo 'Error';
        break;
    }
?>