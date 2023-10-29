<form action="{{ route('penuliss.store') }}" method="POST">
    @csrf

    <div>
        Nama Penulis:
        <br>
        <input type="text" name="name" value="{{ old('name') }}" />

        <br>

        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Email:
        <br>
        <input type="email" name="email" value="{{ old('email') }}" />

        <br>

        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Alamat:
        <br>
        <textarea name="address">{{ old('address') }}</textarea>

        <br>

        @error('address')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input type="submit" value="Simpan">
    </div>
</form>
