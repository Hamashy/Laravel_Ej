<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->

    <form method="POST" action="{{route('cities.store')}}">
        @csrf
        <div>
            <input type="text" name="name"id="name" placeholder="City Name">
        </div>

        <div>
            <button type="submit" >Create</button>
        </div>
    </form>
</div>

