@extends('layouts.admin')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="container p-4">
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{ route('admin.technologies.store') }}" method="POST">
                        <!--Non ti dimenticare di aggiungere enctype se devi permettere il caricamento dell'immagine nel form-->
                        @csrf


                        <div class="mb-3">
                            <label for="name" class="form-label">Name Technology</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" aria-describedby="nameHelpId" placeholder="Add name technology"
                                value="{{ old('name') }}" />
                            <small id="nameHelpId" class="form-text text-muted">Type a name for this technology</small>
                            @error('name')
                                <div class="text-danger py-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="4" aria-describedby="descriptionHelpId"
                                placeholder="Add technology description">{{ old('description') }}</textarea>
                            <small id="descriptionHelpId" class="form-text text-muted">Type a description for this
                                technology</small>
                            @error('description')
                                <div class="text-danger py-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Create New Technologies</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>



@endsection
