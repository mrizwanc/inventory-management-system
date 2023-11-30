@include('header')
    <main>
        

    <section class="add">
    @if(session()->has('sucess'))
    <div class="alert alert-success">
        {{ session()->get('sucess') }}
    </div>
@endif


            <!-- Add page content -->
            <h2>Edit Product</h2>
            <form class="product-form" method="POST">
            <h1>Product Information</h1>
            @csrf
            <div>
                <label for="name">Product Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter product name" value="{{$product->name}}" required>

            </div>
            
            <div>
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" placeholder="Enter price" step="0.01" value="{{$product->price}}" required>
            </div>
            <div>
                
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" placeholder="Enter quantity" value="{{$product->quantity}}" required>

            </div>
            
            <button type="submit">Update</button>
        </form>

        </section>

    </main>
    <style>
        label{
            display:block;
            margin: 5px;
        }
        input{
            width: 100%;
            padding: 10px;
        }
    </style>
    @include('footer')