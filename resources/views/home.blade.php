<!-- Component Insert -->
<x-message-banner msg="User login Successfully" class='success' />
<x-message-banner msg="User sign-in Successfully" class='success'/>

<br>
<x-message-banner msg="Password Not Correct" class='error'/>

<h1>Welcome Laravel</h1>
<a href="/about">About Page</a>

<a href="/details/123">Details Page</a>
<a href="{{URL::to('/details',['1234'])}}">Details Page</a>

<a href="/url-generation">URL Generation</a>




<style>
    .success {
        background: lightgreen;
        color: green;
        padding: 3px 10px;
        border-radius:2px;
        display:inline-block;
        margin:10px;
    }

    .error {
        background: red;
        color: white;
        padding: 3px 10px;
        border-radius:2px;
        display:inline-block;
        margin:10px;
    }
</style>