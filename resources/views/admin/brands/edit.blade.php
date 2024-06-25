<form action="{{ route('admin.brands.update', $brand->id) }}" method="POST">
    @method('PUT')
    @csrf
    <!-- <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" id="id" name="id" value="{{ $brand->id }}" disabled>
    </div> -->
    <div class="form-group">
        <label for="brandname">Brand Name</label>
        <input type="text" class="form-control" id="brandname" name="brandname" value="{{ $brand->brandname }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>