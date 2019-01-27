@extends('layouts.layoutD')

@section('content')

    @if(isset($op))

        @switch($op)

            @case(1)
                YOU change<span class="btn-primary btn-sm">BLUE!</span>
                @break
            @case(2)
                YOU change<span class="btn-danger btn-sm">RED!</span>
                @break
            @case(3)
                YOU change<span class="btn-success btn-sm">GREEN!</span>
                @break
            @default
                YOU change<span class="btn-dark btn-sm">NONE</span>


        @endswitch
    @endif

@endsection