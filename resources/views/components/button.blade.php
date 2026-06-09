<div>
   {{-- Penggunaan dasar --}}
<x-alert type="success" message="Data berhasil disimpan!" />
 
{{-- Dengan data dinamis --}}
<x-alert type="danger" message="{{ $errorMessage }}" />
 
{{-- Component juga bisa memiliki slot (konten yang bisa diisi) --}}
<x-alert type="warning">
    <strong>Perhatian!</strong> Silakan periksa kembali data Anda.
</x-alert>

 <!-- An unexamined life is not worth living. - Socrates -->
</div>