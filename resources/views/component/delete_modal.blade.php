<!-- Modal -->
<div class="modal fade" id="deleteModal-{{ $article->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteModalLabel">Attention!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete this article: <b>{{ $article->title }}</b> ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <form action="{{ url('delete') }}"  method="post" class="px-0">
            @csrf
            <input type="hidden" name="id" value="{{ $article->id }}">
            <button type="submit" class="btn btn-danger text-white">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>
