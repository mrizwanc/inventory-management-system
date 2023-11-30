 @include('header')
    <main>
        <section class="hero">
            <h1>Welcome to Your Inventory Management System</h1>
            <a href="/add" class="cta-button">Create New Entry</a>
        </section>

        @if(session()->has('sucess'))
    <div class="alert alert-success">
        {{ session()->get('sucess') }}
    </div>
@endif

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        
        <section class="recent-entries">
            <!-- Display recent entries -->
            <!-- Example entry -->
            @foreach($products as $product)
            <div class="entry">
                <h3>{{$product->name}}</h3>
                <p>Date Created: {{$product->created_at}}</p>
                <a href="/view/{{$product->id}}" class="view-button">View</a>
                <a href="/edit/{{$product->id}}" class="view-button">Edit</a>
                <a href="/delete/{{$product->id}}" class="view-button delete" style="background:red;">Delete</a>
            </div>
            @endforeach
            <!-- Add more entries dynamically based on your data -->
        </section>

      

        <section class="statistics">
            <!-- Display relevant statistics -->
            <p>Total Entries: {{$total}}</p> 
            <!-- Add more statistics based on your data -->
        </section>
    </main>
    @include('footer')