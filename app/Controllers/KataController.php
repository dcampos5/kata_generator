<?php

namespace App\Controllers;

require_once 'app/Services/KataService.php';

use App\Services\KataService;

class KataController
{
    public function generateKata($request)
    {
        $birdName = trim($request);
        $countHyphenat = substr_count($birdName, "-");
        $countSpace = substr_count($birdName, " ");
        $kata = new KataService($countHyphenat, $countSpace, $birdName);

        return [
            'success' => true, 
            'message' => "La KATA para $birdName es: ".strtoupper($kata->generateKata())
        ];
    }
}