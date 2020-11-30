<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Kampus</title>
    </head>
    <body>

        <div class="container mt-3">
            <div class="row">
                <div class="col-12">

                    <div class="py-4 d-flex justify-content-end align-items-center">
                        <h2 class="mr-auto">Daftar Kampus</h2>
                        <a href="{{ route('kampuses.create') }}" class="btn btn-primary">
                            Tambah Kampus
                        </a>
                    </div>
                    @if(session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kampus</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kampuses as $kampus)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td>{{$kampus->nama_kampus}}</td>
                                <td align="center" width="30px">
                                    <a href="{{ url('/kampuses/'.$kampus->id) }}" class="btn btn-info btn-sm" role="button">
                                        <i class="fa fa-info-circle"></i> Detail
                                    </a>
                                </td>
                                <td  align="center" width="30px">
                                    <a href="{{ url('/kampuses/'.$kampus->id) }}/edit" class="btn btn-warning btn-sm" role="button">
                                        <i class="fa fa-pencil-circle"></i> Edit
                                    </a>
                                </td>
                                <td  align="center" width="30px">
                                    <form action="{{ route('kampuses.destroy',['kampus'=>$kampus->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <td colspan="3" class="text-center">Tidak ada data...</td>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="py-4 d-flex justify-content-end align-items-center">
                        <h2 class="mr-auto">Compare Kampus</h2>
                    </div>

                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
                        @csrf
                        <table >
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-group">
                                            <label for="nama_kampus">Kampus 1 :</label>
                                            <select class="form-control" name="nama_kampus1" id="nama_kampus1">
                                                <option>--Select kampus 1--</option>

                                                @foreach ($kampuses as $kampus)
                                                    <option value="{{ old($kampus->nama_kampus) ? 'selected' : '' }}">
                                                        {{$kampus->nama_kampus}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </th>
                                    <th width="300px"></th>
                                    <th align="right">
                                        <div class="form-group">
                                            <label for="nama_kampus">Kampus 2 :</label>
                                            <select class="form-control" name="nama_kampus2" id="nama_kampus2">
                                                <option>--Select kampus 2--</option>

                                                @foreach ($kampuses as $kampus)
                                                    <option value="{{ old($kampus->nama_kampus) ? 'selected' : '' }}">
                                                        {{$kampus->nama_kampus}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </th>
                                <tr>
                            <thead>
                        </table>
                        <a href="{{ route('kampuses.compare') }}" class="btn btn-primary">
                            Compare Kampus
                        </a>
                    </form>
                    <h1></h1>
                </div>
            </div>
        </div>
    </body>
</html>
