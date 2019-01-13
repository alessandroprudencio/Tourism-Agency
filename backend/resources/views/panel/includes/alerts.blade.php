<div>
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
        @endif
</div>

<div>
        @if (session('error'))
        <div class="alert alert-error" role="alert">
            {{session('error')}}
        </div>
        @endif
</div>

<div>
        @if (session('message'))
        <div class="alert alert-info" role="alert">
            {{session('message')}}
        </div>
        @endif
</div>