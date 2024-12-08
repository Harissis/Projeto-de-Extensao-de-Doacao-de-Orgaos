<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Retorna uma lista paginada de usuários.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $users = User::select('id', 'name', 'email', 'created_at')->paginate(10);

        return response()->json([
            'status' => 200,
            'message' => 'Usuários encontrados com sucesso!',
            'data' => $users
        ]);
    }

    /**
     * Retorna o usuário autenticado.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        $user = Auth::user();

        return response()->json([
            'status' => 200,
            'message' => 'Usuário logado!',
            'data' => $user
        ]);
    }

    /**
     * Armazena um novo usuário no sistema.
     *
     * @param UserCreateRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(UserCreateRequest $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return response()->json([
            'status' => 201,
            'message' => 'Usuário cadastrado com sucesso!',
            'data' => $user
        ], 201);
    }

    /**
     * Retorna os detalhes de um usuário específico.
     *
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'status' => 404,
                'message' => 'Usuário não encontrado.'
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'message' => 'Usuário encontrado com sucesso!',
            'data' => $user
        ]);
    }

    /**
     * Atualiza os dados de um usuário específico.
     *
     * @param UserUpdateRequest $request
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UserUpdateRequest $request, string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'status' => 404,
                'message' => 'Usuário não encontrado.'
            ], 404);
        }

        $data = $request->all();

        // Criptografa a senha caso fornecida
        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }

        $user->update($data);

        return response()->json([
            'status' => 200,
            'message' => 'Usuário atualizado com sucesso!',
            'data' => $user
        ]);
    }

    /**
     * Remove um usuário do sistema.
     *
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'status' => 404,
                'message' => 'Usuário não encontrado.'
            ], 404);
        }

        $user->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Usuário deletado com sucesso!'
        ]);
    }
}
