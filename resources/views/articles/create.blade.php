@extends('partials.layout')

@section('content')
    <div class="container mx-auto w-1/2">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Title</span>

                        </label>
                        <input name="title" type="text" placeholder="Article Title" class="input input-bordered w-full @error('title') input-error @enderror"/>
                        @error('title')
                            <label class="label">
                                <span class="label-text-alt text-error">{{$message}}</span>

                            </label>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Content</span>
                        </label>
                        <textarea name="body" class="textarea textarea-bordered @error('title') textarea-error @enderror" placeholder="Content here"></textarea>
                        @error('body')
                            <label class="label">
                                <span class="label-text-alt text-error">{{$message}}</span>
                            </label>
                        @enderror
                    </div>

                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Hind</span>
                        </label>
                        <input class="input input-bordered w-full" type="number" id="quantity" name="hind" min="1">
                    </div>

                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Gluteeni vaba</span>
                        </label>
                        <input type="hidden" name="gluk" value="0" />
                        <input type="checkbox" class="checkbox" name="gluk"></input>
                    </div>

                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Vegan</span>
                        </label>
                        <input type="hidden" name="vegan" value="0" />
                        <input type="checkbox" class="checkbox" name="vegan"></input>
                    </div>

                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Taimetoit</span>
                        </label>
                        <input type="hidden" name="taimetoit" value="0" />
                        <input type="checkbox" class="checkbox" name="taimetoit"></input>
                    </div>

                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Tugevus</span>
                        </label>
                        <input class="input input-bordered w-full" type="number" name="tugevus" min="0" max="5"/>
                    </div>

                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Tags</span>
                        </label>
                            <select multiple class="select select-bordered" name="tags[]">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                        @error('tags.*')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>
                        </label>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Image</span>
                        </label>
                        <input name="images[]" type="file" class="file-input input-bordered w-full @error('image.*') input-error @enderror"/>
                        @error('image.*')
                            <label class="label">
                                <span class="label-text-alt text-error">{{$message}}</span>
                            </label>
                        @enderror
                    </div>
                    <input type="submit" value="Create" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
    </div>
@endsection
