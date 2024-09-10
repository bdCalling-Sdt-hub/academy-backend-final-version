<?php

namespace App\Services;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Hash;

class CourseEnrollAuthorizationService
{
    public function courseEnrollService($request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;

        if ($request->file('image')) {
            $user->image = saveImage($request,'image');
        }

        $user->role = $request->role;
        $user->otp = 0;
        $user->designation = $request->designation ?? null;
        $user->expertise = $request->expertise ?? null;
        $user->email_verified_at = new Carbon(today());
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json([
            'message' => 'Role added successfully',
            'user' => $user,
        ], 200);
    }
}
