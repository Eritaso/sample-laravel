@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-link" href="/profiles/create">{{ __('プロフィール登録') }}</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>プロフィール一覧</div>
            <table class="table table-sm table-striped table-bordered mt-1 mb-3" id="big-table">
                <tr class="text-center">
                    <th class="width1">名前</th>
                    <th class="width2">職業</th>
                    <th class="width3">スキル</th>
                </tr>
                @foreach($profiles as $profile)
                <tr>
                    <th class="width1 text-left attention">{{$profile->name}}</th>
                    <td class="width2 text-left attention">
                    @foreach($profile->profileSkills as $profileSkill)
                        @if ($loop->first)
                            {{$profileSkill->manySkill}}
                        @endif
                        @if ($loop->index == 1)
                            ,{{$profileSkill->manySkill}}
                        @endif
                    @endforeach
                    </td>
                    <td class="width3 text-left attention">{{$profile->dipsProfession}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
