@extends('layouts.app', ['title' => __('User Management')])

@section('content')
@include('users.partials.header', ['title' => __('Doctores')])   

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Registrar Doctor') }}</h3>
                        </div>

                    </div>
                </div>
                <div class="card-body ">
                    <form method="post" action="{{ url('/doctor/registro') }}" autocomplete="off">
                        @csrf

                        <h6 class="heading-small text-muted mb-4">{{ __('Información de usuario') }}</h6>
                        <div class="pl-lg-4">
                            <div class="form-group pl-lg-6 pr-lg-6"" >
                                <label class="form-control-label" for="input-name">{{ __('Nombre') }}</label>
                                <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Ingrese nombre completo') }}" value="{{ old('name') }}" required autofocus>

                                
                            </div>
                            <!-- -------------- -->
                            <div class="form-group pl-lg-6 pr-lg-6">
                                <label class="form-control-label" for="input-Especialidad">{{ __('Especialidad') }}</label>
                                <!-- <input type="Especialidad" name="Especialidad" id="input-Especialidad" class="form-control" placeholder="{{ __('Especialidad') }}" value="{{ old('Especialidad') }}" required>
                                -->
                                <div class="col-md-6">

                                    <select class="pl-lg-6 pr-lg-6 form-control-label form-control" name="Especialidad">
                                      <option value="Gastroentereología">Gastroentereología</option>
                                      <option value="Cardiologo">Cardiologo</option>
                                      <option value="Psiquiatra" >Psiquiatra</option>
                                  </select>
                              </div>

                          </div>
                          <!--  -->
                          <div class="form-group pl-lg-6 pr-lg-6">
                            <div class="row">
                                <div class="col-6">
                                   <label class="form-control-label" for="input-sexo">{{ __('Sexo') }}</label>
                                   <br>
                                   <label class="radio-inline">
                                    <input type="radio" name="sexo"  value="masculino">Masculino</label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="sexo"  value="femenino">Femenino</label>

                                    </div>
                                    <!--  -->
                                    <div class="col-6">
                                       <div class="form-group pr-lg-8">
                                        <label class="form-control-label" for="input-edad">{{ __('Edad') }}</label>
                                        <input type="number" name="edad" id="input-edad" class="form-control" placeholder="{{ __('edad') }}" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--  --> 
                        <div class="form-group pl-lg-6 pr-lg-6"">
                            <label class="form-control-label" for="input-descripcion">{{ __('Descripcion') }}</label>

                            <textarea class="form-control"  name="descrip" id="descrip" rows="3" placeholder="Write a large text here ..."></textarea>

                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-4">{{ __('Guardar') }}</button>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>

@include('layouts.footers.auth')
</div>
@endsection