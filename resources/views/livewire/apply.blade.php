
   <div class="col-md-6 offset-md-3 mt-1" style="margin-bottom: 40px;">
        <br>
        <a target="_blank" href="#" class="mt-3 d-flex">Carl-Internation is going to help you !</a>
        <h1>Please Fill this Form</h1>
        @if(session()->has('message'))
        <div class="alert alert-success">
          {{session('message')}}
        </div>
        @endif
        <form  wire:submit.prevent="uploadfile" id="form-id" method="POST" >
          <div class="form-group">
            <label for="exampleInputName">Full Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter your name and surname"  wire:model="name">
            @error('name') <span class="text-danger">{{$message}}</span>@enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" >Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" wire:model="email">
            @error('email') <span class="text-danger">{{$message}}</span>@enderror  
        </div>
           <div class="form-group">
            <label for="exampleInputEmail1" >Mobile number</label>
            <input type="text" name="phone" class="form-control" id="exampleInputName" placeholder="Enter your mobile number for a call"  wire:model="phone">
            @error('phone') <span class="text-danger">{{$message}}</span>@enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" >Location</label>
            <input type="text" name="location" class="form-control" id="exampleInputName" placeholder="Enter current city"  wire:model="location">
            @error('location') <span class="text-danger">{{$message}}</span>@enderror
          </div>
          <!-- <div class="form-group">
            <label for="exampleFormControlSelect1">Select Category</label>
            <select class="form-control" id="exampleFormControlSelect1" name="platform"  wire:model="category">
              <option>Full Scholarship</option>
              <option>Percent Scholarship</option>
            </select>
          </div> -->
          <hr>
          <div class="form-group mt-3">
            <label class="mr-2">Upload your documents:</label>
            <input type="file" name="filename" wire:model="filename">
            <br>@error('filename') <span class="text-danger">{{$message}}</span>@enderror
          </div>
          <hr>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> 
