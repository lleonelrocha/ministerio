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
                                      <strong>Telefono</strong>: {{ $user->phone_number }}<br>
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