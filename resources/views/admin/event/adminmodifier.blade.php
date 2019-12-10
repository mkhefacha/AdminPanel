
<div class="form-group {{ $errors->has('company_id') ? 'has-error' : '' }}">
    <label for="company">{{ trans('cruds.contactContact.fields.company') }}*</label>
    <select name="company_id" id="company" class="form-control select2" required>
        <option value="sélectionner"  disabled >Select companies</option>
        @foreach($companies as $company)
            @if($company->status=="Active")
                <option value="{{ $company->id }}"{{  $event->company_id == $company->id ?'selected' : ''}}>{{ $company->company_name }}</option>
            @endif
        @endforeach
    </select>
    @if($errors->has('company_id'))
        <p class="help-block">
            {{ $errors->first('company_id') }}
        </p>
    @endif
</div>

<div class="form-group {{ $errors->has('liste_id') ? 'has-error' : '' }}">
    <label for="liste">liste*</label>
    <select name="liste_id" id="liste" class="form-control select2" required>
        <option value="sélectionner"  disabled >Select listes</option>
        @foreach($listes as $liste)

            <option value="{{ $liste->id }}" {{  $event->liste_id == $liste->id ?'selected' : ''}}>{{ $liste->liste_name }}</option>

        @endforeach
    </select>
    @if($errors->has('liste_id'))
        <p class="help-block">
            {{ $errors->first('liste_id') }}
        </p>
    @endif
</div>
