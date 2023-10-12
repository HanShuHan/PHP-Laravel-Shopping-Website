<div class="container mt-5 pt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/search" method="GET">
                @csrf
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" name="query" placeholder="Search not yet implemented" aria-label="Search" aria-describedby="basic-addon1">
                    <button class="input-group-text" id="basic-addon1" type="submit"><span class="material-icons-sharp">search</span></button>
                </div>
            </form>
        </div>
    </div>
</div>
