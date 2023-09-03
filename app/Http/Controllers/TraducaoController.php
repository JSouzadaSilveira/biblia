<?php

namespace App\Http\Controllers;

use App\Models\Traducao;
use Illuminate\Http\Request;

class TraducaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Traducao::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ( Traducao::Create($request->all())) {
            return response()->json([
                'message' => ' Traducao cadastrado com sucesso.'
            ], 201);
        }

        return response()->json([
            'message' => ' Erro ao cadastrar o traducao.'
        ], 404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($traducao)
    {
        $traducao = Traducao::find($traducao);
        if ($traducao) {
            return $traducao;
        }

        return response()->json([
            'message' => ' Erro ao pesquisar o traducao.'
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $traducao)
    {
        $traducao = Traducao::find($traducao);
        if ($traducao) {
            $traducao->update($request->all());

            return $traducao;
        }

        return response()->json([
            'message' => ' Erro ao atualizar o traducao.'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($traducao)
    {
        if (Traducao::destroy($traducao)) {
            return response()->json([
                'message' => ' traducao deletado com sucesso.'
            ], 200);
        }

        return response()->json([
            'message' => ' Erro ao deletar o traducao.'
        ], 404);
    }
}
