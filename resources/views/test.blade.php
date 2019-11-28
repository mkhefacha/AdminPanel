
@if(auth()->user()->hasRole('Admin'))
    1
    @else
    2
    @endif



