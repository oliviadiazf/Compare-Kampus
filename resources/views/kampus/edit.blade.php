<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Data Kampus</title>
    </head>
    <body>

        <div class="container pt-4 bg-white">
            <div class="row">
                <div class="col-md-8 col-xl-6">
                    <h1>Edit Data Kampus</h1>
                    <hr>

                    <form action="{{ route('kampuses.update',['kampus'=>$kampus->id]) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="nama_kampus">Nama Kampus</label>
                            <input type="text"
                            class="form-control @error('nama_kampus') is-invalid @enderror"
                            id="nama_kampus" name="nama_kampus" value="{{ old('nama_kampus') ?? $kampus->nama_kampus }}">
                            @error('nama_kampus')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text"
                            class="form-control @error('akreditasi') is-invalid @enderror"
                            id="akreditasi" name="akreditasi" value="{{ old('akreditasi') ?? $kampus->akreditasi }}">
                            @error('akreditasi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text"
                            class="form-control @error('status') is-invalid @enderror"
                            id="status" name="status" value="{{ old('status') ?? $kampus->status }}">
                            @error('status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="peringkat_asia">Peringkat Asia</label>
                            <input type="text"
                            class="form-control @error('peringkat_asia') is-invalid @enderror"
                            id="peringkat_asia" name="peringkat_asia" value="{{ old('peringkat_asia') ?? $kampus->peringkat_asia }}">
                            @error('peringkat_asia')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="peringkat_lokal">Peringkat Lokal</label>
                            <input type="text"
                            class="form-control @error('peringkat_lokal') is-invalid @enderror"
                            id="peringkat_lokal" name="peringkat_lokal" value="{{ old('peringkat_lokal') ?? $kampus->peringkat_lokal }}">
                            @error('peringkat_lokal')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <textarea class="form-control" id="lokasi" rows="3"
                            name="lokasi">{{ old('lokasi') ?? $kampus->lokasi }}</textarea>
                        </div>

                        <div class="form-group row">
                            <label for="gambar_profil">Gambar Profil</label>
                            <div class="col-md-6">
                                <div class="custom-file">
                                <input type="file" id="gambar_profil" name="gambar_profil" accept="image/*"
                                class="custom-file-input @error('gambar_profil') is-invalid @enderror" value="{{ old('gambar_profil') ?? $kampus->gambar_profil }}">
                                <label class="custom-file-label col-md-12" for="gambar_profil"
                                onchange="$('#gambar_profil').val($(this).val());">
                                    {{ $kampus->gambar_profil ?? 'Pilih gambar...'}}
                                </label>
                                @error('gambar_profil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mb-2">Update</button>
                    </form>

                </div>
            </div>
        </div>

    </body>
</html>
