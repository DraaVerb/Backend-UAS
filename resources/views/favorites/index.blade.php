<form action="/favorites/{{ $favorite->id }}"
      method="POST">

    @csrf
    @method('DELETE')

    <button class="btn btn-danger">

        Remove

    </button>

</form>