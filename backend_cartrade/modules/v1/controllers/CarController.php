<?php

namespace app\modules\v1\controllers;
 
class CarController extends ApiController
{
    public function actionIndex()
    {
        $cars = [
            [
                'id' => 1,
                'name' => 'Skoda Rapid',
                'year' => 2012,
                'price' => 449000,
                'odometer' => 74000,
                'volume' => 1.6,
                'power' => 102,
                'fuel' => 'Бензин',
                'drivetrain' => 'Передний',
                'color' => 'Белый',
                'transmission' => 'Механика',
                'bodyStyle' => 'Седан'
            ],
            [
                'id' => 2,
                'name' => 'Skoda Rapid',
                'year' => 2019,
                'price' => 888000,
                'odometer' => 200000,
                'volume' => 1.6,
                'power' => 102,
                'fuel' => 'Бензин',
                'drivetrain' => 'Передний',
                'color' => 'Белый',
                'transmission' => 'Автомат',
                'bodyStyle' => 'Седан'
            ],
            [
                'id' => 3,
                'name' => 'Skoda Rapid',
                'year' => 2015,
                'price' => 889000,
                'odometer' => 600000,
                'volume' => 1.6,
                'power' => 102,
                'fuel' => 'Газ',
                'drivetrain' => 'Передний',
                'color' => 'Белый',
                'transmission' => 'Автомат',
                'bodyStyle' => 'Седан'
            ]
        ];
        return $cars;
    }
}
