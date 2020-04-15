@extends('layouts.app')

@section('content')

<div class="" style="text-align: center">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Jawaban <b>YA</b> sebanyak :</strong>
                <label id="yes">{{ $survey->yes }}</label>
            </div>
        </div>

        @if($survey->yes>-1 & $survey->yes<8)         
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Status:</strong>
                      <label id="status">Resiko Rendah</label>
                  </div>
              </div>     
        @elseif($survey->yes>7 & $survey->yes<15)
              <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status :</strong>
                        <label id="status">Resiko Sedang</label>
                    </div>
                </div>     
        @else
            <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Status :</strong>
                      <label id="status">Resiko Tinggi</label>
                  </div>
              </div>
        @endif
        <div>
           <button type="button" class="btn btn-dark"><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Kembali') }}
                                    </a></button>
        </div>
      </div>
  </div>
@endsection

