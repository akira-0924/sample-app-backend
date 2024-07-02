<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Auth\AuthenticatedUser;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    protected function getAuthenticatedUser(): ?AuthenticatedUser
    {
        /** @var AuthenticatedUser|null $user */
        $user = Auth::user();
        // $userId=2;
        if ($user instanceof App\Auth\AuthenticatedUser) {
            return $user;
        } elseif ($user instanceof App\Models\Admin) {
            // Admin を AuthenticatedUser にキャストする、または適切な型変換を行う
            return null; // または適切な変換ロジック
        }
        return null;
    }
}
