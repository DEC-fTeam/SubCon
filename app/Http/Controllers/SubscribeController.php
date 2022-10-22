<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Subscribe;

//データ追加時にuser_idを入れるため
use Auth;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // 🔽 編集
    $subscribes = Subscribe::getAllOrderByUpdated_at();
    return view('subscribe.index',compact('subscribes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('subscribe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'name' => 'required | max:191',
            'price' => 'required',
            'cycle' => 'required',
            'payment' => 'required',
        ]);
        //バリデーションエラー
        if ($validator-> fails()) {
            return redirect()
            ->route('subscribe.create')
            ->withInput()
            ->withErrors($validator);
        }
        //create()は最初から用意されている関数
        //戻り値は挿入されたレコードの情報
        //フォームから送られてきたデータとユーザIDをマージして、DBにinsertする
        $data = $request->merge(['user_id' => Auth::user()->id])->all();
        $result = Subscribe::create($request->all());
        //ルーティング「subscribe.index」にリクエスト送信（一覧ページに移動）
        return redirect()->route('subscribe.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $subscribe = Subscribe::find($id);
        return view('subscribe.show', compact('subscribe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
        $result = Subscribe::find($id)->delete();
        return redirect()->route('subscribe.index');
    }

    public function delete($id)
    {
        $subscribe = Subscribe::find($id);
        return view('subscribe.delete', compact('subscribe'));
    }
    public function graph()
    {
        /*SELECT pricecycle, payment
         FROM subscribes
         WHERE Auth::id() = user_id
         GROUP BY payment;
         */
        //料金を出す

        $sum_price = Subscribe::select('payment')
                    ->selectRaw('SUM(price*cycle) as sum_price')
                    ->where('user_id',Auth::id())
                    ->groupby('payment')
                    ->orderby('payment')
                    ->pluck('sum_price')
                    ->all();
        $payment = Subscribe::select('payment')
                    ->selectRaw('SUM(price*cycle) as sum_price')
                    ->where('user_id',Auth::id())
                    ->groupby('payment')
                    ->orderby('payment')
                    ->pluck('payment')
                    ->all();
                    //ddd($sum_price);
        //viewにデータを返す
        
        return view('subscribe.graph',compact('sum_price','payment'));
    }
}
