<h1>User Registration</h1>
@if(session('user'))
    <h1 style="color:#063138">  {{session('user')}} your Registration is successfull</h1>
    
@endif

<form action="user" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" ><br>
        <span style="color:red">@error('name'){{$message}}@enderror</span><br><br>
        <input type="text" name="Username" placeholder="UserName"><br>
        

        <label for="male">Birth Day</label><br><input type="date" name="birthday"><br><br>
        
        <input type="email" name="email" placeholder="Email" ><br>
        

        <input type="number" name="phoneno" placeholder="Phone number" ><br>
        

        <input type="text" name="NIC" placeholder="NICNo" ><br>
        

        <input type="radio"  name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>

        <input type="password" name="password" placeholder="Password"><br>
        

        <input type="password" name="password1" placeholder="Re Enter Password"><br>
        <span style="color:red">@error('password'){{$message}}@enderror</span><br><br>

        <button type="submit">Registration</button>
</form>
<a href="shows">Show details</a>
