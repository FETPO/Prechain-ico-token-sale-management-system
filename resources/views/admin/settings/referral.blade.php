<h2 class="mb-2 d-inline">Add Referral Commission</h2>
<div>
    <form method="POST" action="{{route('saverefcom')}}">
        @csrf
        @method('put')
        <div class="form-row">
            <div class="form-group col-md-12">
                <label>Referral Commission(%)</label>
                <small>how many percent of {{$settings->token_symbol}}</small>
                <input type="number" class="form-control"  value="{{$settings->ref_com}}" name="ref_com" required>
            </div>
        </div>
        <button type="submit" class="px-3 btn btn-primary">Update Commission</button>
    </form>  
</div>