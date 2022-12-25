@extends('layout')

@section('main_content')
    <style>
        body {
            overflow:hidden;
        }
        #cards::-webkit-scrollbar {
            display: none;
        }
        #cards {
            height:65vh;
            overflow-y:scroll;
            margin-top: 20px;
        }
    </style>
    <main class="px-3">
        <h1>Комментарии</h1>
        <div id="cards" class="rounded">
            @foreach($data as $comment)
                <div class="card mb-4">
                    <span class="card-header h-3 text-dark">{{$comment->name}}</span>
                    <div class="card-body">
                        <span class="card-text text-dark">{{$comment->text}}</span>
                    </div>
                </div>
            @endforeach
            <div class="card">
                <form action="/comments" method="post" class="needs-validation">
                    @csrf
                    <div class="card-body">
                        <label for="name" class="form-label text-dark">Ваше имя</label>
                        <input name="name" id="name" type="text" value="" class="form-control mt-2 mb-3" required>
                        <label for="text" class="form-label text-dark">Текст комментария</label>
                        <textarea name="text" id="text" type="text" class="form-control mt-2 mb-3" rows="3" required></textarea>
                        <input type="submit" value="Добавить комментарий 😊" class="btn btn-outline-dark">
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection

