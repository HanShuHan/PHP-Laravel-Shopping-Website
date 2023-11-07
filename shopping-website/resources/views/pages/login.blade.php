<x-new-layout>
    <div class="content d-flex justify-content-center align-items-center min-vh-100" style="background-color: #343a40;">

        <a href="/" class="position-absolute top-0 start-0 p-4 text-white" style="font-size: 24px;">
            <span class="material-icons-sharp">
                chevron_left
            </span>
        </a>
        <div class="form-parent col center p-5 rounded" style="max-width: 500px; background-color: white;">
            @if (session('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('warning') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="/auth" class="form-container text-dark" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username_login" class="form-label">Username:</label>
                    <input type="text" name="user_name" id="username_login" class="form-control">
                    @error('user_name')
                    <p class="validation-error text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_login" class="form-label">Password:</label>
                    <input type="password" name="password" id="password_login" class="form-control">
                    @error('password')
                    <p class="validation-error text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="d-grid gap-2 mb-3">
                    <button type="submit" class="btn btn-outline-dark">Sign In</button>
                </div>
            </form>

            <section class="form-footer text-dark">
                <p><a href="/recover" class="text-dark">Forgot your password?</a></p>
                <p>Don't have an account? <a href="/signup" class="text-dark">Register.</a></p>
            </section>
        </div>
    </div>
</x-new-layout>

