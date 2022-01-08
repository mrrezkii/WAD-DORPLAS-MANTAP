<a href="{{ url("/_donor/$model->id_donor_notes/edit") }}" class="btn btn-warning">Edit</a>
<br>
<button onclick="btnDelete( {{ json_encode($model) }})" class="btn btn-danger mt-2">Hapus</button>

