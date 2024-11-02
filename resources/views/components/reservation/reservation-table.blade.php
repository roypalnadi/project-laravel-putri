<div class="card">
    <div class="card-header">
        <h3 class="card-title">Informasi Kamar</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomer Kamar</th>
                    <th>Jenis Kelamin</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $item)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $item->room_number }}</td>
                        <td>{{ $item->type_gender }}</td>
                        <td><span class="badge badge-success">{{ $item->status }}</span></td>
                    </tr>
                @endforeach
                <!-- Data lainnya -->
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-2">
            {{ $data->links() }}
        </div>
    </div>
</div>
