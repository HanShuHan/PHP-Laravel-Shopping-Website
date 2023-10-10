<x-layout>
    <div class="content">
        <div class="form-parent col center">
            <form action="/auth" class="form-container" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username_login">Username:</label>
                    <input type="text" name="user_name" id="username_login">
                </div>

                <div class="form-group">
                    <label for="password_login">Password:</label>
                    <input type="password" name="password" id="password_login">
                </div>

                <div class="form-button" id="formButton">
                    <button type="submit">Sign In</button>
                </div>
            </form>

            <section class="form-footer">
                <p><a href="/recover">Forgot your password?</a></p>
                <p>Don't have an account? <a href="/signup">Register.</a></p>
            </section>
        </div>
    </div>
</x-layout>
