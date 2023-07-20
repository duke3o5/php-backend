<!-- resources/views/user/registration.blade.php -->

<form method="POST" action="addcustomer">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>
 <br><br>   
    <label for="email">Email:</label>
    <input type="email" name="email" required>
<br><br>
<label for="phone">Phone:</label>
    <input type="phone" name="phone" required>
<br><br>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
<br><br>
    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" name="password_confirmation" required>
<br><br>
    <!-- Add any other user details fields here -->

    <button type="submit">Register</button>
</form>