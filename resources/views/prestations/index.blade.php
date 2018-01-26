@extends('layouts.app')

@section('content')
      <!-- Form de prestation... -->
      <!-- Liste des prestations -->

<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     Liste des prestations
                 </div>

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
                                       <input class="listeprix" name= "pres_checkbox" type="checkbox" value="{{$prestations->prix}}">
                                     </td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                    <!-- Footer Prix et Bouton Confirmer -->
                     <div class="panel-footer"><span class="border border-primary">
                          <div class="row">
                              <div class="col-sm-4"> <label ID="amount" /> </div>
                              <div class="col-sm-8"><span class="pull-right">
                             <!--Prendre le ID de prestation {{ url('/prestations/calendar'.$prestations->id) }}-->
                              <form class="btn_confirmer" method="POST" action="{{ url('/calendar') }}">
                                      {{ csrf_field() }}
                                      {{ method_field('CONFIRMER') }}

                                      <button type="submit" class="btn btn-primary">
                                          Confirmer
                                      </button>
                               </form >
                              </span></div>
                          </div>
                     </span></div>
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


<!-- Boucle pour la categorie017
@foreach ($categories as $category)
{{ $category->nomdecategorie }}
@endforeach
@foreach ($groupprestation as $prestation )
     @foreach ($prestation as $prestation_par_categorie)
        {{$prestation_par_categorie->nomdeprestation}}
     @endforeach
@endforeach
-->

@endsection
