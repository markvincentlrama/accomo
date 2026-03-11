<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller {
    public function index() {
        return response()->json(Room::all());
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'room_number' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'capacity' => 'required|integer',
            'is_available' => 'boolean'
        ]);

        $room = Room::create($validated);
        return response()->json($room, 201);
    }

    public function show($id) {
        return response()->json(Room::findOrFail($id));
    }

    public function update(Request $request, $id) {
        $room = Room::findOrFail($id);
        
        $validated = $request->validate([
            'room_number' => 'string',
            'description' => 'nullable|string',
            'price' => 'numeric',
            'capacity' => 'integer',
            'is_available' => 'boolean'
        ]);

        $room->update($validated);
        return response()->json($room);
    }

    public function destroy($id) {
        $room = Room::findOrFail($id);
        $room->delete();
        return response()->json(['message' => 'Room deleted successfully']);
    }
}