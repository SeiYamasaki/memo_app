<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    public function index()
    {
        //全件取得
        $memos = Memo::all();

        return view('memos.index', ['memos' => $memos]);
    }

    public function create() //データの登録画面表示
    {

        return view('memos.create');
    }

    public function store(Request $request) //データの登録アクション｡リクエストクラスの変数を引数で定義
    {
        //インスタンス生成 新しいMemoモデルのインスタンスを生成
        $memo = new Memo();

        //ユーザーから送信されたリクエスト（フォームなど）に含まれるtitleとbodyの値を、Memoモデルのtitleおよびbodyプロパティに代入
        $memo->title = $request->title;
        $memo->body = $request->body;
        //モデルインスタンスのデータをデータベースに保存
        $memo->save();

        //データを保存した後、memos.index（メモ一覧表示）のルートにリダイレクト
        return redirect(route("memos.index"));
    }

    public function show($id) //データの表示
    {
        $memo = Memo::find($id);
        return view("memos.show", ["memo" => $memo]);
        //$memoをmemoに渡して､memoをビューに渡す
    }
    public function edit($id) //データの表示
    {
        $memo = Memo::find($id);
        return view("memos.edit", ["memo" => $memo]);
    }
    public function update(Request $request,$id)
    // どれを更新するのかわからないから2つの引数
    {
        //更新対象データの取得
        $memo = Memo::find($id);

        //ユーザーから送信されたリクエスト（フォームなど）に含まれるtitleとbodyの値を、Memoモデルのtitleおよびbodyプロパティに代入
        $memo->title = $request->title;
        $memo->body = $request->body;
        //モデルインスタンスのデータをデータベースに保存
        $memo->save();

        //データを保存した後、memos.index（メモ一覧表示）のルートにリダイレクト
        return redirect(route("memos.index"));
    }
        public function destroy($id)
    {
        $memo = Memo::find($id);
        $memo->delete();

        return redirect(route('memos.index'));
    }
}
