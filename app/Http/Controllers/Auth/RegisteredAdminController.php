<?php

namespace App\Http\Controllers\Auth;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Controllers\Controller;

class RegisteredAdminController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(StoreAdminRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['password'] = Hash::make($request->password);

        Admin::create($validatedData);

        return response()->json([
            'message' => 'User successfully registered'
        ], 201);
    }
}
