<?php

class Bicycle{
    public $brand;
    public $model;
    public $year;
    public $category;
    public $color;
    public $description;
    public $gender;
    public $price;
    protected $weight_kg;
    protected $condition_id;

    public const CATS = ['Road', 'Mountain', 'Hybrid'];

    public const GENDERS = ['Mens', 'Womens', 'Unisex'];

    protected const CONDITIONS = [
        1 => 'Beat Up',
        2 => 'Decent',
        3 => 'Good',
        4 => 'Great',
        5 => 'Like New'
    ];

    public function __construct($args=[]){
        $this->brand = $args['brand'] ?? '';
        $this->model = $args['model'] ?? '';
        $this->year = $args['year'] ?? '';
        $this->category = $args['category'] ?? '';
        $this->color = $args['color'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->gender = $args['gender'] ?? '';
        $this->price = $args['price'] ?? 0;
        $this->weight_kg = $args['weight_kg'] ?? 0.0 ;
        $this->condition_id = $args['condition_id'] ?? 3;
    }

    public function weight_kg(){
        return number_format($this->weight_kg, 2) . ' kg';
    }

    public function set_weight_kg($value){
        $this->weight_kg = floatval(($value));
    }

    public function weight_lbs(){
        $weight_lbs = floatval($this->weight_kg) * 2.204;
        return number_format($weight_lbs, 2) . ' lbs';
    }

    public function set_weight_lbs($value){
        $this->weight_kg = floatval(($value) / 2.204);
    }

    public function condition(){
        if($this->condition_id > 0){
            return self::CONDITIONS[$this->condition_id];
        }else{
            return "Unknown";
        }
    }
}

?>