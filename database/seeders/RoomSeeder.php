<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder {
    public function run(): void {
        $rooms = [
            [
                'room_number' => 'A101',
                'description' => 'Single bed near the main gate',
                'price' => 1500.00,
                'capacity' => 1,
                'is_available' => true
            ],
            [
                'room_number' => 'B202',
                'description' => 'Double decker for two students walking distance to CEA building',
                'price' => 2500.00,
                'capacity' => 2,
                'is_available' => true
            ],
            [
                'room_number' => 'C303',
                'description' => 'Large room with private bathroom',
                'price' => 4000.00,
                'capacity' => 4,
                'is_available' => false
            ]
        ];

        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}