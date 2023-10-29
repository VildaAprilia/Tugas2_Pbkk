<h3>DAFTAR PENULIS</h3>

@if (session()->has('pesan'))
    <div style="color: green;">
        {{ session()->get('pesan') }}
    </div>
    <br>
@endif

@foreach ($penuliss as $penulis)
    <div>
        Nama : {{ $penulis->name }}
        <br>
        Email: {{ $penulis->email }}
        <br>
        Alamat: {{ $penulis->address }}
        <br>
        <a href="{{ route('penuliss.show', $penulis->id) }}">Lihat</a>
        <a href="{{ route('penuliss.edit', $penulis->id) }}">Edit</a>

        <form action="{{ route('penuliss.destroy', $penulis->id) }}" method="post">
            @csrf
            @method('DELETE')

            <input type="submit" value="Hapus">
        </form>
    </div>

    <hr>
@endforeach
