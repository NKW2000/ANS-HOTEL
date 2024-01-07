<?php

// app/Http/Controllers/RoomController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class RoomController extends Controller
{
    public function index()
    {
        if (Auth::id()) {

            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                $rooms = Rooms::all();
                return view('Room', compact('rooms'));
            } else if ($usertype == 'admin') {
                $rooms = Rooms::all();
                return view('adminkit.AdminRooms', compact('rooms'));
            } else
                return redirect()->back();
        } else
            $rooms = Rooms::all();
        return view('Room', compact('rooms'));
    }

    public function create()
    {
        $rooms = Rooms::all();
        return view('adminkit.rooms.createRoom', compact('rooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'bedRooms' => 'required|string',
            'bathRooms' => 'required|string',
            'area' => 'required|string',
            'floor' => 'required|string',
            'price' => 'required|numeric',
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add this line
        ]);

        if ($request->hasFile('filename')) {
            // Get the uploaded file
            $uploadedFile = $request->file('filename');

            // Generate a unique filename
            $filename = time() . '_' . $uploadedFile->getClientOriginalName();

            // Store the file in the 'public/uploadimg' directory
            $uploadedFile->storeAs('uploadimg', $filename, 'public');
        } else {
            // If no file is present, you can set a default filename or handle it as needed
            $filename = null;
        }


        Rooms::create([
            'name' => $request->input('name'),
            'bedRooms' => $request->input('bedRooms'),
            'bathRooms' => $request->input('bathRooms'),
            'area' => $request->input('area'),
            'floor' => $request->input('floor'),
            'price' => $request->input('price'),
            'filename' => $filename, // Store the generated filename in the database
        ]);

        return redirect()->route('rooms.index')->with('success', 'Room created successfully');
    }

    public function edit(Rooms $room)
    {
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, Rooms $room)
    {
        $request->validate([
            'name' => 'required|string',
            'BedRooms' => 'required|string',
            'BathRooms' => 'required|string',
            'Area' => 'required|string',
            'Floor' => 'required|string',
            'Price' => 'required|numeric',
            'filename' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);



        if ($request->hasFile('filename')) {
            // Get the uploaded file
            $uploadedFile = $request->file('filename');

            // Generate a unique filename
            $filename = time() . '_' . $uploadedFile->getClientOriginalName();

            // Store the file in the 'public/uploadimg' directory
            $uploadedFile->storeAs('uploadimg', $filename, 'public');

            // Delete the old image file if it exists
            if ($room->filename) {
                Storage::disk('public')->delete('uploadimg/' . $room->filename);
            }

            $room->update([
                'name' => $request->input('name'),
                'bedRooms' => $request->input('bedRooms'),
                'bathRooms' => $request->input('bathRooms'),
                'area' => $request->input('area'),
                'floor' => $request->input('floor'),
                'price' => $request->input('price'),
                'filename' => $filename,
            ]);
        } else {
            // If no new file is present, update other room details without changing the image
            $room->update([
                'name' => $request->input('name'),
                'bedRooms' => $request->input('bedRooms'),
                'bathRooms' => $request->input('bathRooms'),
                'area' => $request->input('area'),
                'floor' => $request->input('floor'),
                'price' => $request->input('price'),
            ]);
        }

        return redirect()->route('rooms.index')->with('success', 'Room updated successfully');
    }

    public function destroy(Rooms $room)
    {
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully');
    }
}
