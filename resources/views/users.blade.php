<h1>Users Login</h1>
<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter Username"/>
    <br>
    <br>
    <input type="email" name="email" placeholder="Enter EmailID"/>
    <br>
    <br>
    <input type="password" name="password" placeholder="Enter Password"/>
    <br>
    <br>
    <button type="submit">Login</button>
</form>