@foreach($item as $items)

<form id="store{{ $items->report_check_up_id }}" class="form-horizontal" name="store" action="{{ route('check_up_army_2.update_old', $items->report_check_up_id)}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    {{-- <input type="hidden" name="year" value="{{ $item->year }}"> --}}
    <input type="hidden" name="report_check_up_id" value="{{ $items->report_check_up_id }}">

    {{-- @if(($item->report_check_up_main_detail_1->blood_glu >= '74') && ($item->report_check_up_main_detail_1->blood_glu <= '99')) --}}
    ID : {{ $items->report_check_up_id }} | ผลน้ำตาลในเลือด {{ $items->blood_glu }}
        <span class="text-right"><button type="submit" class="btn btn-icon btn-warning mr-2 "><i class="feather icon-inbox"></i> อัพเดท</button></span>

</form>

@endforeach
