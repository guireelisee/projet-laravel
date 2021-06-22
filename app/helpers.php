<?php

use App\Models\Fiche;

if(!function_exists(count_empty()))
{
    function count_empty(Fiche $fiche):array
    {
        $sp_count = 0;
        $dir_count = 0;
        $sc_count = 0;
        foreach ($fiche as $key => $fiche) {
            if(empty($fiche->sp_instructions))
            {
                $data = [
                    "sp_count"=> 0,
                    "dir_count"=> 0,
                    "sc_count"=> 0
                ];
            } elseif (empty($fiche->dir_instructions) && !empty($fiche->sp_instructions) ) {
                $sp_count++;
            }
        }
        return $data;
    }
}
