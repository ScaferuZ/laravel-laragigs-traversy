<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Job 1',
                'description' => 'This is a job description',
            ],
            [
                'id' => 2,
                'title' => 'Job 2',
                'description' => 'This is a job description',
            ],
        ];
    }

    public static function find($id){
        $listings = self::all();
        
        foreach ($listings as $listing){
            if ($listing['id'] == $id){
                return $listing;
            }
        }
    }
}