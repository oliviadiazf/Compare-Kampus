<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <title>Compare Kampus</title>
    </head>
    <body>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>
                        <div class="pt-3">
                            <h1 class="h2 mr-auto">Universitas Indonesia (UI)</h1>
                        </div>

                        <img src='{{ asset("image/_UI.png") }}' class='img-thumbnail' width="200px" height="200px">

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover table-condensed">
                                <body>
                                    <tr>
                                        <td>ID Kampus</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Kampus</td>
                                        <td>Universitas Indonesia (UI)</td>
                                    </tr>
                                    <tr>
                                        <td>Akreditasi</td>
                                        <td>A</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>Negeri</td>
                                    </tr>
                                    <tr>
                                        <td>Peringkat Asia</td>
                                        <td>136</td>
                                    </tr>
                                    <tr>
                                        <td>Peringkat Lokal</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi</td>
                                        <td>Jl. Margonda Raya, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424</td>
                                    </tr>
                                </body>
                            </table>
                        </div>
                    </th>

                    {<th>
                        <div class="pt-3">
                            <h1 class="h2 mr-auto">Universitas Brawijaya (UB)</h1>
                        </div>

                        <img src='{{ asset("image/_UB.png") }}' class='img-thumbnail' width="200px" height="200px">

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover table-condensed">
                                <body>
                                    <tr>
                                        <td>ID Kampus</td>
                                        <td>9</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Kampus</td>
                                        <td>Universitas Brawijaya (UB)</td>
                                    </tr>
                                    <tr>
                                        <td>Akreditasi</td>
                                        <td>A</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>Negeri</td>
                                    </tr>
                                    <tr>
                                        <td>Peringkat Asia</td>
                                        <td>290</td>
                                    </tr>
                                    <tr>
                                        <td>Peringkat Lokal</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi</td>
                                        <td>Jl. Veteran, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</td>
                                    </tr>
                                </body>
                            </table>
                        </div>
                    </th>
                </tr>
            </thead>
        </table>
        </form>
    </body>
</html>







{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <title>Compare Kampus</title>
    </head>
    <body>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>
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
                    </th>

                    {{-- <th>
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
                    </th> --}}
                {{-- </tr>
            </thead>
        </table>
        </form>
    </body>
</html>

<script type="text/javascript">
    jQuery(document).ready(function()
    {
        jQuery('select[name="nama_kampus"').on('change', function(){
            var nama_kampusID = jQuery(this).val();
            if(nama_kampusID)
            {
                jQuery.ajax({
                    url : 'dropdownlist/getstates/' +nama_kampusID,
                    type : "GET",
                    dataType : "json",
                    success:function(data)
                    {
                        console.log(data);
                        jQuery('select[name="nama_kampus"]').empty();
                        jQuery.each(data, function(key, value){
                            $('select[name="nama_kampus"]').append('<option value="'+key+'">'+value+'</option>');
                        });
                    }
                });
            }
            else
            {
                $('select[name="nama_kampus"]').empty();
            }
        });
    });
</script> --}}
