<?php
function gameOver($timeElapsed, $difficulty) {
    // Parâmetros baseados no nível de dificuldade
    switch ($difficulty) {
        case 'facil':
            $maxTime = 2;
            $penaltyInterval = 15;
            $maxScore = 10;
            $penaltyPoints = 1;
            break;
        case 'medio':
            $maxTime = 20;
            $penaltyInterval = 10;
            $maxScore = 20;
            $penaltyPoints = 2;
            break;
        case 'dificil':
            $maxTime = 20;
            $penaltyInterval = 5;
            $maxScore = 30;
            $penaltyPoints = 3;
            break;
        default:
            $maxTime = 20; // Default para 'fácil'
            $penaltyInterval = 15;
            $maxScore = 10;
            $penaltyPoints = 1;
            break;
    }

    // Calculando o tempo excedente
    $finalScore = max(
        0, 
        $maxScore - floor(max(0, $timeElapsed - $maxTime) / $penaltyInterval) * $penaltyPoints
    );    

    return $finalScore;
}
?>