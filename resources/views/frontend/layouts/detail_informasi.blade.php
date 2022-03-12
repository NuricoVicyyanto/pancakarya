@extends('frontend.layouts.layout')
@section('content')
    <div class="container">
        <div class="card shadow p-3">
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <script type='text/javascript'>
                        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus',
                            'September', 'Oktober', 'November', 'Desember'
                        ];
                        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                        var date = new Date();
                        var day = date.getDate();
                        var month = date.getMonth();
                        var thisDay = date.getDay(),
                            thisDay = myDays[thisDay];
                        var yy = date.getYear();
                        var year = (yy < 1000) ? yy + 1900 : yy;
                        document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                    </script>
                    <hr>

                    <!--ubah dari bagian ini sesuai isi konten-->
                    <div class="card-body">
                        <form action="{{ url($dok->id)}}" method="post" enctype="multipart/form-data">
                            <img src="{{ asset($dok->gambar)}}" alt="image">
                            <br>
                            <h2>{{ $dok->judul}}</h2>
                            <hr>
                            <p>{{ $dok->konten}}</p>
                        </form>
                    </div>


            </div>
        </div>
    </div>
<br>
@endsection