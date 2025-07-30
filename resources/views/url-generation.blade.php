<div>
    <h2>URL Generation</h2>
    <!-- Get URL Path -->
    Full URL Data : {{URL::current()}} 
    <br> 
    {{url()->current()}}
    <br>
    <br>
    <!-- Get Query Data -->
    Full URL With Query Data : {{URL::full()}}
     <br>
     {{url()->full()}}
     <br>

     <!-- Previous Url From -->
     <br>
    Last URL:  {{URL::previous()}}
</div>