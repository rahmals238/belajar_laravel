<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    {{-- $type: success | danger | warning | info --}}
    {{-- $message: pesan yang akan ditampilkan --}}
 
<div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
    @if ($type === 'success') ✅
    @elseif ($type === 'danger') ❌
    @elseif ($type === 'warning') ⚠️
    @else 💡
    @endif
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
</div>