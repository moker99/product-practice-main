@extends('templates.message')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card h-100 card-lg">
                    <div class="card-body p-0">

                        <h1>留言板</h1>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="post" action="{{ route('messages.store') }}">
                            @csrf
                            <label for="content">留言：</label>
                            <textarea name="content" required></textarea><br><br>
                            <button type="submit">發布留言</button>
                        </form>

                        <h2>留言列表：</h2>
                        <ul>
                            @foreach ($messages as $message)
                                <li>
                                    <strong>{{ $message->id }}:{{ $message->content }}</strong>

                                    <form method="post" action="{{ route('messages.update', $message->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <textarea name="edited_reply"></textarea>
                                        <button type="submit">編輯</button>
                                    </form>
                                    <!-- 刪除留言按鈕 -->
                                    <form method="post" action="{{ route('messages.destroy', $message->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">刪除</button>
                                    </form>

                                    <!-- 回覆表單 -->
                                    <form method="post" action="{{ route('messages.reply', $message->id) }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="reply">回覆：</label>
                                            <input type="text" name="reply" required>
                                        </div>
                                        <button type="submit">回覆</button>
                                    </form>

                                    <!-- 顯示回覆 -->
                                    @if ($message->replies->count() > 0)
                                        <ul>
                                            @foreach ($message->replies as $reply)
                                                <li>
                                                    <strong>{{ $reply->message_id }}-{{ $reply->id }}</strong>:
                                                    {{ $reply->content }}

                                                    <!-- 編輯回覆表單 -->
                                                    <form method="post" action="{{ route('replies.edit', $reply->id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" name="edited_reply"
                                                            value="{{ $reply->content }}">
                                                        <button type="submit">編輯</button>
                                                    </form>

                                                    <!-- 刪除回覆表單 -->
                                                    <form method="post"
                                                        action="{{ route('replies.destroy', $reply->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">刪除</button>
                                                    </form>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/message.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const forms = document.querySelectorAll('td .dropdown form');

        forms.forEach(element => {
            element.addEventListener('submit', (event) => {
                event.preventDefault();
                Swal.fire({
                    title: 'Do you want to save the changes?',
                    showDenyButton: true,
                    confirmButtonText: 'Save',
                    denyButtonText: `Don't save`,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isDenied) {
                        element.submit();
                    }
                })
            })
        });
    </script>
@endsection
