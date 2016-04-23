
<ul class="list-group">
  <li class="list-group-item active">
    {!! link_to_route('all_offenders', $title = 'Offenders', $parameters = [], $attributes = []) !!}
</li>
  <li class="list-group-item">
      {!! link_to_route('traffic_offences', $title = 'Traffic Offences', $parameters = [], $attributes = []) !!}
  </li>
  <li class="list-group-item">
      {!! link_to_route('robbery_offences', $title = 'Robbery Offences', $parameters = [], $attributes = []) !!}
  </li>
  <li class="list-group-item">
      {!! link_to_route('impounds', $title = 'Impounds', $parameters = [], $attributes = []) !!}
  </li>
  <li class="list-group-item">
      {!! link_to_route('missings', $title = 'Missing Persons', $parameters = [], $attributes = []) !!}
  </li>
  <li class="list-group-item">
      {!! link_to_route('evidences', $title = 'Evidence', $parameters = [], $attributes = []) !!}
  </li>
</ul>