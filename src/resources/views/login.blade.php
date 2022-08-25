@extends('layout')

@section('contents')
  <div class="flex flex-col items-center justify-center w-screen h-screen bg-gray-200 text-gray-700">
    <form class="flex items-center justify-center flex-col bg-white rounded shadow-lg p-12 mt-12 w-9/12" action="/login" method="post">
    @csrf
      <label class="font-semibold text-xs w-9/12" for="email">メールアドレス</label>
      <input type="text" name="email" class="flex items-center h-12 px-4 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2 w-9/12">
      <br>
      <label class="font-semibold text-xs w-9/12" for="password">パスワード</label>
      <input type="password" name="password" class="flex items-center h-12 px-4 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2 w-9/12">
      <button type="submit" class="flex items-center justify-center h-12 px-6 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700 w-9/12">ログイン</button>
      <div class="flex mt-6 justify-center text-xs">
        <a class="text-blue-400 hover:text-blue-500" href="#">ユーザー登録</a>
      </div>
    </form>
  </div>
@endsection
