
@foreach ( $companies as $companie)
    @if(auth()->user()->company_id == $companie->id)
     <input type="texte" value="{{$companie->company_name ?? ''}}" disabled>
        @endif
@endforeach


