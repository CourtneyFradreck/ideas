<h4> Share yours ideas </h4>
<div class="row">
    <form action="{{route('idea.create')}}" method="post">
        @csrf
        <div class="mb-3">
            <textarea name="yourIdea" class="form-control" id="idea" rows="3"></textarea>
        </div>
        <div class="">
            <button class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>