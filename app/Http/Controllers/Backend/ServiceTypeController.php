<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ServiceType;

class ServiceTypeController extends Controller
{
    public function AllType(){
        $types = ServiceType::latest()->get();
        return view('backend.type.all_type', compact('types'));
    }
}
