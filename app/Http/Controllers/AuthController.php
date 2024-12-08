<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\TokenRepository;

class AuthController extends Controller
{
    protected $tokenRepository;

    public function __construct(TokenRepository $tokenRepository)
    {
        $this->tokenRepository = $tokenRepository;
    }

    /**
     * Realiza o login do usuário
     *
     * @param Request $request
     * @return array
     */
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        // Normaliza o email para evitar problemas de case sensitivity
        $credentials['email'] = strtolower($credentials['email']);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Gera um token de acesso para o usuário autenticado
            $token = $user->createToken($user->email);

            return response()->json([
                'status' => 200,
                'message' => 'Usuário logado com sucesso.',
                'data' => [
                    'user' => $user,
                    'access_token' => $token->accessToken,
                    'token_type' => 'Bearer',
                    'expires_at' => $token->token->expires_at
                ]
            ]);
        }

        return response()->json([
            'status' => 401,
            'message' => 'Credenciais inválidas.'
        ], 401);
    }

    /**
     * Realiza o logout do usuário
     *
     * @param Request $request
     * @return array
     */
    public function logout(Request $request)
    {
        $token = $request->user()->token();

        // Revoga o token atual do usuário
        $this->tokenRepository->revokeAccessToken($token->id);

        return response()->json([
            'status' => 200,
            'message' => 'Usuário deslogado com sucesso.'
        ]);
    }
}
