<?php
namespace App\Http\Controllers;

use App\Helpers\ResponseMessages;
use App\Http\Requests\AuthRegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthLoginRequest;

/**
 * @group 0auth Endpoints
 *
 * APIs for managing auth
 */
class AuthController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }

    public function register(AuthRegisterRequest $request): JsonResponse
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => password_hash($request->password, PASSWORD_DEFAULT),
        ]);
        $token = Auth::login($user);
        return $this->successHttpMessage('token', $token, ResponseMessages::AUTH_SUCCESS, 201);
    }

    public function login(AuthLoginRequest $request): JsonResponse
    {
        $credentials = $request->only('email', 'password');
        $token = Auth::attempt($credentials);
        if (!$token) {
            return $this->errorHttpMessage(null,422, ResponseMessages::UNPROCESSABLE_CONTENT);
        }
        return $this->successHttpMessage('token', $token, ResponseMessages::AUTH_SUCCESS, 200);
    }
}
