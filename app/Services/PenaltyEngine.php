<?php
namespace App\Services;

use App\Models\Violation;

class PenaltyEngine
{
    public function calculatePenalty($violationType, $repeatCount = 1)
    {
        $penalty = 0;

        if ($violationType === 'minor') {
            $penalty = 100 * $repeatCount;
        } elseif ($violationType === 'major') {
            $penalty = 500 * $repeatCount;
        }

        return $penalty;
    }
}
