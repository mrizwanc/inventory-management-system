@include('header')
    <main>
        

    <section class="add">
            <!-- Add page content -->
            <h2>Add New Product</h2>
            <form class="product-form" method="POST">
            <h1>Product Information</h1>
            @csrf
            <div>
                <label for="name">Product Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter product name" required>

            </div>
            
            <div>
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" placeholder="Enter price" step="0.01" required>
            </div>
            <div>
                
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" placeholder="Enter quantity" required>

            </div>
            
            <button type="submit">Add</button>
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