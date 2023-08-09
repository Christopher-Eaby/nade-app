<h1>Login</h1>

<form method="post">
    <label for="name">Email</label>
    <input type="email" name="email">
    <label for="name">Password</label>
    <input type="text" name="password">
    <input type="submit">
    {{csrf_field()}}
</form>