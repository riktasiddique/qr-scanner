<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card p-5">
            <h1 class="text-center text-secondary">Qr Scanner Generate</h1>
            <hr>
            {{-- {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('https://etrashpickup.xyz/'. storage_path('qr_scanner/code.png')) !!} --}}
            <p>
                {!! QrCode::size(200)->backgroundColor(255,55,0)->generate('Hello Rikta'); !!}
            </p>
        </div>
    </div>
</div>