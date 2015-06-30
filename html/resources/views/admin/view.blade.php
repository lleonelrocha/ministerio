@extends('app')

@section('body')
    @include('partials.menu')

    <div class="row">
          <div class="col-xs-12">
              <div class="panel-default">
                  <div class="panel-body">
                      <div class="row">


                          <div class="col-xs-12 col-lg-8">
                              <fieldset>
                                  <legend>Datos de {{ $user->fullname }}</legend>
                                  <address>

                                      <strong>Telefono</strong>: {{ $user->phoneNumber }}<br>
                                      <strong>Pais</strong>: {{ $user->country }}<br>
                                      <strong>Provincia</strong>: {{ $user->state }}
                                  </address>

                                  <address>
                                      <strong>Email</strong><br>
                                      <a href="mailto:#">{{ $user->email }}</a>
                                  </address>
                              </fieldset>
                          </div>


                      </div>

                  </div>
              </div>
          </div>
    </div>


@endsection()