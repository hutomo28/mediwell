<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('chat', compact('doctors'));
    }

    public function room($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('chatroom', compact('doctor'));
    }

    public function detail($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctor-detail', compact('doctor'));
    }

}
