@include('bootstrap.bootstrap')
{{-- @section('container') --}}
    <div class="container mt-2">
        <h1 align="center"> Sistem Informasi Pelaporan Grafikasi </h1>
        <div>
            <p><u><b> Menu Laporan Gratifikasi </b></u></p>
        </div>
        <form action="#" method="GET">
        <fieldset class="form-fieldset">
            <table class="table table-borderless">
                <tr>
                    <td> Email </td>
                    <td> : </td>
                    <td> <input type="email" name="email"> </td>
                </tr>
                <tr>
                    <td> Nama </td>
                    <td> : </td>
                    <td> <input type="text" name="nama"> </td>
                </tr>
                <tr>
                    <td> NIP </td>
                    <td> : </td>
                    <td> <input type="number" name="nip"> </td>
                </tr>
                <tr>
                    <td> Jenis Gratifikasi </td>
                    <td> : </td>
                    <td> <div class="mb-3">
                        <div>
                          <label class="form-check">
                            <input class="form-check-input" type="radio" 
                                 name="radios">
                            <span class="form-check-label">Option 1</span>
                          </label>
                          <label class="form-check">
                            <input class="form-check-input" type="radio" 
                                 name="radios" >
                            <span class="form-check-label">Option 2</span>
                          </label>
                          <label class="form-check">
                            <input class="form-check-input" type="radio" 
                                 name="radios" >
                            <span class="form-check-label">Option 2</span>
                          </label>
                        </div>
                      </div>
                    </td>
                </tr>
            </table>    
        </fieldset> 
        </form>
    </div>
{{-- @endsection --}}