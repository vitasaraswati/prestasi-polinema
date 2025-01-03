<?php

use app\models\BaseSeeder;
use app\models\database\prestasiCore\PrestasiStats;

class s_011PrestasiStatisticSeeder implements BaseSeeder
{
    public function create(): bool
    {
        $statisticIds = ["STA001", "STA002", "STA003", "STA004"];
        $majorIds = ["TI101", "TM202", "TE303", "TS404"];
        $studyProgramIds = ["SI101", "MI202", "EL303", "CV404"];
        $totalVictoryAll = ["10", "8", "7", "9"];
        $year = ["2024", "2024", "2024", "2024"];

        for ($i = 0; $i < count($statisticIds); $i++) {
            $res = PrestasiStats::insert([
                "id" => $statisticIds[$i],
                "major_id" => $majorIds[$i],
                "study_program_id" => $studyProgramIds[$i],
                "total_victory_all" => $totalVictoryAll[$i],
                "year" => $year[$i]
            ]);

            if (!$res) {
                return false;
            }
        }

        return true;
    }

    public function delete(): bool
    {
        return PrestasiStats::deleteAll();
    }
}
