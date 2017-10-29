<h4 class="list-title logo-footer">
    {{ trans('yasna.template.yasna_group') }}
</h4>
<ul class="contact-info">
    <li class="info">
        <span class="info-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
       {{ $address }}
    </li>
    <li class="info">
        <span class="info-icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
        {{ $phone }}
    </li>
    <li class="info">
        <span class="info-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
        <a href="mailto:{{ $email }}">{{ $email }}</a>

    </li>
</ul>