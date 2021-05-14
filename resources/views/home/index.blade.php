@extends('layouts.app')

@section('content')

        <div class="container">
        <div>
            <h1>Todo</h1>
            <h2>今日も頑張りましょう！ {{ date('Y/m/d') }}</h2>

        </div>
                    <div class="form-outline m-4">
                        <input-area
                        >
                        </input-area>
                    </div>
            <form action="{{ route('home.store') }}" method="POST" hidden id="inputForm">
                @csrf
            </form>


            <div class="pt-5">
                <h2>未完了のTodos</h2>

                <ul class="list-group">
        @foreach($incompletelistitems as $incompletelistitem)

                        <div class="d-flex flex-row mb-3">
                            <div>
                                <li class="list-group-item">{{ $incompletelistitem->text }} : {{ mb_substr($incompletelistitem->created_at, 0, 10) }}</li>
                            </div>
                            <form method="POST" action="{{ url('home/'. $incompletelistitem->id ) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-md rgba-deep-orange-strong text-white">完了へ</button>
                            </form>

                            <form method="POST" action="{{ url('home/'. $incompletelistitem->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-md rgba-deep-orange-strong text-white">削除</button>
                            </form>

                        </div>
            @endforeach
                </ul>
            </div>


            <div class="pt-5">
                <h2>完了したTodos</h2>
                <ul class="list-group">
                @foreach($completelistitems as $completelistitem)
                        <div class="d-flex flex-row mb-3">
                            <div>
                                <li class="list-group-item">{{ $completelistitem->text }} : {{ mb_substr($completelistitem->created_at, 0, 10) }}</li>
                            </div>
                            <form method="POST" action="{{ url('home/'. $completelistitem->id ) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-md rgba-deep-orange-strong text-white">やり直し</button>
                            </form>
                            <form method="POST" action="{{ url('home/'. $completelistitem->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-md rgba-deep-orange-strong text-white">削除</button>
                            </form>
                        </div>
                @endforeach
                </ul>
            </div>


        </div>

@endsection
<script>
    import InputArea from "../../js/components/InputArea";
    import IncompleteTodos from "../../js/components/IncompleteTodos";
    export default {
        components: {IncompleteTodos, InputArea}
    }
</script>
