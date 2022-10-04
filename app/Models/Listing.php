<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Aliquam vitae voluptatibus, placeat a molestiae qui rem in accusamus illum sunt labore nulla ut tenetur. 
                Suscipit saepe aperiam unde ad at.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Aliquam vitae voluptatibus, placeat a molestiae qui rem in accusamus illum sunt labore nulla ut tenetur. 
                Suscipit saepe aperiam unde ad at.'
            ]
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}