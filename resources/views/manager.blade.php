@extends ('layouts.app')

@section('subtitle', 'Mananger')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Mananger')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Tampilan <?php echo (Auth::user()->level_id == 1)?'Admin':'Mananger'; ?></div>
            <div class="card-body">
                <h1>Login Sebagai:
                    <?php echo (Auth::user()->level_id == 1)?'Admin':'Mananger'; ?> </h1>
                <a href="{{route('logout')}}">Logout</a>
            </div>
    </div>
</div>
@endsection

@push('js')  
@endpush