@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-link" href="/">{{ __('プロフィール登録') }}</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>プロフィール</div>
            <table class="table table-sm table-striped table-bordered mt-1 mb-3" id="big-table">
                <tr class="text-center">
                    <th class="width1">名前</th>
                    <th class="width2">職業</th>
                    <th class="width3">スキル</th>
                </tr>
                @foreach($profiles as $profile)
                <tr>
                    <th class="width1 text-left attention">{{$profile->name}}</th>
                    <td class="width2 text-left attention">{{$profile->profession}}</td>
                    <td class="width3 text-left attention">{{$profile->profession}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
