<div>
    <table class="table table-bordered mt-5">
        <thead>
        <tr>
            <th>No.</th>
            <th>Descripcion</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($efectos as $value)
            <tr>
                <td>{{ $loop->index+1}}</td>
                <td>{{ $value->efectos}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>




</div>