<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class TarefasController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verificaColchetesBalanceados(Request $request)
    {
        // $expr = "[()]{}{[()()]()}";
        // $expr = "[(])";
        $expr = $request->expr;

        $stack = array();
        $abertura = array('(', '{', '[');
        $fechamento = array(')', '}', ']');
        $len = strlen($expr);

        for ($i = 0; $i < $len; $i++) {
            $char = $expr[$i];

            if (in_array($char, $abertura)) {
                array_push($stack, $char);
            } elseif (in_array($char, $fechamento)) {
                $pos = array_search($char, $fechamento);
                if (empty($stack) || $abertura[$pos] !== array_pop($stack)) {
                    return "Não balanceada";
                }
            }
        }

        return (empty($stack)) ? "Balanceada" : "Não balanceada";
    }

}
