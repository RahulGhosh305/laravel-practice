<div>
    <h2>User Form</h2>

    <!-- @if($errors->any())
    @foreach($errors->all() as $error)
        <div>
            {{$error}}
        </div>
    @endforeach
    @endif -->

    <form action="add-user" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" name="username" placeholder="Enter User Name" id="">
            <span style="color: red">@error('username') {{$message}} @enderror</span>
        </div>
        <br>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Enter Password Name" id="">
             <span style="color: red">@error('password') {{$message}} @enderror</span>
        </div>
        <br>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Enter Email Name" id="">
               <span style="color: red">@error('email') {{$message}} @enderror</span>
        </div>
        <br>
        <div class="input-wrapper">
            <p>User Skills</p>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="Javascript" id="js">
            <label for="js">Javascript</label>
        </div>
        <br>
          <div class="input-wrapper">
            <p>Gender</p>
            <input type="radio" name="gender" value="Male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="Female" id="female">
            <label for="female">Female</label>
        </div>
        <br>
        <div class="input-wrapper">
            <p>City</p>
            <select style="width: 180px" name="city" id="">
                <option value="dhaka">Dhaka</option>
                <option value="delhi">Delhi</option>
            </select>
        </div>
        <br>
           <div class="input-wrapper">
            <p>Age</p>
                <input type="range" name="age" id="" min="10" max="18">
            </div>
        <br>
        <div class="input-wrapper">
            <button>Add New User</button>
        </div>
    </form>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>
