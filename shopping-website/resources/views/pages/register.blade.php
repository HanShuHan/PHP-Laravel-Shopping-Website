<x-new-layout>
    <div class="content">
        <div class="form-parent col center">
            <form action="/register" method="POST" id="registrationForm">
                @csrf
                <div class="form-group">
                    <label for="username_register">Username:</label>
                    <input type="text" name="user_name" id="username_register" value="{{old('user_name')}}"/>
                    @error('user_name')
                        <p class="validation-error">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email_register">Email: </label>
                    <input type="email" name="email" id="email_register" value="{{old('email')}}">
                    @error('email')
                        <p class="validation-error">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pass_register">Password: </label>
                    <input type="password" name="password" id="pass_register">
                    @error('password')
                        <p class="validation-error">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pass_confirm_register">Confirm Password: </label>
                    <input type="password" name="password_confirmation" id="pass_confirm_register">
                    @error('password_confirmation')
                        <p class="validation-error">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-button" id="formButton">
                    <button type="submit">Register</button>
                </div>
            </form>

            <section class="form-footer">
                <p>Already have an account? <a href="/login">Login here.</a></p>
            </section>

        </div>
    </div>
</x-new-layout>
