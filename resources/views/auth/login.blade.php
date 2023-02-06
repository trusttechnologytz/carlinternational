<x-guest-layout>
    <section id="abouting" class="abouting">

        <div class="container col-md-12" style="display: flex;
  align-items: center;
  justify-content: center;padding-top:5%;padding-bottom:10%">
            @if (session('status'))
            <div class="col-mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif
            <div class="row" data-aos="fade-up">
                <x-jet-validation-errors class="col-mb-12" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="col-lg-4 col-md-6">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <center><h3 style="">LOGIN</h3></center>
                            <div class="col-md-12 form-group mt-3 mt-md-0" style="padding:3%">
                                <input type="email" style="Width: 300px;" name="email" class="form-control" id="name"
                                    placeholder="UserName" :value="old('email')" required autofocus>
                            </div>
                            <div class="col-md-12 form-group mt-3 mt-md-0" style="padding:3%">
                                <input type="password" class="form-control" style="Width: 300px;" name="password"
                                    id="password" placeholder="*************" required>
                            </div>
                            <div class="text-center">
                                <input type="submit" style="background-color: black; width: 100%; color:white"
                                    name="submit" value="Login">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>
  
</x-guest-layout>