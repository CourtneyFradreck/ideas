<h4> Share yours ideas </h4>
<div class="row">
    <form action="{{route('idea.create')}}" method="post">
        @csrf
        <div class="mb-3">
            <textarea name="Idea" class="form-control" id="idea" rows="3"></textarea>
            @error('Idea')
                <span class="fs-6 text-danger mt-2"> {{$message}} </span>
            @enderror
        </div>
        <div class="">
            <button class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>