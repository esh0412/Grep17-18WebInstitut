@extends('layouts.app')

@section('content')
<script src="http://code.jquery.com/jquery-latest.min.js"></script>


  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Réservation</div>
                      <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="/reservations">
                              {{ csrf_field() }}

                               <!--Plage de la liste des magasins-->
                               <div id="accordion">
                                 <div class="institut">
                                   <div class="institut-header">
                                     <a class="institut-link" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                       >> Choisir un institut
                                     </a>
                                   </div>
                                   <div id="collapse1" class="collapse">
                                     <div class="institut-body">

                                         <select class="form-control" id="nominstitut" name="nominstitut">
                                           @foreach ($instituts as $instituts)
                                               <option value="{{$instituts->nominstitut}}">{{$instituts->nominstitut}}</option>
                                           @endforeach
                                          </select>

                                      </div>
                                    </div>
                                  </div>

                                <!--Plage de la liste des prestations-->
                                <div class="institut">
                                  <div class="institut-header">
                                    <a class="institut-link" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                      >> Choisir les prestations
                                    </a>
                                  </div>
                                  <div id="collapse2" class="collapse">
                                    <div class="institut-body">
                                      <div class="panel-body">
                                      <table class="table table-striped task-table">

                                          <!-- Table Headings -->
                                          <thead>
                                              <th>Prestation</th>
                                              <th>&nbsp;</th>
                                          </thead>

                                          <!-- Table Body -->
                                          <tbody>
                                              @foreach ($prestations as $prestations)
                                                  <tr>
                                                      <!-- Nom de prestation -->
                                                      <td class="table-text">
                                                          <div>{{ $prestations->nomdeprestation }}</div>
                                                      </td>
                                                      <td class="table-text">
                                                          <div>{{ $prestations->prix }}.- CHF</div>
                                                      </td>
                                                      <td>
                                                        <input id="nomdeprestation" class="listeprix" name= "pres_checkbox" type="checkbox" value="{{$prestations->prix}}">
                                                        <input id="nomdeprestation" class="listeprix" name= "id_pres" type="hidden" value="{{$prestations->id}}">
                                                      </td>
                                                  </tr>
                                              @endforeach
                                          </tbody>
                                      </table>

                                    </div>
                                    </div>
                                    </div>
                                  </div>


                                  <!--Plage de la liste des prestations-->
                                  <div class="institut">
                                    <div class="institut-header">
                                      <a class="institut-link" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                        >> Choisir la date et heure
                                      </a>
                                    </div>
                                 <div id="collapse3" class="collapse">
                                  <div class="institut-body">
                                      <div class="scrollable">
                                          <div class="group institut-group">

                                          <div class="form-group{{ $errors->has('heure') ? ' has-error' : '' }}">
                                              <label for="heure" class="col-md-4 control-label">Heure:</label>

                                              <div class="col-md-6">
                                                  <input id="heure" type="heure" class="form-control" name="heure" value="{{ old('heure') }}" required>

                                                  @if ($errors->has('heure'))
                                                      <span class="help-block">
                                                          <strong>{{ $errors->first('heure') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>

                                          <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                              <label for="email" class="col-md-4 control-label">Date:</label>

                                              <div class="col-md-6">
                                                  <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}" required>

                                                  @if ($errors->has('date'))
                                                      <span class="help-block">
                                                          <strong>{{ $errors->first('date') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>


                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <!-- Footer Prix et Bouton Confirmer -->
                                   <div class="panel-footer"><span class="border border-primary">
                                        <div class="row">
                                            <div class="col-sm-4"> <label ID="amount" /> </div>
                                            <div class="col-sm-8"><span class="pull-right">
                                             <button type="submit" class="btn btn-primary">
                                                 Confirmer
                                             </button>
                                            </span></div>
                                        </div>
                                      </span>
                                   </div>

                                </div><!--fin d'accordion-->
                    </form><!--fin de form-->
          </div>
        </div>
      </div>
    </div>
  </div>



                 <!-- Script pour le montant totale choisi-->

                 <script type="text/javascript">
                 $(document).ready(function() {
                     $(".listeprix").click(function(event) {
                         var total = 0;
                         $(".listeprix:checked").each(function() {

                             total += parseInt($(this).val());
                         });

                         if (total == 0) {
                           $('#amount').text('');

                         } else {
                           $('#amount').text("Prix Total: "+total+".- CHF");

                         }

                     });
                 });
                 </script>

                 <script type="text/javascript">
                      $('.timepicker').datetimepicker({
                          format: 'HH:mm:ss'
                      });
                  </script>


@endsection
