@extends('Layout.message')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card h-100 card-lg">
                    <div class="card-body p-0">
                        <ul class="list-group">
                            @foreach ($types as $item)
                                <li class="list-group-item">

                                    <div>
                                        <label class="form-check-label fs-1" for="firstCheckbox">
                                            {{ $item->id }}-{{ $item->text }}
                                        </label>
                                        <div class="dropdown">
                                            <div>
                                                <form action="{{ route('message.destroy', ['message' => $item->id]) }}"
                                                    method="POST" onsubmit="deleteType(this)">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item" type="submit">
                                                        <i class="fa-regular fa-trash-can me-3"></i>
                                                        刪除
                                                    </button>
                                                </form>
                                            </div>
                                            <div>
                                                <form action="{{ route('message.update', ['message' => $item->id]) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @method('put')
                                                    @csrf
                                                    <button class="dropdown-item" type="submit">
                                                        <i class="fa-regular fa-trash-can me-3"></i>
                                                        編輯
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div>
                                                <label class="form-check-label fs-1" for="firstCheckbox">
                                                    {{-- {{ $item->id }}-{{ $item->text }} --}}
                                                </label>
                                                <div class="dropdown">
                                                    <div>
                                                        {{-- <form action="{{ route('message.destroy', ['item' => $item->id]) }}"
                                                        method="post" onsubmit="deleteType(this)">
                                                        @csrf
                                                        @method('DELETE') --}}
                                                        {{-- <button class="dropdown-item" type="submit">
                                                                <i class="fa-regular fa-trash-can me-3"></i>
                                                                刪除
                                                            </button> --}}
                                                        {{-- </form> --}}
                                                    </div>
                                                    <div>
                                                        {{-- <form
                                                                action="{{ route('message.update', ['item' => $item->id]) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @method('PUT')
                                                                @csrf
                                                                <button class="dropdown-item" type="submit">
                                                                    <i class="fa-regular fa-trash-can me-3"></i>
                                                                    編輯
                                                                </button>
                                                            </form> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <textarea name="replydesc" class="w-100" style=" min-height: 30px;"></textarea>
                                </li>
                            @endforeach

                            <li class="list-group-item">
                                <label class="form-check-label fs-1" for="thirdCheckbox">最新留言</label>
                                <hr>
                                <form actixon="{{ route('message.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <textarea name="newdesc" class="w-100" style=" min-height: 150px;"></textarea>
                                    <div class="btn-group justify-content-center d-flex newdesc">
                                        <button type="submit" class="btn btn-primary m-3">儲存按鈕</button>
                                    </div>
                                </form>
                            </li>
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
