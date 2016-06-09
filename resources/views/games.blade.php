@extends('master')

@section('content')

<h1 class="ui header">Latest Games</h1>
<div class="ui divider"></div>

<table class="ui striped table">
    <tbody>
        @foreach ($results as $result)
            <tr>
                <td class="center aligned icon winner-{{ (int) $result[1]['winner'] }}">
                    <img src="{{ $result[1]['character']['icon'] }}" title="{{ $result[1]['character']['name'] }}">
                </td>
                <td class="name right aligned winner-{{ (int) $result[1]['winner'] }}">
                    {{ $result[1]['name'] }}
                </td>
                <td class="center aligned">
                    {{ $result[1]['score'] }}
                </td>
                <td class="center aligned">
                    {{ $result[2]['score'] }}
                </td>
                <td class="name winner-{{ (int) $result[2]['winner'] }}">
                    {{ $result[2]['name'] }}
                </td>
                <td class="center aligned icon winner-{{ (int) $result[2]['winner'] }}">
                    <img src="{{ $result[2]['character']['icon'] }}" title="{{ $result[2]['character']['name'] }}">
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection