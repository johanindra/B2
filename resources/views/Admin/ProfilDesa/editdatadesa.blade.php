<!-- resources/views/nama_view.blade.php -->

@if(session('successvisimisi'))
    <div class="alert alert-success">
        {{ session('successvisimisi') }}
    </div>
@endif

@if(session('errorvisimis'))
    <div class="alert alert-danger">
        {{ session('errorvisimis') }}
    </div>
@endif

<!-- Settings Form -->
<form action="{{ route('visimisi') }}" method="post">
    @csrf

    <div class="row mb-3">
        <div class="text-center mb-3">
            <label for="visi">
                <h4>visi</h4>
        </div>
        <div class="input-group">
            <textarea id="visi" name="visi" class="form-control" aria-label="With textarea" style="min-height: 100px; height:200px;">
                {{$visimisi->where('id','visi')->first()->isi ?? ''}}</textarea>
          </div>
    </div>

    <div class="row mb-3">
        <div class="text-center mb-3">
            <label for="misi">
                <h4>misi</h4>
        </div>
        <div class="input-group">
            <textarea id="misi" name="misi" class="form-control" aria-label="With textarea" style="min-height:100px; height: 200px;">
                {{$visimisi->where('id','misi')->first()->isi ?? ''}}</textarea>
          </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
</form>
