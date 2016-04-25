
<ul class="list-group">
  <li class="list-group-item{{ url()->current() == route('all_offenders') ? ' active': '' }}">
    {!! link_to_route('all_offenders', $title = 'Offenders', $parameters = [], $attributes = []) !!}
</li>
  <li class="list-group-item{{ url()->current() == route('traffic_offences') ? ' active': '' }}">
      {!! link_to_route('traffic_offences', $title = 'Traffic Offences', $parameters = [], $attributes = []) !!}
  </li>
  <li class="list-group-item{{ url()->current() == route('robbery_offences') ? ' active': '' }}">
      {!! link_to_route('robbery_offences', $title = 'Robbery Offences', $parameters = [], $attributes = []) !!}
  </li>
  <li class="list-group-item{{ url()->current() == route('impounds') ? ' active': '' }}">
      {!! link_to_route('impounds', $title = 'Impounds', $parameters = [], $attributes = []) !!}
  </li>
  <li class="list-group-item{{ url()->current() == route('missings') ? ' active': '' }}">
      {!! link_to_route('missings', $title = 'Missing Persons', $parameters = [], $attributes = []) !!}
  </li>
  <li class="list-group-item{{ url()->current() == route('evidences') ? ' active': '' }}">
      {!! link_to_route('evidences', $title = 'Evidence', $parameters = [], $attributes = []) !!}
  </li>
</ul>