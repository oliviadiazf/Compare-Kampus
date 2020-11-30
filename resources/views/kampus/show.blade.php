<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <title>{{$kampus->nama_kampus}}</title>
    </head>
    <body>

        <div class="container mt-3">
            <div class="row">
                <div class="col-12">

                    @if(session()->has('pesan'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('pesan')}}
                        </div>
                    @endif

                    <div class="pt-3">
                        <h1 class="h2 mr-auto">{{$kampus->nama_kampus}}</h1>
                    </div>

                    <img src='{{ asset("image/$kampus->gambar_profil") }}' class='img-thumbnail' width="200px" height="200px">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-condensed">
                            <body>
                                <tr>
                                    <td>ID Kampus</td>
                                    <td>{{$kampus->id}}</td>
                                </tr>
                                <tr>
                                    <td>Nama Kampus</td>
                                    <td>{{$kampus->nama_kampus}}</td>
                                </tr>
                                <tr>
                                    <td>Akreditasi</td>
                                    <td>{{$kampus->akreditasi}}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>{{$kampus->status}}</td>
                                </tr>
                                <tr>
                                    <td>Peringkat Asia</td>
                                    <td>{{$kampus->peringkat_asia}}</td>
                                </tr>
                                <tr>
                                    <td>Peringkat Lokal</td>
                                    <td>{{$kampus->peringkat_lokal}}</td>
                                </tr>
                                <tr>
                                    <td>Lokasi</td>
                                    <td>{{$kampus->lokasi}}</td>
                                </tr>
                            </body>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
