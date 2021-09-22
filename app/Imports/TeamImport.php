<?php

namespace App\Imports;

use App\Models\Team;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TeamImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Team([
            'user_id' => 1,
            'school' => $row['校名'],
            'game_type' => $row['參賽類別'],
            'player1' => $row['選手1'],
            'player2' => $row['選手2'],
        ]);
    }
}
