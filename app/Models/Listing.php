<?php
namespace App\Models;

Class Listing {
    public static function all() {
        return [
            
        
                [
                    'id' => 1,
                    'title' => 'Security Analyst',
                    'description' => 'Lorem ipsum dolor sit amet consectetur 
                                      adipisicing elit. Vel placeat quod quasi soluta veritatis libero illo quis adipisci laborum alias!'
                ],
        
                [
                    'id' => 2,
                    'title' => 'IT analyst',
                    'description' => 'Lorem ipsum dolor sit amet consectetur 
                                      adipisicing elit. Vel placeat quod quasi soluta veritatis libero illo quis adipisci laborum alias!'
                ], 
        
                [
                    'id' => 3,
                    'title' => 'Data Analyst',
                    'description' => 'Lorem ipsum dolor sit amet consectetur 
                                      adipisicing elit. Vel placeat quod quasi soluta veritatis libero illo quis adipisci laborum alias!'
                ]
                
                ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}

?>