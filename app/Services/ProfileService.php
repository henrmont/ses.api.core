<?php

namespace App\Services;

use App\Models\Module;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class ProfileService
{
    public function changeProfileModule(Module $module)
    {
        try {
            $user = User::find(auth()->user()->id);
            $user->update(['module_id' => $module->id]);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function changeProfileImage(Request $request)
    {
        try {
            $profile = User::find(auth()->user()->id);
            $profile->update(['image' => $request->image]);
            return response()->json(['message' => 'Imagem alterada com sucesso.'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function changeProfileInfo(Request $request)
    {
        try {
            $profile = User::find(auth()->user()->id);
            $profile->update(['name' => $request->name]);
            return response()->json(['message' => 'Perfil alterado com sucesso.'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}