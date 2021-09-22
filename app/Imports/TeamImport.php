<?php

namespace App\Imports;

use App\Models\Team;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TeamImport implements ToModel, WithHeadingRow
{
    private $users;

    public function __construct()
    {
        $this->users = User::all(['id', 'username'])->pluck('id', 'username');
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Team([
            'user_id' => $this->users[$row['帳號']],
            'school' => $row['校名'],
            'game_type' => $row['參賽類別'],
            'player1' => $row['選手1'],
            'player2' => $row['選手2'],
        ]);
    }
}
