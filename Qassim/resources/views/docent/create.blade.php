@extends('docent.layout')
@section('content')

    <div class="container p-3">
        <div class="card">
            <div class="card-header text-center">
                <h3>Docent Toevoegen</h3>
            </div>
            <div class="card-body p-3 mb-3">
                <form action="{{ url('docent') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('firstname') is-invalid @enderror"
                                       id="firstname" name="firstname" placeholder="firstname"
                                       value="{{ old('firstname') }}" aria-describedby="firstnameHelp" required>
                                <label for="floatingInput">Firstname</label>

                                @error('firstname')
                                <div id="firstnameHelp" class="form-text color-red">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('lastname') is-invalid @enderror"
                                       id="lastname" name="lastname" placeholder="lastname"
                                       value="{{ old('lastname') }}"
                                       aria-describedby="lastnameHelp" required>
                                <label for="floatingInput">Lastname</label>

                                @error('lastname')
                                <div id="lastnameHelp" class="form-text color-red">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                       name="email" placeholder="email" value="{{ old('email') }}"
                                       aria-describedby="emailHelp" required>
                                <label for="floatingInput">E-mail address</label>

                                @error('email')
                                <div id="emailHelp" class="form-text color-red">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control @error('phone_number') is-invalid @enderror"
                                       id="phone_number" name="phone_number" placeholder="phone_number"
                                       value="{{ old('phone_number') }}" aria-describedby="phoneHelp" required>
                                <label for="floatingInput">Phone number</label>

                                @error('phone_number')
                                <div id="phoneHelp" class="form-text color-red">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="d-grid col-6 mx-auto">
                        <input type="submit" value="Opslaan" class="btn btn-success"></br>
                    </div>
                </form>

            </div>
        </div>
    </div>
@stop
