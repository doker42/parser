@extends('layouts.basic')

@section('content')

<div class="container">

    @if(isset($articles) && count($articles))

    <table class="table table-striped-columns">

        <thead>
        <tr>
            <th scope="col">
                <a href="{{ request()->fullUrlWithQuery(['sort_by' => 'date', 'order' => request('order') === 'asc' ? 'desc' : 'asc']) }}">
                    {{__('Public date')}}
                </a>
            </th>
            <th scope="col">
                <a href="{{ request()->fullUrlWithQuery(['sort_by' => 'title', 'order' => request('order') === 'asc' ? 'desc' : 'asc']) }}">
                    {{__('Title')}}
                </a>
            </th>
            <th scope="col">{{__('Author')}}</th>
            <th scope="col">{{__('Tags')}}</th>
        </tr>
        </thead>

        <tbody>

        @foreach($articles as $article)
            <tr class="">
                <td>{{ \Carbon\Carbon::parse($article->date)->format('d.m.Y') }}</td>
                <td>
                    <a href="{{ $article->link }}" target="_blank">
                        {{ $article->title }}
                    </a>
                </td>
                <td>{{ $article->author }}</td>
                <td>{{ $article->tags }}</td>
            </tr>
        @endforeach

        </tbody>

    </table>

    @else
        <h3>{{__('No news')}}</h3>
    @endif
</div>

@endsection