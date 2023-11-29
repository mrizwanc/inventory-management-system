@include('header')
    <main>
        

    <section class="add">
            <!-- Add page content -->
            <h2>{{$product->name}}</h2>
            <div class="entry"> 
                <p>Price: {{$product->price}}</p>
                <p>Quantity: {{$product->quantity}}</p>
                <p>Date Created: {{$product->created_at}}</p>
                <a href="/edit/{{$product->id}}" class="view-button">Edit</a>
                <a href="/delete/{{$product->id}}" class="view-button delete" style="background:red;">Delete</a>
            </div>

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