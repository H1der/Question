@extends('layouts.app')
@section('content')
    @include('vendor.ueditor.assets')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">发布问题</div>
                    <div class="card-body">
                        <form action="{{ route('questions.store') }}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="title">标题</label>
                                <input type="text" value="{{ old('title') }}" name="title"
                                       class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                       placeholder="标题" id="title">
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('body') ? ' is-invalid' : '' }}">
                                <!-- 编辑器容器 -->
                                <script id="container" name="body" style="height: 200px;" type="text/plain">
                                    {!! old('body') !!}
                                </script>

                                <
                                /div>
                                @if ($errors->has('body'))
                                < span
                                class
                                = "invalid-feedback"
                                role = "alert" >
                                    < strong >{{ $errors->first('body') }}< /strong>
                                    < /span>
                                        @endif
                            <button class="btn btn-success" type="submit">发布问题</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 实例化编辑器 -->
    <script type="text/javascript">
                            var ue = UE.getEditor('container', {
                                toolbars: [
                                    ['bold', 'italic', 'underline', 'strikethrough', 'blockquote', 'insertunorderedlist', 'insertorderedlist', 'justifyleft', 'justifycenter', 'justifyright', 'link', 'insertimage', 'fullscreen']
                                ],
                                elementPathEnabled: false,
                                enableContextMenu: false,
                                autoClearEmptyNode: true,
                                wordCount: false,
                                imagePopup: false,
                                autotypeset: {indent: true, imageBlockLine: 'center'}
                            });
        ue.ready(function () {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
    </script>


@endsection
