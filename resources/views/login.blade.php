        @extends('layouts.master')

        @section('form')
        <div class="p-5 mb-2 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <div class="row">
                    <div class="col-md-6 offset-md3">
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Endereço de email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                                <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Senha</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        @if (session()->has('success'))
        {{ session()->get('success') }}
        @endif


        @if (auth()->check())
        Already logged in {{ auth()->user()->firstName }} | <a href="{{ route('login.destroy') }}">logout</a>
        @else

        @error('error')
        <span>{{ $message }}</span>
        @enderror

        <form action="{{ route('login.store') }}" method="post">
            @csrf
            <input type="text" name="email" value="dasilva.pablo@mendonca.com">
            @error('email')
            <span>{{ $message }}</span>
            @enderror

            <input type="password" name="password" value="123">
            @error('password')
            <span>{{ $message }}</span>
            @enderror

            <button type="submit">Login</button>
        </form>
        @endif
        @endsection