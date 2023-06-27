@extends('layouts.guest')

@section('content')
<div class="page-todo container col-4">
    <div class="page-inner">
        <div class="page-header">
            <h1>Todo List</h1>
            <p>{{ date('l, F jS, Y') }}</p>
        </div>
        <div class="page-content">
            <div class="todo-list">
                <div class="todo-list-inner">
                    <div class="todo-list-left col-12">
                        <form action="https://simplytodos.com/store" method="POST">
                            @csrf
                            <textarea class="todo-list-textarea" name="todo" id="todo" placeholder="What do you need to do?"></textarea>
                            @if(Auth::check())
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            @else
                                <input type="hidden" name="user_id" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
                            @endif
                            <span id="saver">Saved</span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection