

    <div class="cc">
    <form wire:submit.prevent="submit">
<h2>Login</h2>
<div class="input-box">
    <input type="email" placeholder="Email" required wire:model="email">
    <i class='bx bxs-user'></i>
    @error('email')
    <span style="color: red">{{ $message }}</span>
    @enderror
    @if (Session::has('email_error'))

    <span style="color: red">{{  Session::get('email_error') }}</span>
    @endif
</div>

<div class="input-box">
    <input type="password" placeholder="password" required wire:model="password">
    @error('password')
    <span style="color: red">{{ $message }}</span>
    @enderror
    <i class='bx bxs-lock-alt' ></i>

</div>
<div class="forget-pass">
    <label><input type="checkbox" wire:model="remmeberMe"> Remember me </label>
    <a href="#">Forget password ?!</a>
</div>
<button type="submit" class="btn" style="display: flex; justify-content: center; align-items: center;">Login
    <x-filament::loading-indicator wire:loading style="height: 10px; width: 10px;" />
</button>
<div class="register-link">
    <p>Don't have an account?! <a href="{{ route('app.Register') }}">register</a></p>
</div>
</form>
</div>

