@extends('layout')

@section('contents')
  <div class="flex flex-col items-center justify-center w-screen h-screen bg-gray-200 text-gray-700">
  <div class="flex items-center justify-center flex-col bg-white rounded shadow-lg p-12 mt-12 w-9/12">
    <button class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700 w-9/12">
      <a href="/logout" >ログアウト</a>
    </button>
</div>
  </div>
@endsection