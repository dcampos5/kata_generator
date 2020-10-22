<?php

require_once 'app/Controllers/KataController.php';

use App\Controllers\KataController;

if(!empty($_POST['birdName'])) {
    $kata = new KataController();
    echo json_encode($kata->generateKata($_POST['birdName']));
} else {
    echo json_encode([
        'success' => false, 
        'message' => '* Bird Name Required'
    ]);
}