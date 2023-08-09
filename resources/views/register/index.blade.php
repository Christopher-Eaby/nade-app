<h1>Register</h1>

<form method="post">
    <label for="name">Name</label>
    <input type="text" name="name">
    <label for="name">Last Name</label>
    <input type="text" name="last_name">
    <label for="name">Email</label>
    <input type="email" name="email">
    <label for="name">Password</label>
    <input type="text" name="password">
    <input type="submit">
    {{csrf_field()}}
</form>