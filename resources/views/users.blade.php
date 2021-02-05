<h1>User Login</h1>
<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter user id" />
    <br>
    <input type="password" name="password" placeholder="Enter user Password">
    <br>
    <button type="submit">Login</button>



</form>