<h1>Add Product</h1>

<!-- @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif -->

<form action="product" method="POST">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title">
    </div>
    <div>
        <label for="category">Category</label>
        <input type="text" name="category">
    </div>
    <div>
        <label for="color">Color</label>
        <input type="text" name="color">
    </div>
    <div>
        <label for="size">Size</label>
        <input type="text" name="size">
    </div>
    <div>
        <label for="price">Price</label>
        <input type="number" name="price">
    </div>
   
    <button type="submit">Add Product</button>
</form>
