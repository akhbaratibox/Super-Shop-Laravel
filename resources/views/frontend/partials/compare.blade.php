<a href="" class="nav-box-link">
    <i class="ion-ios-loop d-inline-block nav-box-icon"></i>
    <span class="nav-box-text d-none d-lg-inline-block">Compare</span>
    @if(Session::has('compare'))
        <span class="nav-box-number">{{ count(Session::get('compare'))}}</span>
    @else
        <span class="nav-box-number">0</span>
    @endif
</a>