<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Module;
use App\Services\ProfileService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function changeProfileModule(Module $module, ProfileService $profileService)
    {
        return $profileService->changeProfileModule($module);
    }

    public function changeProfileImage(Request $request, ProfileService $profileService)
    {
        return $profileService->changeProfileImage($request);
    }

    public function changeProfileInfo(Request $request, ProfileService $profileService)
    {
        return $profileService->changeProfileInfo($request);
    }
}
