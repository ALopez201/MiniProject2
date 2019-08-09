@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contact</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="post" action="">
                            <fieldset>
                                Your name<input type="text"><br/>
                                Your email <input type="text"><br/>
                                Comments <textarea></textarea><br/>
                                <button type="submit" value="Submit">Submit</button>
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
