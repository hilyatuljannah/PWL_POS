<div class="btn-group btn_group-xs d-flex" >
    <a href="{{ route('/edit', $kategori_id) }}"class="btn btn-xs btn-warning" style="position: inline; margin-inline: 5px; height: 35px; width: 45px; background-color: #F5E075; border: 0px;">
        <i class="fas fa-edit"></i>Edit
    </a>
    <form action="" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-xs btn-danger" style="position: inline; margin-inline: 5px; background-color : #D0392D;">
            <i class="fas fa-trash"></i>Delete
        </button>
    </form>
</div>