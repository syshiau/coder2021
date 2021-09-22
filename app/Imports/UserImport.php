<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);

        return new User([
            'name' => $row['帳號'],
            'username' => $row['帳號'],
            'email' => $row['帳號'] . "@test.com",
            'password' => bcrypt($row['密碼']),
        ]);
    }
}
